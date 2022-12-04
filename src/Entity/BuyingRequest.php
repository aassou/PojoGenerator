<?php

use src\Entity\AbstractEntity;

class BuyingRequest extends AbstractEntity {

	private string $name;

	private string $email;

	private string $phone;

	private string $description;

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setName(string $name): BuyingRequest {
        $this->name = $name;
                            
        return $this;
    }

    public function setEmail(string $email): BuyingRequest {
        $this->email = $email;
                            
        return $this;
    }

    public function setPhone(string $phone): BuyingRequest {
        $this->phone = $phone;
                            
        return $this;
    }

    public function setDescription(string $description): BuyingRequest {
        $this->description = $description;
                            
        return $this;
    }

}
