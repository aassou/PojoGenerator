<?php

use src\Entity\AbstractEntity;

class CompnanySalaries extends AbstractEntity {

	private float $salary;

	private float $bounty;

	private string $operationDate;

	private int $employeeId;

    public function getSalary(): float {
        return $this->salary;
    }

    public function getBounty(): float {
        return $this->bounty;
    }

    public function getOperationDate(): string {
        return $this->operationDate;
    }

    public function getEmployeeId(): int {
        return $this->employeeId;
    }

    public function setSalary(float $salary): CompnanySalaries {
        $this->salary = $salary;
                            
        return $this;
    }

    public function setBounty(float $bounty): CompnanySalaries {
        $this->bounty = $bounty;
                            
        return $this;
    }

    public function setOperationDate(string $operationDate): CompnanySalaries {
        $this->operationDate = $operationDate;
                            
        return $this;
    }

    public function setEmployeeId(int $employeeId): CompnanySalaries {
        $this->employeeId = $employeeId;
                            
        return $this;
    }

}
