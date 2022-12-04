<?php

use src\Entity\AbstractEntity;

class ExpensesType extends AbstractEntity {

	private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): ExpensesType {
        $this->name = $name;
                            
        return $this;
    }

}
