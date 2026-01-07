<?php

namespace App\Repository;
use App\Entity\TodoList;
use App\Entity\User;
use PDO;

class TodoListRepository {

    public function __construct(private PDO $pdo) {

    }

    public function createTodoList(TodoList $list) {;
        $sql = 'INSERT INTO lists (user_id, name, description, created_at, updated_at) VALUES (:user_id, :name, :description, :created_at, :updated_at);';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':user_id', 8);
        $statement->bindValue(':name', $list->getName());
        $statement->bindValue(':description', $list->getDescription());
        $statement->bindValue(':created_at', $list->getCreated_at());
        $statement->bindValue(':updated_at', $list->getUpdated_at());

        if($statement->execute()) {
            $id = $this->pdo->lastInsertId();
            $list->setId($id);
        }
    }

    public function getAllLists(User $user): array {
        
        $sql = 'SELECT * FROM lists WHERE user_id = :user_id;';
        $statement= $this->pdo->prepare($sql);
        $statement->bindValue(':user_id', $user->getId());
        $statement->execute();
        $result_array = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result_array;
    }

    public function removeList(int $id): void {
        $sql = 'DELETE FROM lists WHERE id = :id;';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();

    }
}