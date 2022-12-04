<?php

use src\Entity\AbstractEntity;

class Contrattravail extends AbstractEntity {

	private string $name;

	private string $cin;

	private string $adresse;

	private string $dateNaissance;

	private string $matiere;

	private float $price;

	private float $mesure;

	private float $priceTotal;

	private string $dateContrat;

	private int $projectId;

    public function getName(): string {
        return $this->name;
    }

    public function getCin(): string {
        return $this->cin;
    }

    public function getAdresse(): string {
        return $this->adresse;
    }

    public function getDateNaissance(): string {
        return $this->dateNaissance;
    }

    public function getMatiere(): string {
        return $this->matiere;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getMesure(): float {
        return $this->mesure;
    }

    public function getPriceTotal(): float {
        return $this->priceTotal;
    }

    public function getDateContrat(): string {
        return $this->dateContrat;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function setName(string $name): Contrattravail {
        $this->name = $name;
                            
        return $this;
    }

    public function setCin(string $cin): Contrattravail {
        $this->cin = $cin;
                            
        return $this;
    }

    public function setAdresse(string $adresse): Contrattravail {
        $this->adresse = $adresse;
                            
        return $this;
    }

    public function setDateNaissance(string $dateNaissance): Contrattravail {
        $this->dateNaissance = $dateNaissance;
                            
        return $this;
    }

    public function setMatiere(string $matiere): Contrattravail {
        $this->matiere = $matiere;
                            
        return $this;
    }

    public function setPrice(float $price): Contrattravail {
        $this->price = $price;
                            
        return $this;
    }

    public function setMesure(float $mesure): Contrattravail {
        $this->mesure = $mesure;
                            
        return $this;
    }

    public function setPriceTotal(float $priceTotal): Contrattravail {
        $this->priceTotal = $priceTotal;
                            
        return $this;
    }

    public function setDateContrat(string $dateContrat): Contrattravail {
        $this->dateContrat = $dateContrat;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Contrattravail {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
