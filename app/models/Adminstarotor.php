<?php

require_once 'User.php';
require_once '../core/database.php';
require_once 'HasLogin.php';
require_once 'HasLogout.php';

class Admin extends User {
    use LoginTrait;
    use LogoutTrait;

    public function __construct($id, $email, $name, $role = 'admin') {
        parent::__construct($id, $email, $name, $role);
    }

    // Admin-specific methods for managing users
    public function addUser($userDetails) {
        try {
            $db = Database::getInstance()->getConnection();
            $userId = uniqid();

            $query = $db->prepare("INSERT INTO users (id, email, name, role, password) VALUES (?, ?, ?, ?, ?)");
            $query->execute([
                $userId,
                $userDetails['email'],
                $userDetails['name'],
                $userDetails['role'],
                password_hash($userDetails['password'], PASSWORD_DEFAULT)
            ]);

            return "User with ID: $userId added successfully.";
        } catch (PDOException $e) {
            return "Error adding user: " . $e->getMessage();
        }
    }

    public function removeUser($userId) {
        try {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("DELETE FROM users WHERE id = ?");
            $query->execute([$userId]);

            return "User with ID: $userId removed successfully.";
        } catch (PDOException $e) {
            return "Error removing user: " . $e->getMessage();
        }
    }

    // Event management
    public function manageEvents($eventId, $action, $eventDetails = null) {
        try {
            $db = Database::getInstance()->getConnection();

            switch ($action) {
                case 'Approve':
                    $query = $db->prepare("UPDATE events SET status = 'approved' WHERE id = ?");
                    $query->execute([$eventId]);
                    return "Event with ID: $eventId approved successfully.";

                case 'Reject':
                    $query = $db->prepare("UPDATE events SET status = 'rejected' WHERE id = ?");
                    $query->execute([$eventId]);
                    return "Event with ID: $eventId rejected successfully.";

                case 'Delete':
                    $query = $db->prepare("DELETE FROM events WHERE id = ?");
                    $query->execute([$eventId]);
                    return "Event with ID: $eventId deleted successfully.";

                default:
                    return "Invalid action. Please use 'Approve', 'Reject', or 'Delete'.";
            }
        } catch (PDOException $e) {
            return "Error managing event: " . $e->getMessage();
        }
    }

    // Get all users
    public function listUsers() {
        try {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM users");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error fetching users: " . $e->getMessage();
        }
    }

    // Get all events
    public function listEvents() {
        try {
            $db = Database::getInstance()->getConnection();
            $query = $db->prepare("SELECT * FROM events");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error fetching events: " . $e->getMessage();
        }
    }
}
