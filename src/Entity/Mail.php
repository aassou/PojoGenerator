<?php

use src\Entity\AbstractEntity;

class Mail extends AbstractEntity {

	private string $content;

	private string $sender;

    public function getContent(): string {
        return $this->content;
    }

    public function getSender(): string {
        return $this->sender;
    }

    public function setContent(string $content): Mail {
        $this->content = $content;
                            
        return $this;
    }

    public function setSender(string $sender): Mail {
        $this->sender = $sender;
                            
        return $this;
    }

}
