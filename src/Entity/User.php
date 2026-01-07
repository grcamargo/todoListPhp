<?php

namespace App\Entity;

class User {

    private ?int $id;
    private string $name;
    private string $email;
    private string $password;
    private string $created_at;
    private string $updated_at;

    public function __construct(?int $id, string $name, string $email, string $password, string $created_at, string $updated_at) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $this->setPasswordHash($password);
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    private function setPasswordHash(string $password): string {
        return $this->password = password_hash($password, PASSWORD_ARGON2ID);
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getCreated_at(): string {
        return $this->created_at;
    }
    
    public function getUpdated_at(): string {
        return $this->updated_at;
    }
}
