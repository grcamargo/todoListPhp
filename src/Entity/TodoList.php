<?php

namespace App\Entity;

class TodoList {

    private ?int $id;
    private ?int $user_id;
    private string $name;
    private string $description;
    private string $created_at;
    private string $updated_at;

    public function __construct(?int $id, ?int $user_id, string $name, string $description, string $created_at, string $updated_at) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->name = $name;
        $this->description = $description;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setUSerId(int $user_id): void {
        $this->user_id = $user_id;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getUSerId(): int {
        return $this->user_id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getCreated_at(): string {
        return $this->created_at;
    }
    
    public function getUpdated_at(): string {
        return $this->updated_at;
    }
}
