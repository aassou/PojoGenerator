<?php

use src\Entity\AbstractEntity;

class DeliveryDetail extends AbstractEntity {

	private int $type;

	private string $label;

	private string $designation;

	private float $unitPrice;

	private float $quantity;

	private int $deliveryId;

    public function getType(): int {
        return $this->type;
    }

    public function getLabel(): string {
        return $this->label;
    }

    public function getDesignation(): string {
        return $this->designation;
    }

    public function getUnitPrice(): float {
        return $this->unitPrice;
    }

    public function getQuantity(): float {
        return $this->quantity;
    }

    public function getDeliveryId(): int {
        return $this->deliveryId;
    }

    public function setType(int $type): DeliveryDetail {
        $this->type = $type;
                            
        return $this;
    }

    public function setLabel(string $label): DeliveryDetail {
        $this->label = $label;
                            
        return $this;
    }

    public function setDesignation(string $designation): DeliveryDetail {
        $this->designation = $designation;
                            
        return $this;
    }

    public function setUnitPrice(float $unitPrice): DeliveryDetail {
        $this->unitPrice = $unitPrice;
                            
        return $this;
    }

    public function setQuantity(float $quantity): DeliveryDetail {
        $this->quantity = $quantity;
                            
        return $this;
    }

    public function setDeliveryId(int $deliveryId): DeliveryDetail {
        $this->deliveryId = $deliveryId;
                            
        return $this;
    }

}
