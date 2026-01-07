<?php

namespace App\Repository;
use App\Entity\TodoList;
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

    public function getAllLists(TodoList $list): array {
        $sql = 'SELECT * FROM lists WHERE user_id = :user_id;';
        $statement= $this->pdo->prepare($sql);
        $statement->bindValue(':user_id', $list->getUserId());
        $result_array = $statement->fechAll(PDO::FETCH_ASSOC);

        array_map(function($result) {
            $list = new TodoList(null, null, $result['name'], $result['description'], $result['created_at'], $result['updated_at']);
            $list->setId($result['id']);
        }, $result_array);
    }
}