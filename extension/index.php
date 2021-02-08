<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Extension</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/extension/">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Navigation, Extension, ClearURLs, Decentraleyes, HTTPS Everywhere, uBlock Origin">
   <meta name="description" content="Bienvenue sur la page des extensions, proposée par Protège-moi sur Internet !">

   <?php
      require_once '../require/lien.php';
   ?>
  
  </head>
  <body>

    <!-- Navigation -->
    <?php
      require_once '../require/nav.php';
    ?>

    <!--Séparateur-->
    <div class="py-4"></div>

    <!-- Alert -->
    <?php
      require_once '../require/alert.php';
    ?>

    <!--Séparateur-->
    <div class="py-4"></div>

    <!-- Fil d'ariane -->
  <div class="container">
    <div class="row">
        <div class="col-md">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/">Accueil</a></li>
              <li class="breadcrumb-item" aria-current="page">Extension</li>
            </ol>
          </nav>
        </div>
    </div>
  </div>

  <!--Séparateur-->
  <div class="py-4"></div>

    <!--Catégorie-->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/clearurls.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">ClearURLs</h5>
                <p class="card-text">Une extension qui supprime les éléments de traçage des liens !</p>
                <a href="https://protege-moi-sur-internet.com/extension/clearurls.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/decentraleyes.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Decentraleyes</h5>
                <p class="card-text">Un intercepteur de contenu tiers pour les injecter en local !</p>
                <a href="https://protege-moi-sur-internet.com/extension/decentraleyes.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/httpseverywhere.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">HTTPS Everywhere</h5>
                <p class="card-text">Une extension qui chiffre la communication avec les sites !</p>
                <a href="https://protege-moi-sur-internet.com/extension/httpseverywhere.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/ublockorigin.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">uBlock Origin</h5>
                <p class="card-text">Le bloqueur polyvalent de référence !</p>
                <a href="https://protege-moi-sur-internet.com/extension/ublockorigin.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    <!-- Séparateur -->
    <div class="py-2"></div>

    <!-- Footer -->
    <?php
      require_once '../require/footer.php';
    ?>

  </body>
</html>