<?php
// Connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL (habituellement localhost)
$username = "root"; 
$password = ""; 
$dbname = "projetmfc"; 

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du profil
$idStagiaire = $_SESSION['idS']; // L'ID du stagiaire dont vous voulez afficher le profil

// Requête pour récupérer les informations du stagiaire
$sqlStagiaire = "SELECT * FROM stagiaires WHERE IdS = $idStagiaire";
$resultStagiaire = $conn->query($sqlStagiaire);
$stagiaireData = $resultStagiaire->fetch_assoc();

// Requête pour récupérer les fiches d'inscription du stagiaire
$sqlFiches = "SELECT * FROM ficheinscription WHERE IdS = $idStagiaire";
$resultFiches = $conn->query($sqlFiches);

// Fermer la connexion à la base de données
$conn->close();
?>
