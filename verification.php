<?php
// Paramètres de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$nomBaseDeDonnees = "projetmfc";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Récupération des données du formulaire
$username = $_POST["username"];
$password = $_POST["password"];

// Requête SQL pour vérifier l'existence de l'utilisateur dans la base de données
$sql = "SELECT * FROM stagiaires WHERE NomS='$username' AND Mdp='$password'";
$resultat = $connexion->query($sql);

// Vérification des résultats de la requête
if ($resultat->num_rows > 0) {
    echo "Connexion réussie !"; // L'utilisateur est trouvé dans la base de données
} else {
    echo "Identifiants incorrects. Veuillez réessayer."; // L'utilisateur n'est pas trouvé dans la base de données
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
