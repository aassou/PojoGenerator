<?php

use src\Entity\AbstractEntity;

class ConfigurationModules extends AbstractEntity {

	private string $moduleName;

	private int $isShown;

    public function getModuleName(): string {
        return $this->moduleName;
    }

    public function getIsShown(): int {
        return $this->isShown;
    }

    public function setModuleName(string $moduleName): ConfigurationModules {
        $this->moduleName = $moduleName;
                            
        return $this;
    }

    public function setIsShown(int $isShown): ConfigurationModules {
        $this->isShown = $isShown;
                            
        return $this;
    }

}
