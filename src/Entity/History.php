<?php

use src\Entity\AbstractEntity;

class History extends AbstractEntity {

	private string $action;

	private string $target;

	private string $description;

    public function getAction(): string {
        return $this->action;
    }

    public function getTarget(): string {
        return $this->target;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function setAction(string $action): History {
        $this->action = $action;
                            
        return $this;
    }

    public function setTarget(string $target): History {
        $this->target = $target;
                            
        return $this;
    }

    public function setDescription(string $description): History {
        $this->description = $description;
                            
        return $this;
    }

}
