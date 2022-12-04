<?php

use src\Entity\AbstractEntity;

class BankAccount extends AbstractEntity {

	private string $number;

	private string $name;

	private string $dateCreation;

    public function getNumber(): string {
        return $this->number;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDateCreation(): string {
        return $this->dateCreation;
    }

    public function setNumber(string $number): BankAccount {
        $this->number = $number;
                            
        return $this;
    }

    public function setName(string $name): BankAccount {
        $this->name = $name;
                            
        return $this;
    }

    public function setDateCreation(string $dateCreation): BankAccount {
        $this->dateCreation = $dateCreation;
                            
        return $this;
    }

}
