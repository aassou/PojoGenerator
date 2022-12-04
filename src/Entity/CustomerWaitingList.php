<?php

use src\Entity\AbstractEntity;

class CustomerWaitingList extends AbstractEntity {

	private string $name;

	private string $phone1;

	private string $phone2;

	private string $email;

	private string $applicationDate;

	private string $wantedProperty;

	private string $price;

	private string $propertySize;

	private string $salesLocation;

	private string $purchaseLocation;

    public function getName(): string {
        return $this->name;
    }

    public function getPhone1(): string {
        return $this->phone1;
    }

    public function getPhone2(): string {
        return $this->phone2;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getApplicationDate(): string {
        return $this->applicationDate;
    }

    public function getWantedProperty(): string {
        return $this->wantedProperty;
    }

    public function getPrice(): string {
        return $this->price;
    }

    public function getPropertySize(): string {
        return $this->propertySize;
    }

    public function getSalesLocation(): string {
        return $this->salesLocation;
    }

    public function getPurchaseLocation(): string {
        return $this->purchaseLocation;
    }

    public function setName(string $name): CustomerWaitingList {
        $this->name = $name;
                            
        return $this;
    }

    public function setPhone1(string $phone1): CustomerWaitingList {
        $this->phone1 = $phone1;
                            
        return $this;
    }

    public function setPhone2(string $phone2): CustomerWaitingList {
        $this->phone2 = $phone2;
                            
        return $this;
    }

    public function setEmail(string $email): CustomerWaitingList {
        $this->email = $email;
                            
        return $this;
    }

    public function setApplicationDate(string $applicationDate): CustomerWaitingList {
        $this->applicationDate = $applicationDate;
                            
        return $this;
    }

    public function setWantedProperty(string $wantedProperty): CustomerWaitingList {
        $this->wantedProperty = $wantedProperty;
                            
        return $this;
    }

    public function setPrice(string $price): CustomerWaitingList {
        $this->price = $price;
                            
        return $this;
    }

    public function setPropertySize(string $propertySize): CustomerWaitingList {
        $this->propertySize = $propertySize;
                            
        return $this;
    }

    public function setSalesLocation(string $salesLocation): CustomerWaitingList {
        $this->salesLocation = $salesLocation;
                            
        return $this;
    }

    public function setPurchaseLocation(string $purchaseLocation): CustomerWaitingList {
        $this->purchaseLocation = $purchaseLocation;
                            
        return $this;
    }

}
