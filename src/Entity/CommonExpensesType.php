<?php

use src\Entity\AbstractEntity;

class CommonExpensesType extends AbstractEntity {

	private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): CommonExpensesType {
        $this->name = $name;
                            
        return $this;
    }

}
