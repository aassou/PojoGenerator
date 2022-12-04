<?php

use src\Entity\AbstractEntity;

class FundOut extends AbstractEntity {

	private float $amount;

	private string $designation;

	private string $destination;

	private string $operationDate;

	private string $user;

    public function getAmount(): float {
        return $this->amount;
    }

    public function getDesignation(): string {
        return $this->designation;
    }

    public function getDestination(): string {
        return $this->destination;
    }

    public function getOperationDate(): string {
        return $this->operationDate;
    }

    public function getUser(): string {
        return $this->user;
    }

    public function setAmount(float $amount): FundOut {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setDesignation(string $designation): FundOut {
        $this->designation = $designation;
                            
        return $this;
    }

    public function setDestination(string $destination): FundOut {
        $this->destination = $destination;
                            
        return $this;
    }

    public function setOperationDate(string $operationDate): FundOut {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setUser(string $user): FundOut {
        $this->user = $user;
                            
        return $this;
    }

}
