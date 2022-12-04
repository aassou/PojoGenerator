<?php

use src\Entity\AbstractEntity;

class CommercialStore extends AbstractEntity {

	private string $name;

	private float $officialSize;

	private float $secondarySize;

	private string $facade;

	private float $price;

	private float $resellPrice;

	private string $mezzanine;

	private string $status;

	private int $projectId;

	private bool $isReserved;

	private string $reservedBy;

	private string $landTitle;

	private float $officialPrice;

	private float $officialAdvanceAmount;

    public function getName(): string {
        return $this->name;
    }

    public function getOfficialSize(): float {
        return $this->officialSize;
    }

    public function getSecondarySize(): float {
        return $this->secondarySize;
    }

    public function getFacade(): string {
        return $this->facade;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getResellPrice(): float {
        return $this->resellPrice;
    }

    public function getMezzanine(): string {
        return $this->mezzanine;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function getIsReserved(): bool {
        return $this->isReserved;
    }

    public function getReservedBy(): string {
        return $this->reservedBy;
    }

    public function getLandTitle(): string {
        return $this->landTitle;
    }

    public function getOfficialPrice(): float {
        return $this->officialPrice;
    }

    public function getOfficialAdvanceAmount(): float {
        return $this->officialAdvanceAmount;
    }

    public function setName(string $name): CommercialStore {
        $this->name = $name;
                            
        return $this;
    }

    public function setOfficialSize(float $officialSize): CommercialStore {
        $this->officialSize = $officialSize;
                            
        return $this;
    }

    public function setSecondarySize(float $secondarySize): CommercialStore {
        $this->secondarySize = $secondarySize;
                            
        return $this;
    }

    public function setFacade(string $facade): CommercialStore {
        $this->facade = $facade;
                            
        return $this;
    }

    public function setPrice(float $price): CommercialStore {
        $this->price = $price;
                            
        return $this;
    }

    public function setResellPrice(float $resellPrice): CommercialStore {
        $this->resellPrice = $resellPrice;
                            
        return $this;
    }

    public function setMezzanine(string $mezzanine): CommercialStore {
        $this->mezzanine = $mezzanine;
                            
        return $this;
    }

    public function setStatus(string $status): CommercialStore {
        $this->status = $status;
                            
        return $this;
    }

    public function setProjectId(int $projectId): CommercialStore {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setIsReserved(bool $isReserved): CommercialStore {
        $this->isReserved = $isReserved;
                            
        return $this;
    }

    public function setReservedBy(string $reservedBy): CommercialStore {
        $this->reservedBy = $reservedBy;
                            
        return $this;
    }

    public function setLandTitle(string $landTitle): CommercialStore {
        $this->landTitle = $landTitle;
                            
        return $this;
    }

    public function setOfficialPrice(float $officialPrice): CommercialStore {
        $this->officialPrice = $officialPrice;
                            
        return $this;
    }

    public function setOfficialAdvanceAmount(float $officialAdvanceAmount): CommercialStore {
        $this->officialAdvanceAmount = $officialAdvanceAmount;
                            
        return $this;
    }

}
