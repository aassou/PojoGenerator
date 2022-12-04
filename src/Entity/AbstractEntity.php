<?php

namespace src\Entity;

class AbstractEntity
{
    protected int $id;

    protected DateTime $created;

    protected string $createdBy;

    protected DateTime $updated;

    protected string $updatedBy;

    protected bool $isPublished;

    protected bool $isActive;
}