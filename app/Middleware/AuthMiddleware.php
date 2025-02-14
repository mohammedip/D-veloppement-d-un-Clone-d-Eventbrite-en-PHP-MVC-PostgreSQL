<?php
namespace App\Middleware;

class AuthMiddleware {
    public static function checkAdmin() {
        // if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        //     header("Location: /admin/login");
        //     exit();
        // }
    }
}
