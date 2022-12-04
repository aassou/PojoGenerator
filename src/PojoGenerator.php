<?php
require 'src/Pojo.php';

class PojoGenerator
{
    const TABLE_REGEX_PATTERN = '/table_\w+/';

    const DATA_TYPES = [
        "int" => "int",
        "tinyint" => "bool",
        "decimal" => "float",
        "text" => "string",
        "varchar" => "string",
        "date" => "string",
        "datetime" => "string",
        "longtext" => "string"
    ];

    public string $sqlFile;

    public string $sqlScript;

    public array $databaseTables;

    public array $pojos;

    public function __construct(string $sqlFile)
    {
        $this->sqlFile = $sqlFile;
        $this->sqlScript = file_get_contents($this->sqlFile);
        $this->pojos = [];
        $this->databaseTables = explode(';', $this->sqlScript);
    }

    public function preparePojos()
    {
        foreach($this->databaseTables as $element) {
            preg_match(
                self::TABLE_REGEX_PATTERN,
                $element,
                $matches,
                PREG_OFFSET_CAPTURE
            );

            if ($matches && $matches[0] && $matches[0][0]) {
                $cleanPojo = $this->cleanPojo($matches[0][0], $element);

                $pojo = new Pojo();
                $pojo->setName($cleanPojo["table_name"]);
                $pojo->setFilename($cleanPojo["file_name"]);
                $pojo->setAttributes($cleanPojo["rows"]);

                $this->pojos[] = $pojo;
            }
        }
    }

    public function createPojos()
    {
        $this->preparePojos();
        foreach ($this->pojos as $pojo) {
            $filePath = sprintf("src/Entity/%s", $pojo->getFilename());
            $handle = fopen($filePath, 'w+');
            $fileContent = sprintf("<?php

use src\Entity\AbstractEntity;

class %s extends AbstractEntity {\n",
                $pojo->getName()
            );

            $getter = '';
            $setter = '';

            foreach ($pojo->getAttributes() as $attribute) {
                $trimmedAttribute = str_replace('NULL', '', $attribute);
                $trimmedAttribute = str_replace('NOT', '', $trimmedAttribute);
                $trimmedAttribute = str_replace('DEFAULT', '', $trimmedAttribute);
                $trimmedAttribute = str_replace("'0'", '', $trimmedAttribute);
                $trimmedAttribute = trim($trimmedAttribute);

                $spaceIndex = strpos($trimmedAttribute, ' ');
                $attributeName = substr($trimmedAttribute, 0, $spaceIndex);
                $attributeName = $this->transformClassNameFromSnakeCaseToCamelCase($attributeName);
                $attributeType = substr($trimmedAttribute, $spaceIndex+1, strlen($trimmedAttribute));
                $parenthesisIndex = strpos($attributeType, '(');

                if ($parenthesisIndex) {
                    $attributeType = substr($attributeType, 0, $parenthesisIndex);
                }

                $attributeType = str_replace("0", "", $attributeType);
                $attributeType = str_replace(")", "", $attributeType);
                $attributeType = str_replace(" ", "", $attributeType);

                if (!empty($attributeType)) {
                    if (array_key_exists($attributeType, self::DATA_TYPES)) {
                        $fileContent .= sprintf(
                            "\n\tprivate %s $%s;\n",
                            self::DATA_TYPES[$attributeType],
                            $attributeName
                        );

                        $getter .= sprintf("
    public function get%s(): %s {
        return \$this->%s;
    }\n",
                            ucfirst($attributeName),
                            self::DATA_TYPES[$attributeType],
                            $attributeName
                        );

                        $setter .= sprintf("
    public function set%s(%s \$%s): %s {
        \$this->%s = \$%s;
                            
        return \$this;
    }\n",
                            ucfirst($attributeName),
                            self::DATA_TYPES[$attributeType],
                            $attributeName,
                            $pojo->getName(),
                            $attributeName,
                            $attributeName,
                        );
                    }
                }
            }

            $fileContent .= $getter;
            $fileContent .= $setter;

            $fileContent .= "
}
";
            file_put_contents($filePath, $fileContent);
        }
    }

    private function cleanPojo(string $match, string $databaseTable): array
    {
        $tableName = $match;

        $tempoTable = str_replace('CREATE TABLE `'.$tableName, '', $databaseTable);
        $tempoTable = str_replace('` (', '', $tempoTable);
        $tempoTable = str_replace('` (', '', $tempoTable);
        $tempoTable = str_replace('`', '', $tempoTable);
        $tempoTable = str_replace('id int NOT NULL AUTO_INCREMENT,', '', $tempoTable);
        $tempoTable = str_replace('created datetime DEFAULT NULL,', '', $tempoTable);
        $tempoTable = str_replace('created_by varchar(50) DEFAULT NULL,', '', $tempoTable);
        $tempoTable = str_replace('updated datetime DEFAULT NULL,', '', $tempoTable);
        $tempoTable = str_replace('updated_by varchar(50) DEFAULT NULL,', '', $tempoTable);
        $tempoTable = str_replace('is_active tinyint DEFAULT 1,', '', $tempoTable);
        $tempoTable = str_replace('is_published tinyint DEFAULT 1,', '', $tempoTable);
        $tempoTable = str_replace('PRIMARY KEY (id)', '', $tempoTable);
        $tempoTable = preg_replace(self::TABLE_REGEX_PATTERN, '', $tempoTable);

        $tableName = ucfirst(str_replace('table_', '', $tableName));
        $rows = explode(',', $tempoTable);

        $tableName = $this->transformClassNameFromSnakeCaseToCamelCase($tableName);
        $filename = sprintf("%s.php", $tableName);

        return [
            "table_name" => $tableName,
            "file_name" => $filename,
            "rows" => $rows
        ];
    }

    public function transformClassNameFromSnakeCaseToCamelCase(
        string $name
    ): string {
        while (strpos($name, "_")) {
            $firstLetterOfSecondWordPosition = strpos($name, "_");
            $name[$firstLetterOfSecondWordPosition] = '-';
            $name[$firstLetterOfSecondWordPosition+1] =
                strtoupper($name[$firstLetterOfSecondWordPosition+1]);
        }

        return str_replace('-', '', $name);
    }
}