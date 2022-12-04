<?php

use src\Entity\AbstractEntity;

class Company extends AbstractEntity {

	private string $name;

	private string $address;

	private string $arabicName;

	private string $arabicAddress;

	private string $ceo;

	private string $cinCeo;

	private string $rc;

	private string $ifs;

	private string $patente;

	private string $ice;

	private string $phone;

	private string $mobile;

	private string $fax;

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

    public function getCeo(): string {
        return $this->ceo;
    }

    public function getCinCeo(): string {
        return $this->cinCeo;
    }

    public function getRc(): string {
        return $this->rc;
    }

    public function getIfs(): string {
        return $this->ifs;
    }

    public function getPatente(): string {
        return $this->patente;
    }

    public function getIce(): string {
        return $this->ice;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function getMobile(): string {
        return $this->mobile;
    }

    public function getFax(): string {
        return $this->fax;
    }

    public function setName(string $name): Company {
        $this->name = $name;
                            
        return $this;
    }

    public function setAddress(string $address): Company {
        $this->address = $address;
                            
        return $this;
    }

    public function setArabicName(string $arabicName): Company {
        $this->arabicName = $arabicName;
                            
        return $this;
    }

    public function setArabicAddress(string $arabicAddress): Company {
        $this->arabicAddress = $arabicAddress;
                            
        return $this;
    }

    public function setCeo(string $ceo): Company {
        $this->ceo = $ceo;
                            
        return $this;
    }

    public function setCinCeo(string $cinCeo): Company {
        $this->cinCeo = $cinCeo;
                            
        return $this;
    }

    public function setRc(string $rc): Company {
        $this->rc = $rc;
                            
        return $this;
    }

    public function setIfs(string $ifs): Company {
        $this->ifs = $ifs;
                            
        return $this;
    }

    public function setPatente(string $patente): Company {
        $this->patente = $patente;
                            
        return $this;
    }

    public function setIce(string $ice): Company {
        $this->ice = $ice;
                            
        return $this;
    }

    public function setPhone(string $phone): Company {
        $this->phone = $phone;
                            
        return $this;
    }

    public function setMobile(string $mobile): Company {
        $this->mobile = $mobile;
                            
        return $this;
    }

    public function setFax(string $fax): Company {
        $this->fax = $fax;
                            
        return $this;
    }

}
