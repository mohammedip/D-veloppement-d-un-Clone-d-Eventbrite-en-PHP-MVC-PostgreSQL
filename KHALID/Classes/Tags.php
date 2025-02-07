<?php

namespace App\Models;

use Database;

class Tag {
    private $id;
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function save() {
        $db = Database::getInstance()->getConnection();

        $query = "INSERT INTO tags (name) VALUES (:name)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':name', $this->name);

        return $stmt->execute();
    }

    // Getters and setters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}
?>
