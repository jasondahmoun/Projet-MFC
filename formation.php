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
        <form id="inscription-form" action="formation.php" method="post">
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="date" name="date_formation" placeholder="Date de la formation" required>
    <input type="text" name="nom_formation" placeholder="Nom de la formation" required>
    <button type="submit" style="margin-left: 25%" class="inscription-button">S'inscrire</button>
        </form>
        <?php if(isset($alert_message)): ?>
            <div id="inscription-message" style="margin-left: 43.5%">
        <p><?php echo $alert_message; ?></p>
            </div>
        <?php endif; ?>
      
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