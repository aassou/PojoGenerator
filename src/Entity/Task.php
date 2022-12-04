<?php

use src\Entity\AbstractEntity;

class Task extends AbstractEntity {

	private string $user;

	private string $content;

	private int $status;

    public function getUser(): string {
        return $this->user;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function setUser(string $user): Task {
        $this->user = $user;
                            
        return $this;
    }

    public function setContent(string $content): Task {
        $this->content = $content;
                            
        return $this;
    }

    public function setStatus(int $status): Task {
        $this->status = $status;
                            
        return $this;
    }

}
