<?php

use src\Entity\AbstractEntity;

class Property extends AbstractEntity {

	private string $number;

	private string $etage;

	private float $officialSize;

	private float $secondarySize;

	private string $facade;

	private bool $isReserved;

	private string $reservedBy;

	private int $projectId;

    public function getNumber(): string {
        return $this->number;
    }

    public function getEtage(): string {
        return $this->etage;
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

    public function getIsReserved(): bool {
        return $this->isReserved;
    }

    public function getReservedBy(): string {
        return $this->reservedBy;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function setNumber(string $number): Property {
        $this->number = $number;
                            
        return $this;
    }

    public function setEtage(string $etage): Property {
        $this->etage = $etage;
                            
        return $this;
    }

    public function setOfficialSize(float $officialSize): Property {
        $this->officialSize = $officialSize;
                            
        return $this;
    }

    public function setSecondarySize(float $secondarySize): Property {
        $this->secondarySize = $secondarySize;
                            
        return $this;
    }

    public function setFacade(string $facade): Property {
        $this->facade = $facade;
                            
        return $this;
    }

    public function setIsReserved(bool $isReserved): Property {
        $this->isReserved = $isReserved;
                            
        return $this;
    }

    public function setReservedBy(string $reservedBy): Property {
        $this->reservedBy = $reservedBy;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Property {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
