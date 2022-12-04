<?php

use src\Entity\AbstractEntity;

class CraftsmanContract extends AbstractEntity {

	private string $startDate;

	private string $endDate;

	private float $unitPrice;

	private string $measurementUnit;

	private string $measurementUnitName;

	private string $measurementUnitArabicName;

	private float $measurementUnitNumber;

	private float $secondaryUnitPrice;

	private string $secondaryMeasurementUnit;

	private string $secondaryMeasurementUnitName;

	private string $secondaryMeasurementUnitArabicName;

	private float $secondaryMeasurementUnitNumber;

	private string $works;

	private string $arabicWorks;

	private string $arabicArticles;

	private float $total;

	private string $craftsmanName;

	private int $craftsmanId;

	private int $projectId;

	private int $companyId;

    public function getStartDate(): string {
        return $this->startDate;
    }

    public function getEndDate(): string {
        return $this->endDate;
    }

    public function getUnitPrice(): float {
        return $this->unitPrice;
    }

    public function getMeasurementUnit(): string {
        return $this->measurementUnit;
    }

    public function getMeasurementUnitName(): string {
        return $this->measurementUnitName;
    }

    public function getMeasurementUnitArabicName(): string {
        return $this->measurementUnitArabicName;
    }

    public function getMeasurementUnitNumber(): float {
        return $this->measurementUnitNumber;
    }

    public function getSecondaryUnitPrice(): float {
        return $this->secondaryUnitPrice;
    }

    public function getSecondaryMeasurementUnit(): string {
        return $this->secondaryMeasurementUnit;
    }

    public function getSecondaryMeasurementUnitName(): string {
        return $this->secondaryMeasurementUnitName;
    }

    public function getSecondaryMeasurementUnitArabicName(): string {
        return $this->secondaryMeasurementUnitArabicName;
    }

    public function getSecondaryMeasurementUnitNumber(): float {
        return $this->secondaryMeasurementUnitNumber;
    }

    public function getWorks(): string {
        return $this->works;
    }

    public function getArabicWorks(): string {
        return $this->arabicWorks;
    }

    public function getArabicArticles(): string {
        return $this->arabicArticles;
    }

    public function getTotal(): float {
        return $this->total;
    }

    public function getCraftsmanName(): string {
        return $this->craftsmanName;
    }

    public function getCraftsmanId(): int {
        return $this->craftsmanId;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function getCompanyId(): int {
        return $this->companyId;
    }

    public function setStartDate(string $startDate): CraftsmanContract {
        $this->startDate = $startDate;
                            
        return $this;
    }

    public function setEndDate(string $endDate): CraftsmanContract {
        $this->endDate = $endDate;
                            
        return $this;
    }

    public function setUnitPrice(float $unitPrice): CraftsmanContract {
        $this->unitPrice = $unitPrice;
                            
        return $this;
    }

    public function setMeasurementUnit(string $measurementUnit): CraftsmanContract {
        $this->measurementUnit = $measurementUnit;
                            
        return $this;
    }

    public function setMeasurementUnitName(string $measurementUnitName): CraftsmanContract {
        $this->measurementUnitName = $measurementUnitName;
                            
        return $this;
    }

    public function setMeasurementUnitArabicName(string $measurementUnitArabicName): CraftsmanContract {
        $this->measurementUnitArabicName = $measurementUnitArabicName;
                            
        return $this;
    }

    public function setMeasurementUnitNumber(float $measurementUnitNumber): CraftsmanContract {
        $this->measurementUnitNumber = $measurementUnitNumber;
                            
        return $this;
    }

    public function setSecondaryUnitPrice(float $secondaryUnitPrice): CraftsmanContract {
        $this->secondaryUnitPrice = $secondaryUnitPrice;
                            
        return $this;
    }

    public function setSecondaryMeasurementUnit(string $secondaryMeasurementUnit): CraftsmanContract {
        $this->secondaryMeasurementUnit = $secondaryMeasurementUnit;
                            
        return $this;
    }

    public function setSecondaryMeasurementUnitName(string $secondaryMeasurementUnitName): CraftsmanContract {
        $this->secondaryMeasurementUnitName = $secondaryMeasurementUnitName;
                            
        return $this;
    }

    public function setSecondaryMeasurementUnitArabicName(string $secondaryMeasurementUnitArabicName): CraftsmanContract {
        $this->secondaryMeasurementUnitArabicName = $secondaryMeasurementUnitArabicName;
                            
        return $this;
    }

    public function setSecondaryMeasurementUnitNumber(float $secondaryMeasurementUnitNumber): CraftsmanContract {
        $this->secondaryMeasurementUnitNumber = $secondaryMeasurementUnitNumber;
                            
        return $this;
    }

    public function setWorks(string $works): CraftsmanContract {
        $this->works = $works;
                            
        return $this;
    }

    public function setArabicWorks(string $arabicWorks): CraftsmanContract {
        $this->arabicWorks = $arabicWorks;
                            
        return $this;
    }

    public function setArabicArticles(string $arabicArticles): CraftsmanContract {
        $this->arabicArticles = $arabicArticles;
                            
        return $this;
    }

    public function setTotal(float $total): CraftsmanContract {
        $this->total = $total;
                            
        return $this;
    }

    public function setCraftsmanName(string $craftsmanName): CraftsmanContract {
        $this->craftsmanName = $craftsmanName;
                            
        return $this;
    }

    public function setCraftsmanId(int $craftsmanId): CraftsmanContract {
        $this->craftsmanId = $craftsmanId;
                            
        return $this;
    }

    public function setProjectId(int $projectId): CraftsmanContract {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setCompanyId(int $companyId): CraftsmanContract {
        $this->companyId = $companyId;
                            
        return $this;
    }

}
