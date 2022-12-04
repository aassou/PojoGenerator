<?php

use src\Entity\AbstractEntity;

class Commission extends AbstractEntity {

	private string $titre;

	private string $agent;

	private float $amount;

	private string $contractCode;

	private string $commissionDate;

	private string $status;

    public function getTitre(): string {
        return $this->titre;
    }

    public function getAgent(): string {
        return $this->agent;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getContractCode(): string {
        return $this->contractCode;
    }

    public function getCommissionDate(): string {
        return $this->commissionDate;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function setTitre(string $titre): Commission {
        $this->titre = $titre;
                            
        return $this;
    }

    public function setAgent(string $agent): Commission {
        $this->agent = $agent;
                            
        return $this;
    }

    public function setAmount(float $amount): Commission {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setContractCode(string $contractCode): Commission {
        $this->contractCode = $contractCode;
                            
        return $this;
    }

    public function setCommissionDate(string $commissionDate): Commission {
        $this->commissionDate = $commissionDate;
                            
        return $this;
    }

    public function setStatus(string $status): Commission {
        $this->status = $status;
                            
        return $this;
    }

}
