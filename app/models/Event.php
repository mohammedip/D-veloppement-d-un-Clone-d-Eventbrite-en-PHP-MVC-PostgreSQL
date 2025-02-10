<?php
namespace App;

use App\model;

require_once dirname(__DIR__) . './vendor/autoload.php'; 

class Event {
    private string $titre;
    private string $description;
    private string $date;
    private string $lieu;
    private float $prix;
    private int $capacite;
    private string $statut;
    private bool $is_verified;
    private ?int $categorie_id;
    private ?string $image_url;

    public static function getAllEvents(){
        $events = CRUD::select('evenement');
        return $events;
    }

    public static function getEvent($id){
        $events = CRUD::select('evenement', '*', 'id = ?', [$id]);
        return $events;
    }

    public static function getCountEvents(){
        $events = CRUD::select('evenement','count(*) as count');
        return $events[0]['count'];  
    }

    public function addEvent(){
        if (isset($_POST['titre']) && isset($_POST['date']) && isset($_POST['prix']) && 
            isset($_POST['capacite']) && isset($_POST['statut'])) {

            $this->titre = Validation::removeSpecialCharacters($_POST['titre']);
            $this->description = Validation::removeSpecialCharacters($_POST['description'] ?? '');
            $this->date = Validation::removeSpecialCharacters($_POST['date']);
            $this->lieu = Validation::removeSpecialCharacters($_POST['lieu'] ?? '');
            $this->prix = floatval($_POST['prix']);
            $this->capacite = intval($_POST['capacite']);
            $this->statut = Validation::removeSpecialCharacters($_POST['statut']);
            $this->is_verified = isset($_POST['is_verified']) ? boolval($_POST['is_verified']) : false;
            $this->categorie_id = isset($_POST['categorie_id']) ? intval($_POST['categorie_id']) : null;
            $this->image_url = isset($_POST['image_url']) ? Validation::removeSpecialCharacters($_POST['image_url']) : null;

            $eventData = [
                'titre' => $this->titre,
                'description' => $this->description,
                'date' => $this->date,
                'lieu' => $this->lieu,
                'prix' => $this->prix,
                'capacite' => $this->capacite,
                'statut' => $this->statut,
                'is_verified' => $this->is_verified,
                'categorie_id' => $this->categorie_id,
                'image_url' => $this->image_url
            ];
            
            CRUD::insert('evenement', $eventData);
        }
    }

    public function updateEvent(){
        if (isset($_POST['id'])) {
            if(isset($_POST['titre'])) $this->titre = Validation::removeSpecialCharacters($_POST['titre']);
            if(isset($_POST['description'])) $this->description = Validation::removeSpecialCharacters($_POST['description']);
            if(isset($_POST['date'])) $this->date = Validation::removeSpecialCharacters($_POST['date']);
            if(isset($_POST['lieu'])) $this->lieu = Validation::removeSpecialCharacters($_POST['lieu']);
            if(isset($_POST['prix'])) $this->prix = floatval($_POST['prix']);
            if(isset($_POST['capacite'])) $this->capacite = intval($_POST['capacite']);
            if(isset($_POST['statut'])) $this->statut = Validation::removeSpecialCharacters($_POST['statut']);
            if(isset($_POST['is_verified'])) $this->is_verified = boolval($_POST['is_verified']);
            if(isset($_POST['categorie_id'])) $this->categorie_id = intval($_POST['categorie_id']);
            if(isset($_POST['image_url'])) $this->image_url = Validation::removeSpecialCharacters($_POST['image_url']);

            $event = [
                'titre' => $this->titre,
                'description' => $this->description,
                'date' => $this->date,
                'lieu' => $this->lieu,
                'prix' => $this->prix,
                'capacite' => $this->capacite,
                'statut' => $this->statut,
                'is_verified' => $this->is_verified,
                'categorie_id' => $this->categorie_id,
                'image_url' => $this->image_url
            ];
            
            CRUD::update('evenement', $event, 'id=?', [$_POST['id']]);
        }
    }

    public function deleteEvent(){
        if (isset($_GET['id'])) {
            CRUD::delete('evenement', 'id=?', [$_GET['id']]);
        }
    }
}
?>