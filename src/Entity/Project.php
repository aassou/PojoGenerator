<?php

use src\Entity\AbstractEntity;

class Project extends AbstractEntity {

	private string $name;

	private string $address;

	private string $arabicName;

	private string $arabicAddress;

	private string $landTitle;

	private float $landSize;

	private string $description;

	private float $budget;

	private string $lotNumber;

	private string $legalAuthorizationNumber;

	private string $legalAuthorizationDate;

	private int $floors;

	private float $basement;

	private float $rezDeChaussee;

	private float $mezzanin;

	private float $stairwell;

	private float $terrace;

	private float $floorSize;

	private int $timeLimit;

	private float $pricePerMeterTaxIncluded;

	private float $pricePerMeterTaxExcluded;

	private float $valueAddedTax;

	private string $architectName;

	private string $reinforcedConcreteArchitectName;

	private int $status;

	private int $closed;

    public function getName(): string {
        return $this->name;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getArabicName(): string {
        return $this->arabicName;
    }

    public function getArabicAddress(): string {
        return $this->arabicAddress;
    }

    public function getLandTitle(): string {
        return $this->landTitle;
    }

    public function getLandSize(): float {
        return $this->landSize;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getBudget(): float {
        return $this->budget;
    }

    public function getLotNumber(): string {
        return $this->lotNumber;
    }

    public function getLegalAuthorizationNumber(): string {
        return $this->legalAuthorizationNumber;
    }

    public function getLegalAuthorizationDate(): string {
        return $this->legalAuthorizationDate;
    }

    public function getFloors(): int {
        return $this->floors;
    }

    public function getBasement(): float {
        return $this->basement;
    }

    public function getRezDeChaussee(): float {
        return $this->rezDeChaussee;
    }

    public function getMezzanin(): float {
        return $this->mezzanin;
    }

    public function getStairwell(): float {
        return $this->stairwell;
    }

    public function getTerrace(): float {
        return $this->terrace;
    }

    public function getFloorSize(): float {
        return $this->floorSize;
    }

    public function getTimeLimit(): int {
        return $this->timeLimit;
    }

    public function getPricePerMeterTaxIncluded(): float {
        return $this->pricePerMeterTaxIncluded;
    }

    public function getPricePerMeterTaxExcluded(): float {
        return $this->pricePerMeterTaxExcluded;
    }

    public function getValueAddedTax(): float {
        return $this->valueAddedTax;
    }

    public function getArchitectName(): string {
        return $this->architectName;
    }

    public function getReinforcedConcreteArchitectName(): string {
        return $this->reinforcedConcreteArchitectName;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function getClosed(): int {
        return $this->closed;
    }

    public function setName(string $name): Project {
        $this->name = $name;
                            
        return $this;
    }

    public function setAddress(string $address): Project {
        $this->address = $address;
                            
        return $this;
    }

    public function setArabicName(string $arabicName): Project {
        $this->arabicName = $arabicName;
                            
        return $this;
    }

    public function setArabicAddress(string $arabicAddress): Project {
        $this->arabicAddress = $arabicAddress;
                            
        return $this;
    }

    public function setLandTitle(string $landTitle): Project {
        $this->landTitle = $landTitle;
                            
        return $this;
    }

    public function setLandSize(float $landSize): Project {
        $this->landSize = $landSize;
                            
        return $this;
    }

    public function setDescription(string $description): Project {
        $this->description = $description;
                            
        return $this;
    }

    public function setBudget(float $budget): Project {
        $this->budget = $budget;
                            
        return $this;
    }

    public function setLotNumber(string $lotNumber): Project {
        $this->lotNumber = $lotNumber;
                            
        return $this;
    }

    public function setLegalAuthorizationNumber(string $legalAuthorizationNumber): Project {
        $this->legalAuthorizationNumber = $legalAuthorizationNumber;
                            
        return $this;
    }

    public function setLegalAuthorizationDate(string $legalAuthorizationDate): Project {
        $this->legalAuthorizationDate = $legalAuthorizationDate;
                            
        return $this;
    }

    public function setFloors(int $floors): Project {
        $this->floors = $floors;
                            
        return $this;
    }

    public function setBasement(float $basement): Project {
        $this->basement = $basement;
                            
        return $this;
    }

    public function setRezDeChaussee(float $rezDeChaussee): Project {
        $this->rezDeChaussee = $rezDeChaussee;
                            
        return $this;
    }

    public function setMezzanin(float $mezzanin): Project {
        $this->mezzanin = $mezzanin;
                            
        return $this;
    }

    public function setStairwell(float $stairwell): Project {
        $this->stairwell = $stairwell;
                            
        return $this;
    }

    public function setTerrace(float $terrace): Project {
        $this->terrace = $terrace;
                            
        return $this;
    }

    public function setFloorSize(float $floorSize): Project {
        $this->floorSize = $floorSize;
                            
        return $this;
    }

    public function setTimeLimit(int $timeLimit): Project {
        $this->timeLimit = $timeLimit;
                            
        return $this;
    }

    public function setPricePerMeterTaxIncluded(float $pricePerMeterTaxIncluded): Project {
        $this->pricePerMeterTaxIncluded = $pricePerMeterTaxIncluded;
                            
        return $this;
    }

    public function setPricePerMeterTaxExcluded(float $pricePerMeterTaxExcluded): Project {
        $this->pricePerMeterTaxExcluded = $pricePerMeterTaxExcluded;
                            
        return $this;
    }

    public function setValueAddedTax(float $valueAddedTax): Project {
        $this->valueAddedTax = $valueAddedTax;
                            
        return $this;
    }

    public function setArchitectName(string $architectName): Project {
        $this->architectName = $architectName;
                            
        return $this;
    }

    public function setReinforcedConcreteArchitectName(string $reinforcedConcreteArchitectName): Project {
        $this->reinforcedConcreteArchitectName = $reinforcedConcreteArchitectName;
                            
        return $this;
    }

    public function setStatus(int $status): Project {
        $this->status = $status;
                            
        return $this;
    }

    public function setClosed(int $closed): Project {
        $this->closed = $closed;
                            
        return $this;
    }

}
