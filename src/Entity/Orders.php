<?php

use src\Entity\AbstractEntity;

class Orders extends AbstractEntity {

	private int $providerId;

	private int $projectId;

	private string $orderDate;

	private string $orderNumber;

	private string $designation;

	private int $status;

	private string $deliveryCode;

    public function getProviderId(): int {
        return $this->providerId;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function getOrderDate(): string {
        return $this->orderDate;
    }

    public function getOrderNumber(): string {
        return $this->orderNumber;
    }

    public function getDesignation(): string {
        return $this->designation;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function getDeliveryCode(): string {
        return $this->deliveryCode;
    }

    public function setProviderId(int $providerId): Orders {
        $this->providerId = $providerId;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Orders {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setOrderDate(string $orderDate): Orders {
        $this->orderDate = $orderDate;
                            
        return $this;
    }

    public function setOrderNumber(string $orderNumber): Orders {
        $this->orderNumber = $orderNumber;
                            
        return $this;
    }

    public function setDesignation(string $designation): Orders {
        $this->designation = $designation;
                            
        return $this;
    }

    public function setStatus(int $status): Orders {
        $this->status = $status;
                            
        return $this;
    }

    public function setDeliveryCode(string $deliveryCode): Orders {
        $this->deliveryCode = $deliveryCode;
                            
        return $this;
    }

}
