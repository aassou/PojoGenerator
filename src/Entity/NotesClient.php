<?php

use src\Entity\AbstractEntity;

class NotesClient extends AbstractEntity {

	private string $description;

	private int $projectId;

	private string $codeContrat;

    public function getDescription(): string {
        return $this->description;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function getCodeContrat(): string {
        return $this->codeContrat;
    }

    public function setDescription(string $description): NotesClient {
        $this->description = $description;
                            
        return $this;
    }

    public function setProjectId(int $projectId): NotesClient {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setCodeContrat(string $codeContrat): NotesClient {
        $this->codeContrat = $codeContrat;
                            
        return $this;
    }

}
