<?php

use src\Entity\AbstractEntity;

class BusinessPlanCost extends AbstractEntity {

	private string $costType;

	private float $landSize;

	private float $unitPrice;

	private float $amount;

	private string $description;

	private int $projectId;

    public function getCostType(): string {
        return $this->costType;
    }

    public function getLandSize(): float {
        return $this->landSize;
    }

    public function getUnitPrice(): float {
        return $this->unitPrice;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function setCostType(string $costType): BusinessPlanCost {
        $this->costType = $costType;
                            
        return $this;
    }

    public function setLandSize(float $landSize): BusinessPlanCost {
        $this->landSize = $landSize;
                            
        return $this;
    }

    public function setUnitPrice(float $unitPrice): BusinessPlanCost {
        $this->unitPrice = $unitPrice;
                            
        return $this;
    }

    public function setAmount(float $amount): BusinessPlanCost {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setDescription(string $description): BusinessPlanCost {
        $this->description = $description;
                            
        return $this;
    }

    public function setProjectId(int $projectId): BusinessPlanCost {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
