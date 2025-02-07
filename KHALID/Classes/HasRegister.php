<?php

trait RegisterTrait {
    public function register($email, $password, $role) {
        $db = Database::getInstance()->getConnection();

        // Check if the email already exists in the database
        $query = $db->prepare("SELECT * FROM users WHERE email = ?");
        $query->execute([$email]);
        $user = $query->fetch();

        if ($user) {
            echo "Email is already taken.\n";
            return false;
        }

        // Hash the password before storing
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insert the new user into the database
        $query = $db->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
        $query->execute([$email, $hashedPassword, $role]);

        echo ucfirst($role) . " with email $email registered successfully.\n";
        return true;
    }
}
