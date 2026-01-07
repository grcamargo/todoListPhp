<?php

namespace App\Repository;
use App\Entity\User;
use PDO;

class UserRepository {

    public function __construct(private PDO $pdo) {

    }

    public function registerUser(User $user): void {

        $sql = 'INSERT INTO users (name, email, password, created_at, updated_at) VALUES (:name, :email, :password, :created_at, :updated_at);';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':name', $user->getName());
        $statement->bindValue(':email', $user->getEmail());
        $statement->bindValue(':password', $user->getPassword());
        $statement->bindValue(':created_at', $user->getCreated_at());
        $statement->bindValue(':updated_at', $user->getUpdated_at());

        $result = $statement->execute();

        $id = $this->pdo->lastInsertId();
        $user->setId($id);
    }

    public function loginUser(string $email, string $password): bool {

        $sql = 'SELECT * FROM users WHERE email = :email';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':email', $email);

        if($statement->execute()) {
            $userData = $statement->fetch(PDO::FETCH_ASSOC);
            $correctPassword = password_verify($password, $userData['password'] ?? '');
            return $correctPassword;
        }

        return false;

    }
}