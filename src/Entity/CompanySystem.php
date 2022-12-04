<?php

use src\Entity\AbstractEntity;

class CompanySystem extends AbstractEntity {

	private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): CompanySystem {
        $this->name = $name;
                            
        return $this;
    }

}
