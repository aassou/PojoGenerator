<?php

use src\Entity\AbstractEntity;

class LandDocuments extends AbstractEntity {

	private string $name;

	private string $image;

	private int $landId;

    public function getName(): string {
        return $this->name;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function getLandId(): int {
        return $this->landId;
    }

    public function setName(string $name): LandDocuments {
        $this->name = $name;
                            
        return $this;
    }

    public function setImage(string $image): LandDocuments {
        $this->image = $image;
                            
        return $this;
    }

    public function setLandId(int $landId): LandDocuments {
        $this->landId = $landId;
                            
        return $this;
    }

}
