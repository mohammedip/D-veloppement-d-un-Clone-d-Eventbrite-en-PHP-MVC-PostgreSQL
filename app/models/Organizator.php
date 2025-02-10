You're right. Let me update the class to use all variables from your Evenement table:

```php
<?php

require_once 'User.php';
require_once 'Database.php';
require_once 'LoginLogoutTrait.php';
require_once 'RegisterTrait.php';

class Organizator extends User {
    use LoginLogoutTrait, RegisterTrait;

    public function __construct($id, $email, $name, $role = 'Organizator') {
        parent::__construct($id, $email, $name, $role);
    }

    public function addEvent($titre, $description, $date, $lieu, $prix, $capacite, $statut, $categorie_id, $image_url = null) {
        $db = Database::getInstance()->getConnection();
        
        $query = $db->prepare("INSERT INTO Evenement (
            titre, description, date, lieu, prix, capacite, statut, 
            is_verified, categorie_id, image_url
        ) VALUES (?, ?, ?, ?, ?, ?, ?, FALSE, ?, ?)");
        
        return $query->execute([
            $titre, $description, $date, $lieu, $prix, 
            $capacite, $statut, $categorie_id, $image_url
        ]);
    }

    public function manageEvents() {
        $db = Database::getInstance()->getConnection();
        
        $query = $db->prepare("
            SELECT e.id, e.titre, e.description, e.date, e.lieu, 
                   e.prix, e.capacite, e.statut, e.is_verified, 
                   e.categorie_id, e.image_url, c.nom as categorie_nom 
            FROM Evenement e 
            LEFT JOIN Categorie c ON e.categorie_id = c.id
        ");
        $query->execute();
        return $query->fetchAll();
    }

    public function editEvent($eventId, $titre, $description, $date, $lieu, $prix, $capacite, $statut, $categorie_id, $image_url = null) {
        $db = Database::getInstance()->getConnection();
        
        $query = $db->prepare("
            UPDATE Evenement 
            SET titre = ?, description = ?, date = ?, lieu = ?, 
                prix = ?, capacite = ?, statut = ?, categorie_id = ?, 
                image_url = ?
            WHERE id = ?
        ");
        
        return $query->execute([
            $titre, $description, $date, $lieu, $prix, 
            $capacite, $statut, $categorie_id, $image_url, $eventId
        ]);
    }

    public function getEventDetails($eventId) {
        $db = Database::getInstance()->getConnection();
        
        $query = $db->prepare("
            SELECT e.*, c.nom as categorie_nom 
            FROM Evenement e 
            LEFT JOIN Categorie c ON e.categorie_id = c.id 
            WHERE e.id = ?
        ");
        $query->execute([$eventId]);
        return $query->fetch();
    }

    public function updateVerificationStatus($eventId, $isVerified) {
        $db = Database::getInstance()->getConnection();
        
        $query = $db->prepare("
            UPDATE Evenement 
            SET is_verified = ? 
            WHERE id = ?
        ");
        return $query->execute([$isVerified, $eventId]);
    }
}
```