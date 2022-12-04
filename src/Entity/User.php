<?php

use src\Entity\AbstractEntity;

class User extends AbstractEntity {

	private string $login;

	private string $password;

	private string $profil;

	private int $status;

    public function getLogin(): string {
        return $this->login;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getProfil(): string {
        return $this->profil;
    }

    public function getStatus(): int {
        return $this->status;
    }

    public function setLogin(string $login): User {
        $this->login = $login;
                            
        return $this;
    }

    public function setPassword(string $password): User {
        $this->password = $password;
                            
        return $this;
    }

    public function setProfil(string $profil): User {
        $this->profil = $profil;
                            
        return $this;
    }

    public function setStatus(int $status): User {
        $this->status = $status;
                            
        return $this;
    }

}
