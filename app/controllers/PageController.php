<?php

namespace App\Controllers;

class PageController {
    public function home() {
        require_once __DIR__ . "/../views/front-office/home.php"; 
    }

    public function about() {
        require_once __DIR__ . "/../views/front-office/about.php";
    }

    public function pricing() {
        require_once __DIR__ . "/../views/front-office/pricing.php";
    }

    public function faq() {
        require_once __DIR__ . "/../views/front-office/faq.php";
    }

    public function contact() {
        require_once __DIR__ . "/../views/front-office/contact.php";
    }

    public function gallery() {
        require_once __DIR__ . "/../views/front-office/gallery.php";
    }

    public function newsSingle() {
        require_once __DIR__ . "/../views/front-office/news-single.php";
    }

    public function venue() {
        require_once __DIR__ . "/../views/front-office/venue.php";
    }

    public function schedule() {
        require_once __DIR__ . "/../views/front-office/schedule.php";
    }

    public function blog() {
        require_once __DIR__ . "/../views/front-office/blog.php";
    }

    public function speakers() {
        require_once __DIR__ . "/../views/front-office/speakers.php";
    }

    public function notFound() {
        require_once __DIR__ . "/../views/front-office/404.php";
    }

    public function login() {
        require_once __DIR__ . "/../views/front-office/login.php";
    }

    public function register() {
        require_once __DIR__ . "/../views/front-office/register.php";
    }
}
