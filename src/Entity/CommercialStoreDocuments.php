<?php

use src\Entity\AbstractEntity;

class CommercialStoreDocuments extends AbstractEntity {

	private string $name;

	private string $image;

	private int $commercialStoreId;

    public function getName(): string {
        return $this->name;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function getCommercialStoreId(): int {
        return $this->commercialStoreId;
    }

    public function setName(string $name): CommercialStoreDocuments {
        $this->name = $name;
                            
        return $this;
    }

    public function setImage(string $image): CommercialStoreDocuments {
        $this->image = $image;
                            
        return $this;
    }

    public function setCommercialStoreId(int $commercialStoreId): CommercialStoreDocuments {
        $this->commercialStoreId = $commercialStoreId;
                            
        return $this;
    }

}
