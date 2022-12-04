<?php

use src\Entity\AbstractEntity;

class BusinessPlanCostType extends AbstractEntity {

	private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): BusinessPlanCostType {
        $this->name = $name;
                            
        return $this;
    }

}
