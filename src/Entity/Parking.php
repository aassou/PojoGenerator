<?php

use src\Entity\AbstractEntity;

class Parking extends AbstractEntity {

	private int $code;

	private string $name;

	private string $status;

	private string $customerName;

	private int $projectId;

	private int $contractId;

	private int $trancheId;

	private int $blockId;

	private string $blockName;

    public function getCode(): int {
        return $this->code;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getCustomerName(): string {
        return $this->customerName;
    }

    public function getProjectId(): int {
        return $this->projectId;
    }

    public function getContractId(): int {
        return $this->contractId;
    }

    public function getTrancheId(): int {
        return $this->trancheId;
    }

    public function getBlockId(): int {
        return $this->blockId;
    }

    public function getBlockName(): string {
        return $this->blockName;
    }

    public function setCode(int $code): Parking {
        $this->code = $code;
                            
        return $this;
    }

    public function setName(string $name): Parking {
        $this->name = $name;
                            
        return $this;
    }

    public function setStatus(string $status): Parking {
        $this->status = $status;
                            
        return $this;
    }

    public function setCustomerName(string $customerName): Parking {
        $this->customerName = $customerName;
                            
        return $this;
    }

    public function setProjectId(int $projectId): Parking {
        $this->projectId = $projectId;
                            
        return $this;
    }

    public function setContractId(int $contractId): Parking {
        $this->contractId = $contractId;
                            
        return $this;
    }

    public function setTrancheId(int $trancheId): Parking {
        $this->trancheId = $trancheId;
                            
        return $this;
    }

    public function setBlockId(int $blockId): Parking {
        $this->blockId = $blockId;
                            
        return $this;
    }

    public function setBlockName(string $blockName): Parking {
        $this->blockName = $blockName;
                            
        return $this;
    }

}
