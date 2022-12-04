<?php

use src\Entity\AbstractEntity;

class Alert extends AbstractEntity {

	private string $message;

	private int $status;

    public function getMessage(): string {
        return $this->message;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function setMessage(string $message): Alert {
        $this->message = $message;
                            
        return $this;
    }

    public function setStatus(int $status): Alert {
        $this->status = $status;
                            
        return $this;
    }

}
