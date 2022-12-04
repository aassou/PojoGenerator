<?php

use src\Entity\AbstractEntity;

class BankStatement extends AbstractEntity {

	private string $operationDate;

	private string $validationDate;

	private string $label;

	private string $reference;

	private float $outOperation;

	private float $inOperation;

	private string $project;

	private int $projectId;

	private int $bankAccountId;

	private int $status;

    public function getOperationDate(): string {
        return $this->operationDate;
    }

    public function getValidationDate(): string {
        return $this->validationDate;
    }

    public function getLabel(): string {
        return $this->label;
    }

    public function getReference(): string {
        return $this->reference;
    }

    public function getOutOperation(): float {
        return $this->outOperation;
    }

    public function getInOperation(): float {
        return $this->inOperation;
    }

    public function getProject(): string {
        return $this->project;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function getBankAccountId(): int {
        return $this->bankAccountId;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function setOperationDate(string $operationDate): BankStatement {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setValidationDate(string $validationDate): BankStatement {
        $this->validationDate = $validationDate;
                            
        return $this;
    }

    public function setLabel(string $label): BankStatement {
        $this->label = $label;
                            
        return $this;
    }

    public function setReference(string $reference): BankStatement {
        $this->reference = $reference;
                            
        return $this;
    }

    public function setOutOperation(float $outOperation): BankStatement {
        $this->outOperation = $outOperation;
                            
        return $this;
    }

    public function setInOperation(float $inOperation): BankStatement {
        $this->inOperation = $inOperation;
                            
        return $this;
    }

    public function setProject(string $project): BankStatement {
        $this->project = $project;
                            
        return $this;
    }

    public function setProjectId(int $projectId): BankStatement {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setBankAccountId(int $bankAccountId): BankStatement {
        $this->bankAccountId = $bankAccountId;
                            
        return $this;
    }

    public function setStatus(int $status): BankStatement {
        $this->status = $status;
                            
        return $this;
    }

}
