<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\InputValidator;
use App\Core\Security;
use App\Core\SessionManager;
use App\Models\AdminUser;

class AdminAuthController extends Controller
{
    private $adminModel;
    private $validator;
    private $sessionManager;

    public function __construct() 
    {
        parent::__construct();
        $this->adminModel = new AdminUser(); // Admin-specific model
        $this->validator = new InputValidator();
        $this->sessionManager = new SessionManager();
    }

    // Display admin login form
    public function login()
    {
        $csrfToken = Security::generateCSRFToken();
        $this->render('admin/auth/login', ['csrf_token' => $csrfToken]);
    }

    // Process admin login
    public function processLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /admin/login');
            exit;
        }

        // Validate CSRF token
        $csrfToken = $_POST['csrf_token'] ?? '';
        if (!Security::validateCSRFToken($csrfToken)) {
            $errors['csrf'] = 'Invalid CSRF token';
            $this->render('admin/auth/login', ['errors' => $errors]);
            return;
        }

        // Validate inputs
        $email = $this->validator->email($_POST['email']);
        $password = $this->validator->text($_POST['password'], 255, false);

        if ($this->validator->fails()) {
            $errors = $this->validator->getErrors();
            $this->render('admin/auth/login', ['errors' => $errors]);
            return;
        }

        // Attempt admin login
        $admin = $this->adminModel->login($email, $_POST['password']);
        if ($admin) {
            // Store admin session
            $this->sessionManager->set('admin_logged_in', true);
            $this->sessionManager->set('admin_id', $admin['id']);
            header('Location: /admin/dashboard');
            exit;
        } else {
            $errors['login'] = 'Invalid admin credentials';
            $this->render('admin/auth/login', ['errors' => $errors]);
        }
    }

    // Logout admin
    public function logout()
    {
        $this->sessionManager->destroy();
        header('Location: /admin/login');
        exit;
    }
}
