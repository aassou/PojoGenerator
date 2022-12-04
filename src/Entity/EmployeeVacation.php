<?php

use src\Entity\AbstractEntity;

class EmployeeVacation extends AbstractEntity {

	private string $startDate;

	private string $endDate;

	private int $employeeId;

    public function getStartDate(): string {
        return $this->startDate;
    }

    public function getEndDate(): string {
        return $this->endDate;
    }

    public function getEmployeeId(): int {
        return $this->employeeId;
    }

    public function setStartDate(string $startDate): EmployeeVacation {
        $this->startDate = $startDate;
                            
        return $this;
    }

    public function setEndDate(string $endDate): EmployeeVacation {
        $this->endDate = $endDate;
                            
        return $this;
    }

    public function setEmployeeId(int $employeeId): EmployeeVacation {
        $this->employeeId = $employeeId;
                            
        return $this;
    }

}
