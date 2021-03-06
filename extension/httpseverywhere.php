<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - HTTPS Everywhere</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/extension/httpseverywhere.php">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Navigation, Extension, HTTPS Everywhere, Electronic Frontier Foundation, Tor Project">
   <meta name="description" content="Bienvenue sur la page de présentation de HTTPS Everywhere, proposée par Protège-moi sur Internet !">

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
                  <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/extension/">Extension</a></li>
                  <li class="breadcrumb-item" aria-current="page">HTTPS Everywhere</li>
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
                        <img src="https://protege-moi-sur-internet.com/images/httpseverywhere.jpg" class="img-thumbnail" alt="Logo de HTTPS Everywhere">
                        <figcaption>Logo du site de HTTPS Everywhere</figcaption>
                    </figure>
                </div>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h1 class="font-weight-bold text-center">Présentation de HTTPS Everywhere</h1>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Présentation -->
                <p class="lead text-center">HTTPS Everywhere est une extension de navigateur web éditée par l'Electronic Frontier Foundation et Tor Project.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Gratuite et open source, elle chiffre vos communications en activant automatiquement le chiffrement HTTPS sur les sites le prenant en charge.</p>
                
                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Cela permet de renforcer la sécurité de votre navigation et d'éviter que des informations confidentielles puissent être interceptées.</p>
                
                <!-- Séparateur -->
                <div class="py-4"></div>
                 
                <!-- Titre -->
                <h2 class="font-weight-bold text-center">Bonne utilisation !</h2>

                 <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- site -->
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Groupe de liens">
                  <div class="btn-group mr-2" role="group" aria-label="Site de HTTPS Everywhere">
                    <a href="https://www.eff.org/https-everywhere" target="_blank" role="button" class="btn">Site officiel <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Add-ons de HTTPS Everywhere">
                    <a href="https://addons.mozilla.org/fr/firefox/addon/https-everywhere/" target="_blank" role="button" class="btn">Add-ons Firefox <i class="fa fa-external-link" aria-hidden="true"></i></a>
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