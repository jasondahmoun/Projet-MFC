<?php
// Paramètres de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$nomBaseDeDonnees = "projetmfc";

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

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
$sql = "SELECT * FROM stagiaires WHERE email='$username' AND Mdp='$password'";
$resultat = $connexion->query($sql);
debug_to_console("Test");

// Vérification des résultats de la requête
if ($resultat->num_rows > 0) {
    header("Location: index.html");
    exit(); // Assurez-vous de terminer le script après la redirection
} else {
    echo "Identifiants incorrects. Veuillez réessayer."; // L'utilisateur n'est pas trouvé dans la base de données
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>
