<?php

use src\Entity\AbstractEntity;

class CustomerRanking extends AbstractEntity {

	private string $name;

	private int $ranking;

	private string $observation;

    public function getName(): string {
        return $this->name;
    }

    public function getRanking(): int {
        return $this->ranking;
    }

    public function getObservation(): string {
        return $this->observation;
    }

    public function setName(string $name): CustomerRanking {
        $this->name = $name;
                            
        return $this;
    }

    public function setRanking(int $ranking): CustomerRanking {
        $this->ranking = $ranking;
                            
        return $this;
    }

    public function setObservation(string $observation): CustomerRanking {
        $this->observation = $observation;
                            
        return $this;
    }

}
