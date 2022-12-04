<?php

require 'src/PojoGenerator.php';

$pojoGenerator = new PojoGenerator("immoerp_db_schema.sql");
$pojoGenerator->createPojos();

//$sqlScript = file_get_contents("immoerp_db_schema.sql");
//
//function transformClassNameFromSnakeCaseToCamelCase(string $name): string
//{
//    while (strpos($name, "_")) {
//        $firstLetterOfSecondWordPosition = strpos($name, "_");
//        $name[$firstLetterOfSecondWordPosition] = '-';
//        $name[$firstLetterOfSecondWordPosition+1] = strtoupper($name[$firstLetterOfSecondWordPosition+1]);
//    }
//
//    return $name;
//}
//
//$array = explode(';', $sqlScript);
//$tables = [];
//$tablePatternRegex = '/table_\w+/';
//$pojos = [];
//
//$matchesArray = [];
//
//$types = [
//    "int" => "int",
//    "tinyint" => "boolean",
//    "decimal" => "float",
//    "text" => "string",
//    "varchar" => "string",
//    "date" => "string",
//    "datetime" => "string",
//    "longtext" => "string"
//];
//
//foreach($array as $element) {
//    preg_match($tablePatternRegex, $element, $matches, PREG_OFFSET_CAPTURE);
//
//    if ($matches && $matches[0] && $matches[0][0]) {
//        $tableName = $matches[0][0];
//        $tempoTable = str_replace('CREATE TABLE `'.$tableName, '', $element);
//        $tempoTable = str_replace('` (', '', $tempoTable);
//        $tempoTable = str_replace('` (', '', $tempoTable);
//        $tempoTable = str_replace('`', '', $tempoTable);
//        $tempoTable = str_replace('id int NOT NULL AUTO_INCREMENT,', '', $tempoTable);
//        $tempoTable = str_replace('created datetime DEFAULT NULL,', '', $tempoTable);
//        $tempoTable = str_replace('created_by varchar(50) DEFAULT NULL,', '', $tempoTable);
//        $tempoTable = str_replace('updated datetime DEFAULT NULL,', '', $tempoTable);
//        $tempoTable = str_replace('updated_by varchar(50) DEFAULT NULL,', '', $tempoTable);
//        $tempoTable = str_replace('is_active tinyint DEFAULT 1,', '', $tempoTable);
//        $tempoTable = str_replace('is_published tinyint DEFAULT 1,', '', $tempoTable);
//        $tempoTable = str_replace('PRIMARY KEY (id)', '', $tempoTable);
//        $tempoTable = preg_replace($tablePatternRegex, '', $tempoTable);
//        $tableName = ucfirst(str_replace('table_', '', $tableName));
//        $rows = explode(',', $tempoTable);
//        $tables[] = ["table_name" => $tableName, "table_rows" => $rows];
//
//        $tableName = transformClassNameFromSnakeCaseToCamelCase($tableName);
//        $tableName = str_replace('-', '', $tableName);
//        $filename = sprintf("%s.php", $tableName);
//
//        $pojo = new Pojo();
//        $pojo->setName($tableName);
//        $pojo->setFilename($filename);
//        $pojo->setAttributes($rows);
//        $pojos[] = $pojo;
//    }
//}
//
//foreach ($pojos as $pojo) {
//    $filePath = sprintf("src/Entity/%s", $pojo->getFilename());
//    $handle = fopen($filePath, 'w+');
//    $fileContent = sprintf("<?php
//
//use src\Entity\AbstractEntity;
//
//class %s extends AbstractEntity {\n",
//        $pojo->getName()
//    );
//
//    foreach ($pojo->getAttributes() as $attribute) {
//        $trimmedAttribute = str_replace('NULL', '', $attribute);
//        $trimmedAttribute = str_replace('NOT', '', $trimmedAttribute);
//        $trimmedAttribute = str_replace('DEFAULT', '', $trimmedAttribute);
//        $trimmedAttribute = str_replace("'0'", '', $trimmedAttribute);
//        $trimmedAttribute = trim($trimmedAttribute);
//
//        $spaceIndex = strpos($trimmedAttribute, ' ');
//        $attributeName = substr($trimmedAttribute, 0, $spaceIndex);
//        $attributeType = substr($trimmedAttribute, $spaceIndex+1, strlen($trimmedAttribute));
//        $parenthesisIndex = strpos($attributeType, '(');
//
//        if ($parenthesisIndex) {
//            $attributeType = substr($attributeType, 0, $parenthesisIndex);
//        }
//
//        $attributeType = str_replace("0", "", $attributeType);
//        $attributeType = str_replace(")", "", $attributeType);
//        $attributeType = str_replace(" ", "", $attributeType);
//
//        if (!empty($attributeType)) {
//            if (array_key_exists($attributeType, $types)) {
//                $fileContent .= sprintf(
//                    "\n\tprivate %s $%s;\n",
//                    $types[$attributeType],
//                    $attributeName
//                );
//            }
//        }
//    }
//
//    $fileContent .= "
//}
//";
//    file_put_contents($filePath, $fileContent);
//}
//
