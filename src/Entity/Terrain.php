<?php

use src\Entity\AbstractEntity;

class Terrain extends AbstractEntity {

	private float $price;

	private string $seller;

	private float $buyingFees;

	private float $landSize;

	private string $location;

	private int $projectId;

    public function getPrice(): float {
        return $this->price;
    }

    public function getSeller(): string {
        return $this->seller;
    }

    public function getBuyingFees(): float {
        return $this->buyingFees;
    }

    public function getLandSize(): float {
        return $this->landSize;
    }

    public function getLocation(): string {
        return $this->location;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function setPrice(float $price): Terrain {
        $this->price = $price;
                            
        return $this;
    }

    public function setSeller(string $seller): Terrain {
        $this->seller = $seller;
                            
        return $this;
    }

    public function setBuyingFees(float $buyingFees): Terrain {
        $this->buyingFees = $buyingFees;
                            
        return $this;
    }

    public function setLandSize(float $landSize): Terrain {
        $this->landSize = $landSize;
                            
        return $this;
    }

    public function setLocation(string $location): Terrain {
        $this->location = $location;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Terrain {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
