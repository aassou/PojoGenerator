<?php

use src\Entity\AbstractEntity;

class Contrattravailreglement extends AbstractEntity {

	private float $amount;

	private string $motif;

	private string $dateReglement;

	private int $idContratTravail;

    public function getAmount(): float {
        return $this->amount;
    }

    public function getMotif(): string {
        return $this->motif;
    }

    public function getDateReglement(): string {
        return $this->dateReglement;
    }

    public function getIdContratTravail(): int {
        return $this->idContratTravail;
    }

    public function setAmount(float $amount): Contrattravailreglement {
        $this->amount = $amount;
                            
        return $this;
    }

    public function setMotif(string $motif): Contrattravailreglement {
        $this->motif = $motif;
                            
        return $this;
    }

    public function setDateReglement(string $dateReglement): Contrattravailreglement {
        $this->dateReglement = $dateReglement;
                            
        return $this;
    }

    public function setIdContratTravail(int $idContratTravail): Contrattravailreglement {
        $this->idContratTravail = $idContratTravail;
                            
        return $this;
    }

}
