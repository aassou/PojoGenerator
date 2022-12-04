<?php

use src\Entity\AbstractEntity;

class Employee extends AbstractEntity {

	private string $name;

	private string $address;

	private string $arabicName;

	private string $arabicAddress;

	private string $cin;

	private string $phone1;

	private string $phone2;

    public function getName(): string {
        return $this->name;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getArabicName(): string {
        return $this->arabicName;
    }

    public function getArabicAddress(): string {
        return $this->arabicAddress;
    }

    public function getCin(): string {
        return $this->cin;
    }

    public function getPhone1(): string {
        return $this->phone1;
    }

    public function getPhone2(): string {
        return $this->phone2;
    }

    public function setName(string $name): Employee {
        $this->name = $name;
                            
        return $this;
    }

    public function setAddress(string $address): Employee {
        $this->address = $address;
                            
        return $this;
    }

    public function setArabicName(string $arabicName): Employee {
        $this->arabicName = $arabicName;
                            
        return $this;
    }

    public function setArabicAddress(string $arabicAddress): Employee {
        $this->arabicAddress = $arabicAddress;
                            
        return $this;
    }

    public function setCin(string $cin): Employee {
        $this->cin = $cin;
                            
        return $this;
    }

    public function setPhone1(string $phone1): Employee {
        $this->phone1 = $phone1;
                            
        return $this;
    }

    public function setPhone2(string $phone2): Employee {
        $this->phone2 = $phone2;
                            
        return $this;
    }

}
