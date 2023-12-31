<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>MFC</title>
    
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
              <li><a href="formation.php">Formation</a></li>
              <li><a href="mfc.html">Groupe MFC</a></li>
            </ul>
          </nav>
          <div id="imagePrincipale">
            <h1>Maison Formation Continue</h1>
            <div id="premierTrait"></div>
            <h5>Formations</h5>
          </div>
    
        </header>
        <div style="margin-left: 30%">
    <form id="search-form" action="index.php" method="get">
        <input type="text" name="search-input" id="search-input" placeholder="Rechercher...">
        <button type="button" id="search-button"><i class="fa fa-search"></i></button>
    </form>
</div>

<h2>Nos Formations</h2>
<div id="search-results">
    <?php include 'index.php'; ?>
</div>

<section id="inscription-section">
      <div class="inscription-text">
        <H3>Fiche d'inscription</H3>
        <input type="text" placeholder="Nom" required>
        <input type="email" placeholder="Prénom" required>
        <input type="date" placeholder="Date de la formation" required>
        <input type="text" placeholder="Nom de la formation" required>
          <!-- <p>
              Pour toute demande de formation, veuillez appuyer sur télécharger le PDF, le remplir, puis nous l'envoyer à l'adresse e-mail <a href="mailto:contact@mfc.fr">contact@mfc.fr</a>. Une validation vous sera renvoyée par la suite.
          </p> -->
    
      <div style="margin-left: 50%" class="inscription-button">
          <a href="lien_vers_votre_fiche_d'inscription.pdf" download="fiche_inscription.pdf">
              S'inscrire
          </a>
      </div>
    </div>
  </section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Handle search button click
        $("#search-button").on("click", function (e) {
            e.preventDefault(); // Prevent the default form submission

            // Get form data
            var formData = $("#search-form").serialize();

            // Make AJAX request
            $.ajax({
                type: "GET",
                url: "index.php",
                data: formData,
                success: function (data) {
                    // Update the search results container with the new data
                    $("#search-results").html(data);
                }
            });
        });
    });
</script>
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