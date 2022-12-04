<?php

use src\Entity\AbstractEntity;

class ApartmentDocuments extends AbstractEntity {

	private string $name;

	private string $image;

	private int $apartmentId;

    public function getName(): string {
        return $this->name;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function getApartmentId(): int {
        return $this->apartmentId;
    }

    public function setName(string $name): ApartmentDocuments {
        $this->name = $name;
                            
        return $this;
    }

    public function setImage(string $image): ApartmentDocuments {
        $this->image = $image;
                            
        return $this;
    }

    public function setApartmentId(int $apartmentId): ApartmentDocuments {
        $this->apartmentId = $apartmentId;
                            
        return $this;
    }

}
