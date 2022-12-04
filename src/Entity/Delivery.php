<?php

use src\Entity\AbstractEntity;

class Delivery extends AbstractEntity {

	private string $label;

	private int $type;

	private int $status;

	private string $designation;

	private float $quantity;

	private float $unitPrice;

	private bool $isPaid;

	private float $rest;

	private string $deliveryDate;

	private string $paymentMethod;

	private int $providerId;

	private int $projectId;

	private string $otherProject;

	private string $code;

    public function getLabel(): string {
        return $this->label;
    }

    public function getType(): int {
        return $this->type;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function getDesignation(): string {
        return $this->designation;
    }

    public function getQuantity(): float {
        return $this->quantity;
    }

    public function getUnitPrice(): float {
        return $this->unitPrice;
    }

    public function getIsPaid(): bool {
        return $this->isPaid;
    }

    public function getRest(): float {
        return $this->rest;
    }

    public function getDeliveryDate(): string {
        return $this->deliveryDate;
    }

    public function getPaymentMethod(): string {
        return $this->paymentMethod;
    }

    public function getProviderId(): int {
        return $this->providerId;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function getOtherProject(): string {
        return $this->otherProject;
    }

    public function getCode(): string {
        return $this->code;
    }

    public function setLabel(string $label): Delivery {
        $this->label = $label;
                            
        return $this;
    }

    public function setType(int $type): Delivery {
        $this->type = $type;
                            
        return $this;
    }

    public function setStatus(int $status): Delivery {
        $this->status = $status;
                            
        return $this;
    }

    public function setDesignation(string $designation): Delivery {
        $this->designation = $designation;
                            
        return $this;
    }

    public function setQuantity(float $quantity): Delivery {
        $this->quantity = $quantity;
                            
        return $this;
    }

    public function setUnitPrice(float $unitPrice): Delivery {
        $this->unitPrice = $unitPrice;
                            
        return $this;
    }

    public function setIsPaid(bool $isPaid): Delivery {
        $this->isPaid = $isPaid;
                            
        return $this;
    }

    public function setRest(float $rest): Delivery {
        $this->rest = $rest;
                            
        return $this;
    }

    public function setDeliveryDate(string $deliveryDate): Delivery {
        $this->deliveryDate = $deliveryDate;
                            
        return $this;
    }

    public function setPaymentMethod(string $paymentMethod): Delivery {
        $this->paymentMethod = $paymentMethod;
                            
        return $this;
    }

    public function setProviderId(int $providerId): Delivery {
        $this->providerId = $providerId;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Delivery {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setOtherProject(string $otherProject): Delivery {
        $this->otherProject = $otherProject;
                            
        return $this;
    }

    public function setCode(string $code): Delivery {
        $this->code = $code;
                            
        return $this;
    }

}
