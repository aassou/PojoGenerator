<?php

use src\Entity\AbstractEntity;

class Bug extends AbstractEntity {

	private string $bug;

	private string $link;

	private int $status;

    public function getBug(): string {
        return $this->bug;
    }

    public function getLink(): string {
        return $this->link;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function setBug(string $bug): Bug {
        $this->bug = $bug;
                            
        return $this;
    }

    public function setLink(string $link): Bug {
        $this->link = $link;
                            
        return $this;
    }

    public function setStatus(int $status): Bug {
        $this->status = $status;
                            
        return $this;
    }

}
