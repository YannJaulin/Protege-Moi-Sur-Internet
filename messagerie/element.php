<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Element</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/messagerie/element.php">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin & Les contributeurs GitHub">
   <meta name="keywords" content="Communication, Messagerie, Element, Matrix, New Vector Ltd">
   <meta name="description" content="Bienvenue sur la page de présentation de Element, proposée par Protège-moi sur Internet !">

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
                  <li class="breadcrumb-item" aria-current="page">Element</li>
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
                        <img src="https://protege-moi-sur-internet.com/images/element.png" class="img-thumbnail" alt="Logo de Element">
                        <figcaption>Logo du site de Element</figcaption>
                    </figure>
                </div>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h1 class="font-weight-bold text-center">Présentation de Element</h1>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Présentation -->
                <p class="lead text-center">Element est un logiciel de messagerie de la société anglaise New Vector Ltd.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Précédemment Riot, il est basé sur Matrix qui est un protocole décentralisé et sécurisé.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Open source et multi-plateforme, vous pouvez créer des groupes, partager des médias, passer des appels vidéos et bien d'autres choses.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">De plus, vous pouvez héberger un serveur Matrix et le rendre fédéré et chiffrée.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Enfin, il est disponible sur F-Droid et la direction interministérielle du numérique française a développé le logiciel Tchap à partir de son code, afin de sécuriser les communications de ses agents publics, tout comme Thales avec Citadel Team.</p>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h2 class="font-weight-bold text-center">Bonne utilisation !</h2>

                 <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- site -->
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Groupe de liens">
                  <div class="btn-group mr-2" role="group" aria-label="Site de Element">
                    <a href="https://element.io/" target="_blank" role="button" class="btn">Site officiel <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group mr-2" role="group" aria-label="Documentation de Element">
                    <a href="https://element.io/help" target="_blank" role="button" class="btn">Documentation <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Site de Matrix">
                    <a href="https://matrix.org/" target="_blank" role="button" class="btn">Matrix <i class="fa fa-external-link" aria-hidden="true"></i></a>
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
