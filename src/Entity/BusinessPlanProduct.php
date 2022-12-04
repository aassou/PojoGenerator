<?php

use src\Entity\AbstractEntity;

class BusinessPlanProduct extends AbstractEntity {

	private string $productType;

	private float $landSize;

	private float $unitPrice;

	private float $amount;

	private string $description;

	private int $projectId;

    public function getProductType(): string {
        return $this->productType;
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

    public function setProductType(string $productType): BusinessPlanProduct {
        $this->productType = $productType;
                            
        return $this;
    }

    public function setLandSize(float $landSize): BusinessPlanProduct {
        $this->landSize = $landSize;
                            
        return $this;
    }

    public function setUnitPrice(float $unitPrice): BusinessPlanProduct {
        $this->unitPrice = $unitPrice;
                            
        return $this;
    }

    public function setAmount(float $amount): BusinessPlanProduct {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setDescription(string $description): BusinessPlanProduct {
        $this->description = $description;
                            
        return $this;
    }

    public function setProjectId(int $projectId): BusinessPlanProduct {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
