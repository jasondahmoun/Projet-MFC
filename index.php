<?php
// Connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "projetmfc";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

// Traitement du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateFormation = $_POST['date_formation'];
    $nomFormation = $_POST['nom_formation'];

    // Vérifier si le stagiaire existe
    $sqlStagiaire = "SELECT idS FROM stagiaires WHERE Noms = '$nom' AND PrenomS = '$prenom'";
    $resultStagiaire = $connexion->query($sqlStagiaire);

    // Vérifier si la formation existe
    $sqlFormation = "SELECT IdF FROM formation WHERE IntituleF = '$nomFormation'";
    $resultFormation = $connexion->query($sqlFormation);

    // Si le stagiaire et la formation existent, insérer dans la table ficheInscription
    if ($resultStagiaire->num_rows > 0 && $resultFormation->num_rows > 0) {
        $rowStagiaire = $resultStagiaire->fetch_assoc();
        $idStagiaire = $rowStagiaire['idS'];

        $rowFormation = $resultFormation->fetch_assoc();
        $idFormation = $rowFormation['IdF'];

        // Insérer les données dans la table ficheInscription
        $sqlInsert = "INSERT INTO ficheInscription (DateInscription, IdF, IdS) VALUES ('$dateFormation', '$idFormation', '$idStagiaire')";
        if ($connexion->query($sqlInsert) === TRUE) {
            $alert_message = "Fiche d'inscription ajoutée avec succès.";
        } else {
            $alert_message = "Erreur lors de l'inscription : " . $connexion->error;
        }
    } else {
        $alert_message = "Stagiaire ou formation non trouvé.";
    }
}

// Affichage des résultats de la recherche
$searchTerm = isset($_GET['search-input']) ? $_GET['search-input'] : '';
$valider = isset($_GET['search-button']) ? $_GET['search-button'] : '';

if (isset($valider) && !empty($searchTerm)) {
    $resultat = $connexion->query("SELECT * FROM Formation WHERE IntituleF LIKE '%$searchTerm%' OR DescriptionF LIKE '%$searchTerm%' OR Theme LIKE '%$searchTerm%'");
} else {
    $resultat = $connexion->query("SELECT * FROM Formation");
}

// Vérifier s'il y a des résultats
if ($resultat->num_rows > 0) {
    echo "<style>
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
        border-radius: 8px; /* Ajout de coins arrondis */
        overflow: hidden; /* Masquage du débordement des coins arrondis */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère pour la profondeur */
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px; /* Légère augmentation de l'espacement intérieur */
        text-align: left;
        transition: background-color 0.3s; /* Transition en douceur pour le survol */
    }

    th {
        background-color: #f5f5f5; /* Légère modification de la couleur de fond */
        font-weight: bold; /* Accentuation du poids de la police pour les en-têtes */
    }

    tr:hover {
        background-color: #f0f8ff; /* Couleur de fond légèrement différente au survol */
    }
</style>
";
          
    echo "<table border='1'><tr><th>Intitulé</th><th>Description</th><th>Tarif</th><th>Durée</th><th>Thème</th></tr>";

    // Afficher les données
    while ($row = $resultat->fetch_assoc()) {
        echo "<tr><td>{$row['IntituleF']}</td><td>{$row['DescriptionF']}</td><td>{$row['Tarif']}</td><td>{$row['Duree']}</td><td>{$row['Theme']}</td></tr>";
    }

    echo "</table></body></html>";
} else {
    echo "Aucune formation trouvée.";
}

// Fermer la connexion à la base de données
$connexion->close();
?>
