<?php

use src\Entity\AbstractEntity;

class OrderDetails extends AbstractEntity {

	private string $reference;

	private string $productLabel;

	private float $quantity;

	private int $orderId;

    public function getReference(): string {
        return $this->reference;
    }

    public function getProductLabel(): string {
        return $this->productLabel;
    }

    public function getQuantity(): float {
        return $this->quantity;
    }

    public function getOrderId(): int {
        return $this->orderId;
    }

    public function setReference(string $reference): OrderDetails {
        $this->reference = $reference;
                            
        return $this;
    }

    public function setProductLabel(string $productLabel): OrderDetails {
        $this->productLabel = $productLabel;
                            
        return $this;
    }

    public function setQuantity(float $quantity): OrderDetails {
        $this->quantity = $quantity;
                            
        return $this;
    }

    public function setOrderId(int $orderId): OrderDetails {
        $this->orderId = $orderId;
                            
        return $this;
    }

}
