<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Posteo</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/courriel/posteo.php">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Communication, Courriel, Posteo">
   <meta name="description" content="Bienvenue sur la page de présentation de Posteo, proposée par Protège-moi sur Internet !">

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
                  <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/courriel/">Courriel</a></li>
                  <li class="breadcrumb-item" aria-current="page">Posteo</li>
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
                        <img src="https://protege-moi-sur-internet.com/images/posteo.jpg" class="img-thumbnail" alt="Logo de Posteo">
                        <figcaption>Logo du site de Posteo</figcaption>
                    </figure>
                </div>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h1 class="font-weight-bold text-center">Présentation de Posteo</h1>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Présentation -->
                <p class="lead text-center">Posteo est un service de courrier et d'agenda allemand.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Open source et respectueux de la vie privée, aucune information personnelle n'est requise pour la création de votre compte et vos courriels sont chiffrés de bout en bout.</p>
                
                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Vous disposez d'un compte de base payante, mais vous pouvez l'utiliser gratuitement pendant 14 jours.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Enfin, Posteo est alimenté avec de l'énergie verte fournie par Greenpeace Energy et il permet aux utilisateurs de créer leurs propres listes de diffusion.</p>
                
                <!-- Séparateur -->
                <div class="py-4"></div>
                 
                <!-- Titre -->
                <h2 class="font-weight-bold text-center">Bonne utilisation !</h2>

                 <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- site -->
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Groupe de liens">
                  <div class="btn-group mr-2" role="group" aria-label="Site de Posteo">
                    <a href="https://posteo.de/fr" target="_blank" role="button" class="btn">Site officiel <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Documentation de Posteo">
                    <a href="https://posteo.de/fr/aide" target="_blank" role="button" class="btn">Documentation <i class="fa fa-external-link" aria-hidden="true"></i></a>
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