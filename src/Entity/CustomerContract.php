<?php

use src\Entity\AbstractEntity;

class CustomerContract extends AbstractEntity {

	private string $reference;

	private string $number;

	private string $contractDate;

	private float $sellingPrice;

	private string $arabicSellingPrice;

	private float $advanceAmount;

	private string $arabicAdvanceAmount;

	private string $paymentMethod;

	private int $paymentDuration;

	private int $monthPeriods;

	private float $financialCommitment;

	private string $changeRequest;

	private string $changeRequestImage;

	private string $customerObservation;

	private int $customerId;

	private int $projectId;

	private int $propertyId;

	private string $propertyType;

	private string $code;

	private string $status;

	private bool $isResold;

	private string $bankCheckNumber;

	private int $arabicCompanyName;

	private int $companyId;

	private string $arabicPropertyStatus;

	private string $arabicFacade;

	private string $arabicLegalArticles;

    public function getReference(): string {
        return $this->reference;
    }

    public function getNumber(): string {
        return $this->number;
    }

    public function getContractDate(): string {
        return $this->contractDate;
    }

    public function getSellingPrice(): float {
        return $this->sellingPrice;
    }

    public function getArabicSellingPrice(): string {
        return $this->arabicSellingPrice;
    }

    public function getAdvanceAmount(): float {
        return $this->advanceAmount;
    }

    public function getArabicAdvanceAmount(): string {
        return $this->arabicAdvanceAmount;
    }

    public function getPaymentMethod(): string {
        return $this->paymentMethod;
    }

    public function getPaymentDuration(): int {
        return $this->paymentDuration;
    }

    public function getMonthPeriods(): int {
        return $this->monthPeriods;
    }

    public function getFinancialCommitment(): float {
        return $this->financialCommitment;
    }

    public function getChangeRequest(): string {
        return $this->changeRequest;
    }

    public function getChangeRequestImage(): string {
        return $this->changeRequestImage;
    }

    public function getCustomerObservation(): string {
        return $this->customerObservation;
    }

    public function getCustomerId(): int {
        return $this->customerId;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function getPropertyId(): int {
        return $this->propertyId;
    }

    public function getPropertyType(): string {
        return $this->propertyType;
    }

    public function getCode(): string {
        return $this->code;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getIsResold(): bool {
        return $this->isResold;
    }

    public function getBankCheckNumber(): string {
        return $this->bankCheckNumber;
    }

    public function getArabicCompanyName(): int {
        return $this->arabicCompanyName;
    }

    public function getCompanyId(): int {
        return $this->companyId;
    }

    public function getArabicPropertyStatus(): string {
        return $this->arabicPropertyStatus;
    }

    public function getArabicFacade(): string {
        return $this->arabicFacade;
    }

    public function getArabicLegalArticles(): string {
        return $this->arabicLegalArticles;
    }

    public function setReference(string $reference): CustomerContract {
        $this->reference = $reference;
                            
        return $this;
    }

    public function setNumber(string $number): CustomerContract {
        $this->number = $number;
                            
        return $this;
    }

    public function setContractDate(string $contractDate): CustomerContract {
        $this->contractDate = $contractDate;
                            
        return $this;
    }

    public function setSellingPrice(float $sellingPrice): CustomerContract {
        $this->sellingPrice = $sellingPrice;
                            
        return $this;
    }

    public function setArabicSellingPrice(string $arabicSellingPrice): CustomerContract {
        $this->arabicSellingPrice = $arabicSellingPrice;
                            
        return $this;
    }

    public function setAdvanceAmount(float $advanceAmount): CustomerContract {
        $this->advanceAmount = $advanceAmount;
                            
        return $this;
    }

    public function setArabicAdvanceAmount(string $arabicAdvanceAmount): CustomerContract {
        $this->arabicAdvanceAmount = $arabicAdvanceAmount;
                            
        return $this;
    }

    public function setPaymentMethod(string $paymentMethod): CustomerContract {
        $this->paymentMethod = $paymentMethod;
                            
        return $this;
    }

    public function setPaymentDuration(int $paymentDuration): CustomerContract {
        $this->paymentDuration = $paymentDuration;
                            
        return $this;
    }

    public function setMonthPeriods(int $monthPeriods): CustomerContract {
        $this->monthPeriods = $monthPeriods;
                            
        return $this;
    }

    public function setFinancialCommitment(float $financialCommitment): CustomerContract {
        $this->financialCommitment = $financialCommitment;
                            
        return $this;
    }

    public function setChangeRequest(string $changeRequest): CustomerContract {
        $this->changeRequest = $changeRequest;
                            
        return $this;
    }

    public function setChangeRequestImage(string $changeRequestImage): CustomerContract {
        $this->changeRequestImage = $changeRequestImage;
                            
        return $this;
    }

    public function setCustomerObservation(string $customerObservation): CustomerContract {
        $this->customerObservation = $customerObservation;
                            
        return $this;
    }

    public function setCustomerId(int $customerId): CustomerContract {
        $this->customerId = $customerId;
                            
        return $this;
    }

    public function setProjectId(int $projectId): CustomerContract {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setPropertyId(int $propertyId): CustomerContract {
        $this->propertyId = $propertyId;
                            
        return $this;
    }

    public function setPropertyType(string $propertyType): CustomerContract {
        $this->propertyType = $propertyType;
                            
        return $this;
    }

    public function setCode(string $code): CustomerContract {
        $this->code = $code;
                            
        return $this;
    }

    public function setStatus(string $status): CustomerContract {
        $this->status = $status;
                            
        return $this;
    }

    public function setIsResold(bool $isResold): CustomerContract {
        $this->isResold = $isResold;
                            
        return $this;
    }

    public function setBankCheckNumber(string $bankCheckNumber): CustomerContract {
        $this->bankCheckNumber = $bankCheckNumber;
                            
        return $this;
    }

    public function setArabicCompanyName(int $arabicCompanyName): CustomerContract {
        $this->arabicCompanyName = $arabicCompanyName;
                            
        return $this;
    }

    public function setCompanyId(int $companyId): CustomerContract {
        $this->companyId = $companyId;
                            
        return $this;
    }

    public function setArabicPropertyStatus(string $arabicPropertyStatus): CustomerContract {
        $this->arabicPropertyStatus = $arabicPropertyStatus;
                            
        return $this;
    }

    public function setArabicFacade(string $arabicFacade): CustomerContract {
        $this->arabicFacade = $arabicFacade;
                            
        return $this;
    }

    public function setArabicLegalArticles(string $arabicLegalArticles): CustomerContract {
        $this->arabicLegalArticles = $arabicLegalArticles;
                            
        return $this;
    }

}
