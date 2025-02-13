<?php
use App\Controllers\AuthController;
use App\core\CRUD;

$register = new AuthController();

$register->processRegister();

header('Location:front-office/login');
exit;