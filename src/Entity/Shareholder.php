<?php

use src\Entity\AbstractEntity;

class Shareholder extends AbstractEntity {

	private string $name;

	private float $amount;

	private int $projectId;

    public function getName(): string {
        return $this->name;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function setName(string $name): Shareholder {
        $this->name = $name;
                            
        return $this;
    }

    public function setAmount(float $amount): Shareholder {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Shareholder {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
