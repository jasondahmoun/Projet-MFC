<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "projetmfc";

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Récupérer les données du formulaire
$noms = $_POST['noms'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$entreprise = $_POST['entreprise'];
$adresse = $_POST['adresse'];
$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

// Requête SQL pour ajouter les données dans la table "stagiaires"
$sql = "INSERT INTO stagiaires (Noms, PrenomS, TelS, email, EntrepriseS, AdresseS, mdp) VALUES ('$noms', '$prenom', '$tel', '$mail', '$entreprise', '$adresse', '$mdp')";

if ($connexion->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $sql . "<br>" . $connexion->error;
}

// Fermer la connexion à la base de données
$connexion->close();
?>
