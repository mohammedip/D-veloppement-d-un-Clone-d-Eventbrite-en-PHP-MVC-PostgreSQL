<?php

namespace App\Utils;

class Auth {
    public static function checkAccess($requiredRole) {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== $requiredRole) {
            header("Location: /login.php");
            exit();
        }
    }

    public static function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }
}



// require_once 'Utils/Auth.php';

// use App\Utils\Auth;

session_start();

Auth::checkAccess('Teacher');

// Page content for teachers
echo "Welcome, Teacher {$_SESSION['name']}";


Auth::checkAccess('Student');

// Page content for students
echo "Welcome, Student {$_SESSION['name']}";
