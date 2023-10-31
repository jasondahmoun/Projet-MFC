<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$nomBaseDeDonnees = "projetmfc";

$conn = mysqli_connect($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Récupération des formations dans la base de données
$sql = "SELECT * FROM formation";
$result = mysqli_query($conn, $sql);

// Fermer la connexion à la base de données (ne pas fermer ici si vous comptez utiliser $result dans d'autres parties de votre code)
// mysqli_close($conn);
?>
