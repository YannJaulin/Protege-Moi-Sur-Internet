<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Moteur de recherche</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/moteurderecherche/">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Navigation, Moteur de recherche, DuckDuckGo, Qwant, Searx, Startpage">
   <meta name="description" content="Bienvenue sur la page des moteurs de recherche, proposée par Protège-moi sur Internet !">

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
              <li class="breadcrumb-item" aria-current="page">Moteur de recherche</li>
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
              <img src="https://protege-moi-sur-internet.com/images/duckduckgo.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">DuckDuckGo</h5>
                <p class="card-text">Le moteur de recherche privée, le plus connue !</p>
                <a href="https://protege-moi-sur-internet.com/moteurderecherche/duckduckgo.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/qwant.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Qwant</h5>
                <p class="card-text">Un moteur de recherche français qui ne vous piste pas !</p>
                <a href="https://protege-moi-sur-internet.com/moteurderecherche/qwant.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/searx.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Searx <span class="badge badge-pill badge-primary"><i class="fa fa-cloud" aria-hidden="true"></i></span></h5>
                <p class="card-text">Un métamoteur de recherche open source et qui peut être auto-hébergé !</p>
                <a href="https://protege-moi-sur-internet.com/moteurderecherche/searx.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/startpage.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Startpage</h5>
                <p class="card-text">Un moteur de recherche qui se base sur les résultats de Google et qui respecte votre vie privée !</p>
                <a href="https://protege-moi-sur-internet.com/moteurderecherche/startpage.php" role="button" class="btn">En savoir plus</a>
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