<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\PageController;
use App\Controllers\AdminAuthController;
use App\Controllers\AuthController;
use App\Middleware\AuthMiddleware;

session_start();

$router = new Router();

// Frontend Routes
$router->get('/', PageController::class, 'home');
$router->get('/about', PageController::class, 'about');
$router->get('/pricing', PageController::class, 'pricing');
$router->get('/faq', PageController::class, 'faq');
$router->get('/contact', PageController::class, 'contact');
$router->get('/gallery', PageController::class, 'gallery');
$router->get('/news-single', PageController::class, 'newsSingle');
$router->get('/venue', PageController::class, 'venue');
$router->get('/schedule', PageController::class, 'schedule');
$router->get('/blog', PageController::class, 'blog');
$router->get('/speakers', PageController::class, 'speakers');

$router->get('/404', PageController::class, 'notFound');

// Login/Logout Routes
$router->get('/login', AuthController::class, 'login');
$router->post('/login', AuthController::class, 'processLogin');
$router->get('/logout', AuthController::class, 'logout');

// Admin Routes kadoz mn lmiddlware 
$router->before('/admin/*', function () {
    AuthMiddleware::checkAdmin();
});

// Admin routes
$router->get('/admin', AdminAuthController::class, 'dashboard');
$router->get('/admin/home', AdminAuthController::class, 'home');
$router->get('/admin/contact', AdminAuthController::class, 'contact');
$router->get('/admin/courses', AdminAuthController::class, 'events'); 
$router->get('/admin/playlist', AdminAuthController::class, 'playlist');
$router->get('/admin/profile', AdminAuthController::class, 'profile');
$router->get('/admin/teachers', AdminAuthController::class, 'teachers');
$router->get('/admin/teacher-profile', AdminAuthController::class, 'teacherProfile');
$router->get('/admin/update', AdminAuthController::class, 'update');
$router->get('/admin/watch-video', AdminAuthController::class, 'watchVideo');

// Dispatch all routes
$router->dispatch();
