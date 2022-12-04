<?php

use src\Entity\AbstractEntity;

class Fund extends AbstractEntity {

	private string $type;

	private string $operationDate;

	private float $amount;

	private string $designation;

	private string $destination;

    public function getType(): string {
        return $this->type;
    }

    public function getOperationDate(): string {
        return $this->operationDate;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getDesignation(): string {
        return $this->designation;
    }

    public function getDestination(): string {
        return $this->destination;
    }

    public function setType(string $type): Fund {
        $this->type = $type;
                            
        return $this;
    }

    public function setOperationDate(string $operationDate): Fund {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setAmount(float $amount): Fund {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setDesignation(string $designation): Fund {
        $this->designation = $designation;
                            
        return $this;
    }

    public function setDestination(string $destination): Fund {
        $this->destination = $destination;
                            
        return $this;
    }

}
