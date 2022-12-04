<?php

use src\Entity\AbstractEntity;

class VacationEmployeeProject extends AbstractEntity {

	private string $dateDebut;

	private string $dateFin;

	private int $idEmploye;

    public function getDateDebut(): string {
        return $this->dateDebut;
    }

    public function getDateFin(): string {
        return $this->dateFin;
    }

    public function getIdEmploye(): int {
        return $this->idEmploye;
    }

    public function setDateDebut(string $dateDebut): VacationEmployeeProject {
        $this->dateDebut = $dateDebut;
                            
        return $this;
    }

    public function setDateFin(string $dateFin): VacationEmployeeProject {
        $this->dateFin = $dateFin;
                            
        return $this;
    }

    public function setIdEmploye(int $idEmploye): VacationEmployeeProject {
        $this->idEmploye = $idEmploye;
                            
        return $this;
    }

}
