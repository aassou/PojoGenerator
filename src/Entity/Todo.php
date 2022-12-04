<?php

use src\Entity\AbstractEntity;

class Todo extends AbstractEntity {

	private string $todo;

	private int $priority;

	private int $status;

	private string $expectedDate;

    public function getTodo(): string {
        return $this->todo;
    }

    public function getPriority(): int {
        return $this->priority;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function getExpectedDate(): string {
        return $this->expectedDate;
    }

    public function setTodo(string $todo): Todo {
        $this->todo = $todo;
                            
        return $this;
    }

    public function setPriority(int $priority): Todo {
        $this->priority = $priority;
                            
        return $this;
    }

    public function setStatus(int $status): Todo {
        $this->status = $status;
                            
        return $this;
    }

    public function setExpectedDate(string $expectedDate): Todo {
        $this->expectedDate = $expectedDate;
                            
        return $this;
    }

}
