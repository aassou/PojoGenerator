<?php

use src\Entity\AbstractEntity;

class ConfigurationOrderBy extends AbstractEntity {

	private string $tableName;

	private string $tableOrder;

    public function getTableName(): string {
        return $this->tableName;
    }

    public function getTableOrder(): string {
        return $this->tableOrder;
    }

    public function setTableName(string $tableName): ConfigurationOrderBy {
        $this->tableName = $tableName;
                            
        return $this;
    }

    public function setTableOrder(string $tableOrder): ConfigurationOrderBy {
        $this->tableOrder = $tableOrder;
                            
        return $this;
    }

}
