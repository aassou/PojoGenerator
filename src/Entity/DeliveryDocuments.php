<?php

use src\Entity\AbstractEntity;

class DeliveryDocuments extends AbstractEntity {

	private string $name;

	private string $image;

	private int $deliveryId;

    public function getName(): string {
        return $this->name;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function getDeliveryId(): int {
        return $this->deliveryId;
    }

    public function setName(string $name): DeliveryDocuments {
        $this->name = $name;
                            
        return $this;
    }

    public function setImage(string $image): DeliveryDocuments {
        $this->image = $image;
                            
        return $this;
    }

    public function setDeliveryId(int $deliveryId): DeliveryDocuments {
        $this->deliveryId = $deliveryId;
                            
        return $this;
    }

}
