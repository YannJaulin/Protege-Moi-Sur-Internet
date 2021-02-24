<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - DuckDuckGo</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/moteurderecherche/duckduckgo.php">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Navigation, Moteur de recherche, DuckDuckGo, DuckDuckGo, Inc">
   <meta name="description" content="Bienvenue sur la page de présentation de DuckDuckGo, proposée par Protège-moi sur Internet !">

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
                  <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/moteurderecherche/">Moteur de recherche</a></li>
                  <li class="breadcrumb-item" aria-current="page">DuckDuckGo</li>
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
                        <img src="https://protege-moi-sur-internet.com/images/duckduckgo.png" class="img-thumbnail" alt="Logo de DuckDuckGo">
                        <figcaption>Logo du site de DuckDuckGo</figcaption>
                    </figure>
                </div>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h1 class="font-weight-bold text-center">Présentation de DuckDuckGo</h1>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Présentation -->
                <p class="lead text-center">DuckDuckGo est un moteur de recherche de l'entreprise américaine DuckDuckGo, Inc.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Respectueux de la vie privée et construit à partir de logiciels libres, il ne vous suit pas et les résultats de recherche ne sont jamais basés sur votre historique.</p>
                
                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">C'est aujourd'hui, le moteur de recherche privée, le plus populaire et il propose d'autres choses, comme les raccourcis "!Bang" et une application/extension.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Enfin, il consacre une partie de ses revenus à financer des projets libres et il est le moteur de recherche par défaut du navigateur Tor.</p>
                
                <!-- Séparateur -->
                <div class="py-4"></div>
                 
                <!-- Titre -->
                <h2 class="font-weight-bold text-center">Bonne utilisation !</h2>

                 <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- site -->
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Groupe de liens">
                  <div class="btn-group mr-2" role="group" aria-label="Site de DuckDuckGo">
                    <a href="https://duckduckgo.com/" target="_blank" role="button" class="btn">Site officiel <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group mr-2" role="group" aria-label="Documentation de DuckDuckGo">
                    <a href="https://help.duckduckgo.com/" target="_blank" role="button" class="btn">Documentation <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Analyse de εxodus">
                    <a href="https://reports.exodus-privacy.eu.org/fr/reports/com.duckduckgo.mobile.android/latest/" target="_blank" role="button" class="btn">εxodus <i class="fa fa-external-link" aria-hidden="true"></i></a>
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