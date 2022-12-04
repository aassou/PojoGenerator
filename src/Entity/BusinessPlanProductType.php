<?php

use src\Entity\AbstractEntity;

class BusinessPlanProductType extends AbstractEntity {

	private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): BusinessPlanProductType {
        $this->name = $name;
                            
        return $this;
    }

}
