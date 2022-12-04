<?php

use src\Entity\AbstractEntity;

class ProviedPayments extends AbstractEntity {

	private float $amount;

	private string $paymentDate;

	private int $projectId;

	private int $providerId;

	private string $paymentMethod;

	private string $bankCheckNumber;

	private string $image;

    public function getAmount(): float {
        return $this->amount;
    }

    public function getPaymentDate(): string {
        return $this->paymentDate;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function getProviderId(): int {
        return $this->providerId;
    }

    public function getPaymentMethod(): string {
        return $this->paymentMethod;
    }

    public function getBankCheckNumber(): string {
        return $this->bankCheckNumber;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function setAmount(float $amount): ProviedPayments {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setPaymentDate(string $paymentDate): ProviedPayments {
        $this->paymentDate = $paymentDate;
                            
        return $this;
    }

    public function setProjectId(int $projectId): ProviedPayments {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setProviderId(int $providerId): ProviedPayments {
        $this->providerId = $providerId;
                            
        return $this;
    }

    public function setPaymentMethod(string $paymentMethod): ProviedPayments {
        $this->paymentMethod = $paymentMethod;
                            
        return $this;
    }

    public function setBankCheckNumber(string $bankCheckNumber): ProviedPayments {
        $this->bankCheckNumber = $bankCheckNumber;
                            
        return $this;
    }

    public function setImage(string $image): ProviedPayments {
        $this->image = $image;
                            
        return $this;
    }

}
