<?php

use src\Entity\AbstractEntity;

class Customer extends AbstractEntity {

	private string $name;

	private string $arabicName;

	private string $address;

	private string $arabicAddress;

	private string $phone1;

	private string $phone2;

	private string $cin;

	private string $email;

	private string $facebook;

	private string $code;

    public function getName(): string {
        return $this->name;
    }

    public function getArabicName(): string {
        return $this->arabicName;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getArabicAddress(): string {
        return $this->arabicAddress;
    }

    public function getPhone1(): string {
        return $this->phone1;
    }

    public function getPhone2(): string {
        return $this->phone2;
    }

    public function getCin(): string {
        return $this->cin;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getFacebook(): string {
        return $this->facebook;
    }

    public function getCode(): string {
        return $this->code;
    }

    public function setName(string $name): Customer {
        $this->name = $name;
                            
        return $this;
    }

    public function setArabicName(string $arabicName): Customer {
        $this->arabicName = $arabicName;
                            
        return $this;
    }

    public function setAddress(string $address): Customer {
        $this->address = $address;
                            
        return $this;
    }

    public function setArabicAddress(string $arabicAddress): Customer {
        $this->arabicAddress = $arabicAddress;
                            
        return $this;
    }

    public function setPhone1(string $phone1): Customer {
        $this->phone1 = $phone1;
                            
        return $this;
    }

    public function setPhone2(string $phone2): Customer {
        $this->phone2 = $phone2;
                            
        return $this;
    }

    public function setCin(string $cin): Customer {
        $this->cin = $cin;
                            
        return $this;
    }

    public function setEmail(string $email): Customer {
        $this->email = $email;
                            
        return $this;
    }

    public function setFacebook(string $facebook): Customer {
        $this->facebook = $facebook;
                            
        return $this;
    }

    public function setCode(string $code): Customer {
        $this->code = $code;
                            
        return $this;
    }

}
