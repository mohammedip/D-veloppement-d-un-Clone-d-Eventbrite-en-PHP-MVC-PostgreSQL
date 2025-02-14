<?php

require_once 'User.php';
require_once 'Database.php';
require_once 'LoginLogoutTrait.php';
require_once 'RegisterTrait.php';
require_once 'CRUD.php';

class Organizator extends User {
    use LoginLogoutTrait, RegisterTrait;

    public function __construct($id, $email, $name, $role_id = 2) { // Assuming 2 is the Organizator role
        parent::__construct($id, $email, $name, $role_id);
    }

    // Add an event (instead of a course)
    public function addEvent($titre, $description, $date, $lieu, $prix, $capacite, $categorie_id, $tags = []) {
        $eventData = [
            'titre' => $titre,
            'description' => $description,
            'date' => $date,
            'lieu' => $lieu,
            'prix' => $prix,
            'capacite' => $capacite,
            'statut' => 'pending', // Default status
            'is_verified' => false,
            'categorie_id' => $categorie_id,
            'utilisateur_id' => $this->id
        ];

        $eventId = CRUD::insert('Evenement', $eventData) ? Database::getInstance()->getConnection()->lastInsertId() : null;

        if ($eventId) {
            foreach ($tags as $tagId) {
                CRUD::insert('Evenement_Tag', ['evenement_id' => $eventId, 'tag_id' => $tagId]);
            }
            return "Event added successfully!";
        }
        return "Failed to add event.";
    }

    // Get all events created by this Organizator
    public function listMyEvents() {
        return CRUD::select('Evenement', '*', 'utilisateur_id = ?', [$this->id]);
    }

    // Edit an event
    public function editEvent($eventId, $titre, $description, $date, $lieu, $prix, $capacite, $categorie_id, $tags = []) {
        $eventData = [
            'titre' => $titre,
            'description' => $description,
            'date' => $date,
            'lieu' => $lieu,
            'prix' => $prix,
            'capacite' => $capacite,
            'categorie_id' => $categorie_id
        ];

        $updated = CRUD::update('Evenement', $eventData, 'id = ? AND utilisateur_id = ?', [$eventId, $this->id]);

        if ($updated) {
            CRUD::delete('Evenement_Tag', 'evenement_id = ?', [$eventId]);
            foreach ($tags as $tagId) {
                CRUD::insert('Evenement_Tag', ['evenement_id' => $eventId, 'tag_id' => $tagId]);
            }
            return "Event updated successfully!";
        }
        return "Failed to update event.";
    }

    // Delete an event
    public function deleteEvent($eventId) {
        CRUD::delete('Evenement_Tag', 'evenement_id = ?', [$eventId]);
        return CRUD::delete('Evenement', 'id = ? AND utilisateur_id = ?', [$eventId]) ? "Event deleted successfully!" : "Failed to delete event.";
    }
}
