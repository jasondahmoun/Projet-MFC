<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Maison Formation Continue</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li id="logo"><a href="index.html">Maison Formation Continue</a></li>
        <li><a href="profil.html">Profil</a></li>
        <li><a href="contact.html">Nous contacter</a></li>
        <li><a href="formation.html">Formation</a></li>
        <li><a href="mfc.html">Groupe MFC</a></li>
      </ul>
    </nav>

    <div id="imagePrincipale">
        <h1>Maison Formation Continue</h1>
        <div id="premierTrait"></div>
        <h5>Mon Compte</h5>
      </div>

  </header>

  <div class="profil-container">

    <div class="profil-info">
      <h2>Profil de <?php echo $stagiaireData['NomS'] . " " . $stagiaireData['PrenomS']; ?></h2>
      <p>Téléphone : <?php echo $stagiaireData['telS']; ?></p>
      <p>Email : <?php echo $stagiaireData['email']; ?></p>
      <p>Entreprise : <?php echo $stagiaireData['EntrepriseS']; ?></p>
      <p>Adresse : <?php echo $stagiaireData['AdresseS']; ?></p>
    </div>

    <div class="fiches-inscription">
      <h2>Fiches d'Inscription</h2>
      <ul>
        <?php
        while ($row = $resultFiches->fetch_assoc()) {
            echo "<li>Date d'Inscription : " . $row['DateInscription'] . ", ID de la Fiche : " . $row['IdFiche'] . "</li>";
        }
        ?>
      </ul>
    </div>

  </div>
  
  <footer>
    <div class="footer-content">
        <div class="footer-left">
            <h3>Coordonnées</h3>
            <p>Téléphone : 0825 07 9090</p>
            <p>Email : contact@mfc.fr</p>
        </div>
        <div class="footer-right">
            <h3>Suivez-nous</h3>
            <div class="social-icons">
                <a href="https://facebbok.com/@some-name-here" aria-label="Facebook" target="_blank" rel="noopener" class="fa fa-facebook"></a>
                <a href="https://twitter.com/@some-name-here" aria-label="Twitter" target="_blank" rel="noopener" class="fa fa-twitter"></a>
                <a href="https://linkedin.com/@some-name-here" aria-label="Linkedin" target="_blank" rel="noopener" class="fa fa-linkedin"></a>
                <a href="https://instagram.com/@some-name-here" aria-label="Twitter" target="_blank" rel="noopener"class="fa fa-instagram"></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 Maison Formation Continue. Tous droits réservés.</p>
    </div>
</footer>
</body>
</html>
