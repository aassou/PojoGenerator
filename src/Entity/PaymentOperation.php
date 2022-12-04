<?php

use src\Entity\AbstractEntity;

class PaymentOperation extends AbstractEntity {

	private string $reference;

	private string $operationDate;

	private string $bankAccount;

	private string $observation;

	private float $amount;

	private string $paymentMethod;

	private int $contractId;

	private string $bankCheckNumber;

	private string $image;

	private int $status;

    public function getReference(): string {
        return $this->reference;
    }

    public function getOperationDate(): string {
        return $this->operationDate;
    }

    public function getBankAccount(): string {
        return $this->bankAccount;
    }

    public function getObservation(): string {
        return $this->observation;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getPaymentMethod(): string {
        return $this->paymentMethod;
    }

    public function getContractId(): int {
        return $this->contractId;
    }

    public function getBankCheckNumber(): string {
        return $this->bankCheckNumber;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function setReference(string $reference): PaymentOperation {
        $this->reference = $reference;
                            
        return $this;
    }

    public function setOperationDate(string $operationDate): PaymentOperation {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setBankAccount(string $bankAccount): PaymentOperation {
        $this->bankAccount = $bankAccount;
                            
        return $this;
    }

    public function setObservation(string $observation): PaymentOperation {
        $this->observation = $observation;
                            
        return $this;
    }

    public function setAmount(float $amount): PaymentOperation {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setPaymentMethod(string $paymentMethod): PaymentOperation {
        $this->paymentMethod = $paymentMethod;
                            
        return $this;
    }

    public function setContractId(int $contractId): PaymentOperation {
        $this->contractId = $contractId;
                            
        return $this;
    }

    public function setBankCheckNumber(string $bankCheckNumber): PaymentOperation {
        $this->bankCheckNumber = $bankCheckNumber;
                            
        return $this;
    }

    public function setImage(string $image): PaymentOperation {
        $this->image = $image;
                            
        return $this;
    }

    public function setStatus(int $status): PaymentOperation {
        $this->status = $status;
                            
        return $this;
    }

}
