<?php

use src\Entity\AbstractEntity;

class Tranche extends AbstractEntity {

	private string $name;

	private string $description;

	private int $projectId;

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function setName(string $name): Tranche {
        $this->name = $name;
                            
        return $this;
    }

    public function setDescription(string $description): Tranche {
        $this->description = $description;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Tranche {
        $this->projectId = $projectId;
                            
        return $this;
    }

}
