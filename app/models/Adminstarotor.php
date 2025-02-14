<?php

require_once 'User.php';
require_once 'HasLogin.php';
require_once 'HasLogout.php';
require_once 'CRUD.php';

class Admin extends User {
    use LoginTrait;
    use LogoutTrait;

    public function __construct($id, $email, $name, $role_id = 1) { // Assuming 1 is the admin role
        parent::__construct($id, $email, $name, $role_id);
    }

    // Add a user
    public function addUser($userDetails) {
        try {
            $userDetails['motDePasse'] = password_hash($userDetails['motDePasse'], PASSWORD_DEFAULT);
            return CRUD::insert('Utilisateur', $userDetails) ? "User added successfully." : "Failed to add user.";
        } catch (\PDOException $e) {
            return "Error adding user: " . $e->getMessage();
        }
    }

    // Remove a user
    public function removeUser($userId) {
        try {
            return CRUD::delete('Utilisateur', 'id = ?', [$userId]) ? "User removed successfully." : "Failed to remove user.";
        } catch (\PDOException $e) {
            return "Error removing user: " . $e->getMessage();
        }
    }

    // Manage event status
    public function manageEvents($eventId, $action) {
        try {
            $status = match ($action) {
                'Approve' => 'approved',
                'Reject' => 'rejected',
                default => null,
            };

            if ($status) {
                return CRUD::update('Evenement', ['statut' => $status], 'id = ?', [$eventId]) ? 
                    "Event with ID: $eventId updated to '$status'." : 
                    "Failed to update event.";
            } elseif ($action === 'Delete') {
                return CRUD::delete('Evenement', 'id = ?', [$eventId]) ? "Event deleted successfully." : "Failed to delete event.";
            }

            return "Invalid action. Use 'Approve', 'Reject', or 'Delete'.";
        } catch (\PDOException $e) {
            return "Error managing event: " . $e->getMessage();
        }
    }

    // List all users
    public function listUsers() {
        return CRUD::select('Utilisateur');
    }

    // List all events
    public function listEvents() {
        return CRUD::select('Evenement');
    }
}
