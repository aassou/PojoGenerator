<?php

use src\Entity\AbstractEntity;

class PhoneBook extends AbstractEntity {

	private string $name;

	private string $description;

	private string $phone1;

	private string $phone2;

	private string $phone3;

	private string $phone4;

	private string $fax;

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPhone1(): string {
        return $this->phone1;
    }

    public function getPhone2(): string {
        return $this->phone2;
    }

    public function getPhone3(): string {
        return $this->phone3;
    }

    public function getPhone4(): string {
        return $this->phone4;
    }

    public function getFax(): string {
        return $this->fax;
    }

    public function setName(string $name): PhoneBook {
        $this->name = $name;
                            
        return $this;
    }

    public function setDescription(string $description): PhoneBook {
        $this->description = $description;
                            
        return $this;
    }

    public function setPhone1(string $phone1): PhoneBook {
        $this->phone1 = $phone1;
                            
        return $this;
    }

    public function setPhone2(string $phone2): PhoneBook {
        $this->phone2 = $phone2;
                            
        return $this;
    }

    public function setPhone3(string $phone3): PhoneBook {
        $this->phone3 = $phone3;
                            
        return $this;
    }

    public function setPhone4(string $phone4): PhoneBook {
        $this->phone4 = $phone4;
                            
        return $this;
    }

    public function setFax(string $fax): PhoneBook {
        $this->fax = $fax;
                            
        return $this;
    }

}
