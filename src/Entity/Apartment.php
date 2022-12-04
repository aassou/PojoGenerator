<?php

use src\Entity\AbstractEntity;

class Apartment extends AbstractEntity {

	private string $name;

	private float $officialSize;

	private float $secondarySize;

	private float $price;

	private float $resellPrice;

	private string $floorNumber;

	private string $facade;

	private string $roomsNumber;

	private string $status;

	private string $basement;

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

    public function getPrice(): float {
        return $this->price;
    }

    public function getResellPrice(): float {
        return $this->resellPrice;
    }

    public function getFloorNumber(): string {
        return $this->floorNumber;
    }

    public function getFacade(): string {
        return $this->facade;
    }

    public function getRoomsNumber(): string {
        return $this->roomsNumber;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getBasement(): string {
        return $this->basement;
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

    public function setName(string $name): Apartment {
        $this->name = $name;
                            
        return $this;
    }

    public function setOfficialSize(float $officialSize): Apartment {
        $this->officialSize = $officialSize;
                            
        return $this;
    }

    public function setSecondarySize(float $secondarySize): Apartment {
        $this->secondarySize = $secondarySize;
                            
        return $this;
    }

    public function setPrice(float $price): Apartment {
        $this->price = $price;
                            
        return $this;
    }

    public function setResellPrice(float $resellPrice): Apartment {
        $this->resellPrice = $resellPrice;
                            
        return $this;
    }

    public function setFloorNumber(string $floorNumber): Apartment {
        $this->floorNumber = $floorNumber;
                            
        return $this;
    }

    public function setFacade(string $facade): Apartment {
        $this->facade = $facade;
                            
        return $this;
    }

    public function setRoomsNumber(string $roomsNumber): Apartment {
        $this->roomsNumber = $roomsNumber;
                            
        return $this;
    }

    public function setStatus(string $status): Apartment {
        $this->status = $status;
                            
        return $this;
    }

    public function setBasement(string $basement): Apartment {
        $this->basement = $basement;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Apartment {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setIsReserved(bool $isReserved): Apartment {
        $this->isReserved = $isReserved;
                            
        return $this;
    }

    public function setReservedBy(string $reservedBy): Apartment {
        $this->reservedBy = $reservedBy;
                            
        return $this;
    }

    public function setLandTitle(string $landTitle): Apartment {
        $this->landTitle = $landTitle;
                            
        return $this;
    }

    public function setOfficialPrice(float $officialPrice): Apartment {
        $this->officialPrice = $officialPrice;
                            
        return $this;
    }

    public function setOfficialAdvanceAmount(float $officialAdvanceAmount): Apartment {
        $this->officialAdvanceAmount = $officialAdvanceAmount;
                            
        return $this;
    }

}
