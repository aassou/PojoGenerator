<?php

use src\Entity\AbstractEntity;

class ContractDetails extends AbstractEntity {

	private string $operationDate;

	private float $amount;

	private string $bankCheckNumber;

	private int $employeeContractId;

    public function getOperationDate(): string {
        return $this->operationDate;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getBankCheckNumber(): string {
        return $this->bankCheckNumber;
    }

    public function getEmployeeContractId(): int {
        return $this->employeeContractId;
    }

    public function setOperationDate(string $operationDate): ContractDetails {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setAmount(float $amount): ContractDetails {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setBankCheckNumber(string $bankCheckNumber): ContractDetails {
        $this->bankCheckNumber = $bankCheckNumber;
                            
        return $this;
    }

    public function setEmployeeContractId(int $employeeContractId): ContractDetails {
        $this->employeeContractId = $employeeContractId;
                            
        return $this;
    }

}
