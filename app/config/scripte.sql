CREATE DATABASE Eventbrite ;
USE Eventbrite ; 

CREATE TABLE Role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE Utilisateur (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    motDePasse VARCHAR(255) NOT NULL,
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES Role(id),
     is_active BOOLEAN DEFAULT true
    
);

CREATE TABLE Evenement (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(200) NOT NULL,
    description TEXT,
    date DATE NOT NULL,
    lieu VARCHAR(200),
    prix FLOAT NOT NULL,
    capacite INT NOT NULL,
    statut VARCHAR(50) NOT NULL,
    is_verified BOOLEAN DEFAULT false,
    categorie_id INT,
    image_url VARCHAR(255),
    FOREIGN KEY (categorie_id) REFERENCES Categorie(id) ON DELETE CASCADE
);


CREATE TABLE Categorie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL
);


CREATE TABLE Tag (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE Evenement_Tag (
    evenement_id INT,
    tag_id INT,
    PRIMARY KEY (evenement_id, tag_id),
    FOREIGN KEY (evenement_id) REFERENCES Evenement(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES Tag(id) ON DELETE CASCADE
);

CREATE TABLE Sponsor (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    montant FLOAT NOT NULL
);

CREATE TABLE Evenement_Sponsor (
    evenement_id INT,
    sponsor_id INT,
    PRIMARY KEY (evenement_id, sponsor_id),
    FOREIGN KEY (evenement_id) REFERENCES Evenement(id) ON DELETE CASCADE,
    FOREIGN KEY (sponsor_id) REFERENCES Sponsor(id) ON DELETE CASCADE
);

CREATE TABLE Billet (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type VARCHAR(50),
    prix FLOAT NOT NULL,
    qrCode VARCHAR(255) UNIQUE NOT NULL,
    evenement_id INT,
    FOREIGN KEY (evenement_id) REFERENCES Evenement(id) ON DELETE CASCADE
);

CREATE TABLE OrderTable (
    id INT PRIMARY KEY AUTO_INCREMENT,
    date DATE NOT NULL,
    statut VARCHAR(50) NOT NULL,
    participant_id INT,
    FOREIGN KEY (participant_id) REFERENCES Utilisateur(id) ON DELETE CASCADE
);

CREATE TABLE Order_Billet (
    order_id INT,
    billet_id INT,
    PRIMARY KEY (order_id, billet_id),
    FOREIGN KEY (order_id) REFERENCES OrderTable(id) ON DELETE CASCADE,
    FOREIGN KEY (billet_id) REFERENCES Billet(id) ON DELETE CASCADE
);

CREATE TABLE Paiement (
    id INT PRIMARY KEY AUTO_INCREMENT,
    montant FLOAT NOT NULL,
    methode VARCHAR(50) NOT NULL,
    etat VARCHAR(50) NOT NULL,
    order_id INT,
    FOREIGN KEY (order_id) REFERENCES OrderTable(id) ON DELETE CASCADE
);

CREATE TABLE Notification (
    id INT PRIMARY KEY AUTO_INCREMENT,
    message TEXT NOT NULL,
    utilisateur_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(id) ON DELETE CASCADE
);

CREATE TABLE Statistiques (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombreUtilisateurs INT,
    nombreEvenements INT,
    revenusTotal FLOAT
);
