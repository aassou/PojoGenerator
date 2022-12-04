<?php

use src\Entity\AbstractEntity;

class TypeSyndic extends AbstractEntity {

	private string $designation;

	private float $fee;

    public function getDesignation(): string {
        return $this->designation;
    }

    public function getFee(): float {
        return $this->fee;
    }

    public function setDesignation(string $designation): TypeSyndic {
        $this->designation = $designation;
                            
        return $this;
    }

    public function setFee(float $fee): TypeSyndic {
        $this->fee = $fee;
                            
        return $this;
    }

}
