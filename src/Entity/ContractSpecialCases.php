<?php

use src\Entity\AbstractEntity;

class ContractSpecialCases extends AbstractEntity {

	private string $date;

	private float $amount;

	private string $observation;

	private int $status;

	private string $contractCode;

	private int $contractId;

    public function getDate(): string {
        return $this->date;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getObservation(): string {
        return $this->observation;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function getContractCode(): string {
        return $this->contractCode;
    }

    public function getContractId(): int {
        return $this->contractId;
    }

    public function setDate(string $date): ContractSpecialCases {
        $this->date = $date;
                            
        return $this;
    }

    public function setAmount(float $amount): ContractSpecialCases {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setObservation(string $observation): ContractSpecialCases {
        $this->observation = $observation;
                            
        return $this;
    }

    public function setStatus(int $status): ContractSpecialCases {
        $this->status = $status;
                            
        return $this;
    }

    public function setContractCode(string $contractCode): ContractSpecialCases {
        $this->contractCode = $contractCode;
                            
        return $this;
    }

    public function setContractId(int $contractId): ContractSpecialCases {
        $this->contractId = $contractId;
                            
        return $this;
    }

}
