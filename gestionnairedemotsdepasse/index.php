<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Gestionnaire de mots de passe</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/gestionnairedemotsdepasse/">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Productivité, Gestionnaire de mots de passe, Bitwarden, KeePassXC">
   <meta name="description" content="Bienvenue sur la page des logiciels et des services de gestionnaire de mots de passe, proposée par Protège-moi sur Internet !">

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
              <li class="breadcrumb-item" aria-current="page">Gestionnaire de mots de passe</li>
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
              <img src="https://protege-moi-sur-internet.com/images/bitwarden.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Bitwarden <span class="badge badge-pill badge-primary"><i class="fa fa-cloud" aria-hidden="true"></i></span></h5>
                <p class="card-text">Un gestionnaire de mots de passe dans le nuage !</p>
                <a href="https://protege-moi-sur-internet.com/gestionnairedemotsdepasse/bitwarden.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/keepassxc.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">KeePassXC</h5>
                <p class="card-text">Le gestionnaire de mot de passe, le plus sécurisé !</p>
                <a href="https://protege-moi-sur-internet.com/gestionnairedemotsdepasse/keepassxc.php" role="button" class="btn">En savoir plus</a>
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