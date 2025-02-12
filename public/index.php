<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\PageController;
use App\Controllers\AuthController;
use App\Controllers\PaymentController;
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

// Admin Routes - Apply Middleware
$router->before('/admin/*', function () {
    AuthMiddleware::checkAdmin();
});

// Admin routes
$router->get('/admin', AuthController::class, 'dashboard');
$router->get('/admin/home', AuthController::class, 'home');
$router->get('/admin/contact', AuthController::class, 'contact');
$router->get('/admin/courses', AuthController::class, 'events'); 
$router->get('/admin/playlist', AuthController::class, 'playlist');
$router->get('/admin/profile', AuthController::class, 'profile');
$router->get('/admin/teachers', AuthController::class, 'teachers');
$router->get('/admin/teacher-profile', AuthController::class, 'teacherProfile');
$router->get('/admin/update', AuthController::class, 'update');
$router->get('/admin/watch-video', AuthController::class, 'watchVideo');

// 
$router->get('/checkout', PaymentController::class, 'checkout');
$router->post('/stripe-webhook', PaymentController::class, 'handleWebhook');
$router->post('/handle-payment', PaymentController::class, 'handleDirectPayment');
$router->get('/get-stripe-key', 'StripeController@getPublicKey');

// Dispatch all routes
$router->dispatch();
