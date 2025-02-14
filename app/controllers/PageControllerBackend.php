<?php

namespace App\Controllers;

class PageControllerBackend {
   
    // Admin Pages
    public function adminCategory() {
        require_once __DIR__ . "/../views/back-office/admin/category.php";
    }

    public function adminEvents() {
        require_once __DIR__ . "/../views/back-office/admin/events.php";
    }


    public function adminGestionUtilisateurs() {
        require_once __DIR__ . "/../views/back-office/admin/gestionUtilisateurs.php";
    }


    public function adminHome() {
        require_once __DIR__ . "/../views/back-office/admin/home.php";
    }

    public function adminOrganisateurProfile() {
        require_once __DIR__ . "/../views/back-office/admin/organisateur_profile.php";
    }

    public function adminOrganisateur() {
        require_once __DIR__ . "/../views/back-office/admin/organisateur.php";
    }

    public function adminProfile() {
        require_once __DIR__ . "/../views/back-office/admin/profile.php";
    }

    public function adminTag() {
        require_once __DIR__ . "/../views/back-office/admin/tag.php";
       
    }

    public function adminUpdateProfil() {
        require_once __DIR__ . "/../views/back-office/admin/updateProfil.php";
    }

    public function organisateurAbout() {
        require_once __DIR__ . "/../views/back-office/organisateur/about.php";
    }
    
    public function organisateurContact() {
        require_once __DIR__ . "/../views/back-office/organisateur/contact.php";
    }
    
    public function organisateurEventInformation() {
        require_once __DIR__ . "/../views/back-office/organisateur/eventInformation.php";
    }
    
    public function organisateurGestionUtilisateurs() {
        require_once __DIR__ . "/../views/back-office/organisateur/gestionUtilisateurs.php";
    }
    
    public function organisateurHome() {
        require_once __DIR__ . "/../views/back-office/organisateur/home.php";
    }
    
    public function organisateurMyEvents() {
        require_once __DIR__ . "/../views/back-office/organisateur/myEvents.php";
    }
    
    public function organisateurProfile() {
        require_once __DIR__ . "/../views/back-office/organisateur/profile.php";
    }
    
    public function organisateurUpdate() {
        require_once __DIR__ . "/../views/back-office/organisateur/update.php";
    }
    
    public function organisateurUsers() {
        require_once __DIR__ . "/../views/back-office/organisateur/users.php";
    }
    
}

