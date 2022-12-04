<?php

use src\Entity\AbstractEntity;

class InternalCollaboration extends AbstractEntity {

	private string $titre;

	private string $description;

	private string $status;

	private string $duree;

    public function getTitre(): string {
        return $this->titre;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getDuree(): string {
        return $this->duree;
    }

    public function setTitre(string $titre): InternalCollaboration {
        $this->titre = $titre;
                            
        return $this;
    }

    public function setDescription(string $description): InternalCollaboration {
        $this->description = $description;
                            
        return $this;
    }

    public function setStatus(string $status): InternalCollaboration {
        $this->status = $status;
                            
        return $this;
    }

    public function setDuree(string $duree): InternalCollaboration {
        $this->duree = $duree;
                            
        return $this;
    }

}
