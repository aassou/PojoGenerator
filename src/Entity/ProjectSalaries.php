<?php

use src\Entity\AbstractEntity;

class ProjectSalaries extends AbstractEntity {

	private float $salary;

	private float $daysNumber;

	private string $operationDate;

	private int $employeeId;

    public function getSalary(): float {
        return $this->salary;
    }

    public function getDaysNumber(): float {
        return $this->daysNumber;
    }

    public function getOperationDate(): string {
        return $this->operationDate;
    }

    public function getEmployeeId(): int {
        return $this->employeeId;
    }

    public function setSalary(float $salary): ProjectSalaries {
        $this->salary = $salary;
                            
        return $this;
    }

    public function setDaysNumber(float $daysNumber): ProjectSalaries {
        $this->daysNumber = $daysNumber;
                            
        return $this;
    }

    public function setOperationDate(string $operationDate): ProjectSalaries {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setEmployeeId(int $employeeId): ProjectSalaries {
        $this->employeeId = $employeeId;
                            
        return $this;
    }

}
