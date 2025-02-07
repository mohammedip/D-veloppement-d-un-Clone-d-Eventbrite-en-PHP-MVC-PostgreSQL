<?php

require_once 'User.php';
require_once 'Database.php';
require_once 'LoginLogoutTrait.php';

class Admin extends User {
    use LoginLogoutTrait;

    private $managedUsers = [];
    private $managedCourses = [];

    public function __construct($id, $email, $name, $role = 'admin') {
        parent::__construct($id, $email, $name, $role);
    }

    // Implement logout method
    public function logout() {
        session_unset();
        session_destroy();
        echo "Logged out successfully!";
    }

    // Admin-specific methods for managing users
    public function addUser($userDetails) {
        $db = Database::getInstance()->getConnection();
        $userId = uniqid();
        
        // Insert the new user into the database
        $query = $db->prepare("INSERT INTO users (id, email, name, role, password) VALUES (?, ?, ?, ?, ?)");
        $query->execute([$userId, $userDetails['email'], $userDetails['name'], $userDetails['role'], password_hash($userDetails['password'], PASSWORD_DEFAULT)]);

        echo "User with ID: $userId added successfully.\n";
    }

    public function removeUser($userId) {
        $db = Database::getInstance()->getConnection();
        
        // Delete the user from the database
        $query = $db->prepare("DELETE FROM users WHERE id = ?");
        $query->execute([$userId]);

        echo "User with ID: $userId removed successfully.\n";
    }

    public function manageCourses($courseId, $action, $courseDetails = null) {
        $db = Database::getInstance()->getConnection();

        switch ($action) {
            case 'Accept':
                // Update course status to accepted
                $query = $db->prepare("UPDATE courses SET status = 'accepted' WHERE id = ?");
                $query->execute([$courseId]);
                echo "Course with ID: $courseId accepted successfully.\n";
                break;

            case 'Reject':
                // Update course status to rejected
                $query = $db->prepare("UPDATE courses SET status = 'rejected' WHERE id = ?");
                $query->execute([$courseId]);
                echo "Course with ID: $courseId rejected successfully.\n";
                break;

            case 'Delete':
                $query = $db->prepare("DELETE FROM courses WHERE id = ?");
                $query->execute([$courseId]);
                echo "Course with ID: $courseId deleted successfully.\n";
                break;

            default:
                echo "Invalid action. Please use 'Accept', 'Reject', or 'Delete'.\n";
        }
    }

    // Get all users 
    public function listUsers() {
        $db = Database::getInstance()->getConnection();
        $query = $db->prepare("SELECT * FROM users");
        $query->execute();
        $users = $query->fetchAll();

        foreach ($users as $user) {
            echo "User ID: " . $user['id'] . ", Name: " . $user['name'] . ", Email: " . $user['email'] . ", Role: " . $user['role'] . "\n";
        }
    }

    // Get all courses 
    public function listCourses() {
        $db = Database::getInstance()->getConnection();
        $query = $db->prepare("SELECT * FROM courses");
        $query->execute();
        $courses = $query->fetchAll();

        foreach ($courses as $course) {
            echo "Course ID: " . $course['id'] . ", Title: " . $course['title'] . ", Category: " . $course['category'] . ", Status: " . $course['status'] . "\n";
        }
    }
}



// Create an Admin instance
$admin = new Admin();

// Login as admin
$admin->login("admin@example.com", "securepassword");

// Add a new user
$admin->addUser([
    "name" => "John Doe",
    "email" => "john@example.com",
    "role" => "Student"
]);

// Remove a user
$admin->removeUser("some-user-id");

// Manage a course
$admin->manageCourses("course123", "edit", [
    "title" => "Updated Course Title",
    "description" => "Updated course description."
]);

// Logout as admin
$admin->logout();
