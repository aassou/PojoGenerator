<?php

use src\Entity\AbstractEntity;

class Craftsman extends AbstractEntity {

	private string $name;

	private string $cin;

	private string $picture;

	private string $phone;

	private string $email;

	private string $maritalStatus;

	private string $startDate;

	private string $endDate;

	private int $projectId;

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

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function setName(string $name): Craftsman {
        $this->name = $name;
                            
        return $this;
    }

    public function setCin(string $cin): Craftsman {
        $this->cin = $cin;
                            
        return $this;
    }

    public function setPicture(string $picture): Craftsman {
        $this->picture = $picture;
                            
        return $this;
    }

    public function setPhone(string $phone): Craftsman {
        $this->phone = $phone;
                            
        return $this;
    }

    public function setEmail(string $email): Craftsman {
        $this->email = $email;
                            
        return $this;
    }

    public function setMaritalStatus(string $maritalStatus): Craftsman {
        $this->maritalStatus = $maritalStatus;
                            
        return $this;
    }

    public function setStartDate(string $startDate): Craftsman {
        $this->startDate = $startDate;
                            
        return $this;
    }

    public function setEndDate(string $endDate): Craftsman {
        $this->endDate = $endDate;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Craftsman {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
