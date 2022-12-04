<?php

use src\Entity\AbstractEntity;

class Provider extends AbstractEntity {

	private string $name;

	private string $address;

	private string $email;

	private string $phone1;

	private string $phone2;

	private string $fax;

	private string $code;

    public function getName(): string {
        return $this->name;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPhone1(): string {
        return $this->phone1;
    }

    public function getPhone2(): string {
        return $this->phone2;
    }

    public function getFax(): string {
        return $this->fax;
    }

    public function getCode(): string {
        return $this->code;
    }

    public function setName(string $name): Provider {
        $this->name = $name;
                            
        return $this;
    }

    public function setAddress(string $address): Provider {
        $this->address = $address;
                            
        return $this;
    }

    public function setEmail(string $email): Provider {
        $this->email = $email;
                            
        return $this;
    }

    public function setPhone1(string $phone1): Provider {
        $this->phone1 = $phone1;
                            
        return $this;
    }

    public function setPhone2(string $phone2): Provider {
        $this->phone2 = $phone2;
                            
        return $this;
    }

    public function setFax(string $fax): Provider {
        $this->fax = $fax;
                            
        return $this;
    }

    public function setCode(string $code): Provider {
        $this->code = $code;
                            
        return $this;
    }

}
