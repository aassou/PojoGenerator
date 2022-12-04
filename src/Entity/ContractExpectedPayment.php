<?php

use src\Entity\AbstractEntity;

class ContractExpectedPayment extends AbstractEntity {

	private string $expectedPaymentDate;

	private string $contractCode;

	private int $status;

    public function getExpectedPaymentDate(): string {
        return $this->expectedPaymentDate;
    }

    public function getContractCode(): string {
        return $this->contractCode;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function setExpectedPaymentDate(string $expectedPaymentDate): ContractExpectedPayment {
        $this->expectedPaymentDate = $expectedPaymentDate;
                            
        return $this;
    }

    public function setContractCode(string $contractCode): ContractExpectedPayment {
        $this->contractCode = $contractCode;
                            
        return $this;
    }

    public function setStatus(int $status): ContractExpectedPayment {
        $this->status = $status;
                            
        return $this;
    }

}
