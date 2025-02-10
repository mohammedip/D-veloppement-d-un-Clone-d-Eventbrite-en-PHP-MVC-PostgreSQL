<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Controllers\PageController;

$router = new Router();


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

$router->dispatch();
