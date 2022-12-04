<?php

use src\Entity\AbstractEntity;

class EmployeeCompany extends AbstractEntity {

	private string $name;

	private string $cin;

	private string $picture;

	private string $phone;

	private string $email;

	private string $maritalStatus;

	private string $startDate;

	private string $endDate;

    public function getName(): string {
        return $this->name;
    }

    public function getCin(): string {
        return $this->cin;
    }

    public function getPicture(): string {
        return $this->picture;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getMaritalStatus(): string {
        return $this->maritalStatus;
    }

    public function getStartDate(): string {
        return $this->startDate;
    }

    public function getEndDate(): string {
        return $this->endDate;
    }

    public function setName(string $name): EmployeeCompany {
        $this->name = $name;
                            
        return $this;
    }

    public function setCin(string $cin): EmployeeCompany {
        $this->cin = $cin;
                            
        return $this;
    }

    public function setPicture(string $picture): EmployeeCompany {
        $this->picture = $picture;
                            
        return $this;
    }

    public function setPhone(string $phone): EmployeeCompany {
        $this->phone = $phone;
                            
        return $this;
    }

    public function setEmail(string $email): EmployeeCompany {
        $this->email = $email;
                            
        return $this;
    }

    public function setMaritalStatus(string $maritalStatus): EmployeeCompany {
        $this->maritalStatus = $maritalStatus;
                            
        return $this;
    }

    public function setStartDate(string $startDate): EmployeeCompany {
        $this->startDate = $startDate;
                            
        return $this;
    }

    public function setEndDate(string $endDate): EmployeeCompany {
        $this->endDate = $endDate;
                            
        return $this;
    }

}
