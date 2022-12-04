<?php

use src\Entity\AbstractEntity;

class Syndic extends AbstractEntity {

	private string $operationDate;

	private float $amount;

	private string $status;

	private int $customerId;

	private int $projectId;

    public function getOperationDate(): string {
        return $this->operationDate;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getCustomerId(): int {
        return $this->customerId;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function setOperationDate(string $operationDate): Syndic {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setAmount(float $amount): Syndic {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setStatus(string $status): Syndic {
        $this->status = $status;
                            
        return $this;
    }

    public function setCustomerId(int $customerId): Syndic {
        $this->customerId = $customerId;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Syndic {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
