<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Matrix / Element</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/messagerie/matrix.php">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin & Fanch">
   <meta name="keywords" content="Communication, Messagerie, Matrix, Element">
   <meta name="description" content="Bienvenue sur la page de présentation de Matrix Element, proposée par Protège-moi sur Internet !">

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
                  <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/messagerie/">Messagerie</a></li>
                  <li class="breadcrumb-item" aria-current="page">Matrix Element</li>
                </ol>
            </nav>
        </div>
    </div>
  </div>

  <!--Séparateur-->
  <div class="py-4"></div>

    <!--Présentation-->
    <div class="container">
        <div class="row">
            <div class="col-md">
                <!-- Logo -->
                <div class="text-center">
                    <figure>
                        <img src="https://protege-moi-sur-internet.com/images/element.png" class="img-thumbnail" alt="Logo d'Element">
                        <figcaption>Logo du site de Element</figcaption>
                    </figure>
                </div>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h1 class="font-weight-bold text-center">Présentation de Matrix / Element</h1>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Présentation -->
                <p class="lead text-center">Matrix est un service fédéré et decentralisé de messagerie instantanée sur internet.</p>

                <div class="py-4"></div>

                <!-- Présentation -->
                <p class="lead text-center">Element est le logiciel qui permet de se connecter à ce service.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Matrix / Element vous permez de discuter dans des salons thematiques publics, ou entre amis dans des salons privés.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">C'est un logiciel libre, multi-plateforme et vous pouvez l'héberger sur votre serveur.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Ce service est utilisé par l’État français (avec Tchap où la fédération est coupée) et est également disponibles gratuitement chez de nombreux CHATONS.</p>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h2 class="font-weight-bold text-center">Bonne utilisation !</h2>

                 <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- site -->
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Groupe de liens">
                  <div class="btn-group mr-2" role="group" aria-label="Site de Matrix">
                    <a href="https://matrix.org/" target="_blank" role="button" class="btn">Site officiel Matrix<i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Site d'Element">
                    <a href="https://element.io/" target="_blank" role="button" class="btn">Site officiel Element<i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Documentation en français">
                    <a href="https://tedomum.net/service/matrix/" target="_blank" role="button" class="btn">Documentation en français<i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                </div>

                <!-- Séparateur -->
                <div class="py-2"></div>
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
