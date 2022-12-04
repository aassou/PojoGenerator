<?php

use src\Entity\AbstractEntity;

class SyndicExpensesType extends AbstractEntity {

	private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): SyndicExpensesType {
        $this->name = $name;
                            
        return $this;
    }

}
