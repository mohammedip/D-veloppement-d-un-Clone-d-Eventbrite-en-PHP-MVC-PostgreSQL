<?php
use App\Controllers\AuthController;
use App\core\CRUD;

$register = new AuthController();

$register->processRegister();

header('Location:login');
exit;