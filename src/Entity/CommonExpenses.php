<?php

use src\Entity\AbstractEntity;

class CommonExpenses extends AbstractEntity {

	private string $type;

	private string $operationDate;

	private float $amount;

	private string $companyName;

	private string $designation;

    public function getType(): string {
        return $this->type;
    }

    public function getOperationDate(): string {
        return $this->operationDate;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getCompanyName(): string {
        return $this->companyName;
    }

    public function getDesignation(): string {
        return $this->designation;
    }

    public function setType(string $type): CommonExpenses {
        $this->type = $type;
                            
        return $this;
    }

    public function setOperationDate(string $operationDate): CommonExpenses {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setAmount(float $amount): CommonExpenses {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setCompanyName(string $companyName): CommonExpenses {
        $this->companyName = $companyName;
                            
        return $this;
    }

    public function setDesignation(string $designation): CommonExpenses {
        $this->designation = $designation;
                            
        return $this;
    }

}
