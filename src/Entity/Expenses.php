<?php

use src\Entity\AbstractEntity;

class Expenses extends AbstractEntity {

	private string $type;

	private string $operationDate;

	private float $amount;

	private string $companyName;

	private string $designation;

	private int $projectId;

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

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function setType(string $type): Expenses {
        $this->type = $type;
                            
        return $this;
    }

    public function setOperationDate(string $operationDate): Expenses {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setAmount(float $amount): Expenses {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setCompanyName(string $companyName): Expenses {
        $this->companyName = $companyName;
                            
        return $this;
    }

    public function setDesignation(string $designation): Expenses {
        $this->designation = $designation;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Expenses {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
