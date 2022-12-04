<?php

use src\Entity\AbstractEntity;

class Block extends AbstractEntity {

	private string $name;

	private string $description;

	private int $trancheId;

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getTrancheId(): int {
        return $this->trancheId;
    }

    public function setName(string $name): Block {
        $this->name = $name;
                            
        return $this;
    }

    public function setDescription(string $description): Block {
        $this->description = $description;
                            
        return $this;
    }

    public function setTrancheId(int $trancheId): Block {
        $this->trancheId = $trancheId;
                            
        return $this;
    }

}
