<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Sécurité, Vie privée, Open source, Logiciels, Services, Annuaire">
   <meta name="description" content="Bienvenue sur Protège-moi sur Internet, l'annuaire des logiciels et des services qui respectent votre vie privée sur internet !">

   <?php
      require_once 'require/lien.php';
   ?>
  
  </head>
  <body>

  <!-- Navigation -->
  <?php
    require_once 'require/nav.php';
  ?>

  <!--Séparateur-->
  <div class="py-4"></div>

  <!-- Alert -->
  <?php
    require_once 'require/alert.php';
  ?>

  <!--Séparateur-->
  <div class="py-4"></div>

  <!-- Présentation -->
  <div class="container">
      <div class="row">
          <div class="col-md">
              <div class="jumbotron">
                  <div class="media">
                      <img src="https://protege-moi-sur-internet.com/images/logo.jpg" class="align-self-center mr-3 img-thumbnail d-none d-md-block" alt="">
                        <div class="media-body">
                          <div class="text-center">
                              <img src="https://protege-moi-sur-internet.com/images/logo.jpg" class="img-thumbnail d-md-none" alt="">
                              <h1 class="display-4 d-md-none">Bienvenue sur PMSInternet</h1>
                              <p class="lead d-md-none">C'est un annuaire qui regroupe des logiciels et des services qui respectent votre vie privée sur internet.</p>
                              <p class="lead d-md-none">Son but est de vous présenter des alternatives crédibles par rapport aux géants du web, tout en n'étant pas considéré comme un produit.</p>
                              <p class="lead d-md-none">Bonne navigation !</p>
                          </div>
                          <h1 class="mt-0 display-4 d-none d-md-block">Bienvenue sur PMSInternet</h1>
                          <p class="lead d-none d-md-block">C'est un annuaire qui regroupe des logiciels et des services qui respectent votre vie privée sur internet.</p>
                          <p class="lead d-none d-md-block">Son but est de vous présenter des alternatives crédibles par rapport aux géants du web, tout en n'étant pas considéré comme un produit.</p>
                          <p class="lead d-none d-md-block">Bonne navigation !</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--Séparateur-->
  <div class="py-3"></div>

  <!-- Fil d'ariane -->
  <div class="container">
    <div class="row">
        <div class="col-md">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" aria-current="page">Accueil</li>
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
                <img src="https://protege-moi-sur-internet.com/images/bureautique.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Bureautique</h5>
                  <p class="card-text">Pour créer et éditer des documents sans perdre ses données !</p>
                  <a href="https://protege-moi-sur-internet.com/bureautique/" role="button" class="btn">Voir la liste</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card h-100">
                <img src="https://protege-moi-sur-internet.com/images/chiffrement.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Chiffrement</h5>
                  <p class="card-text">Pour chiffrer ses fichiers et ses dossiers !</p>
                  <a href="https://protege-moi-sur-internet.com/chiffrement/" role="button" class="btn">Voir la liste</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card h-100">
                <img src="https://protege-moi-sur-internet.com/images/courriel.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Courriel</h5>
                  <p class="card-text">Pour recevoir des courriels sans perdre sa confidentialité !</p>
                  <a href="https://protege-moi-sur-internet.com/courriel/" role="button" class="btn">Voir la liste</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card h-100">
                <img src="https://protege-moi-sur-internet.com/images/dns.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">DNS</h5>
                  <p class="card-text">Pour se connecter sur Internet sans être suivi par son FAI !</p>
                  <a href="https://protege-moi-sur-internet.com/dns/" role="button" class="btn">Voir la liste</a>
                </div>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                  <img src="https://protege-moi-sur-internet.com/images/extension.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Extension</h5>
                    <p class="card-text">Pour protéger son navigateur des pisteurs !</p>
                    <a href="https://protege-moi-sur-internet.com/extension/" role="button" class="btn">Voir la liste</a>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="https://protege-moi-sur-internet.com/images/gestionnairedemotsdepasse.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Gestionnaire de mots de passe</h5>
                    <p class="card-text">Pour ne garder ses mots de passe que pour soi !</p>
                    <a href="https://protege-moi-sur-internet.com/gestionnairedemotsdepasse/" role="button" class="btn">Voir la liste</a>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="https://protege-moi-sur-internet.com/images/messagerie.png" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Messagerie</h5>
                    <p class="card-text">Pour communiquer sans être espionné !</p>
                    <a href="https://protege-moi-sur-internet.com/messagerie/" role="button" class="btn">Voir la liste</a>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="https://protege-moi-sur-internet.com/images/moteurderecherche.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Moteur de recherche</h5>
                    <p class="card-text">Pour rechercher des informations sans qu'on le sache !</p>
                    <a href="https://protege-moi-sur-internet.com/moteurderecherche/" role="button" class="btn">Voir la liste</a>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="https://protege-moi-sur-internet.com/images/navigateur.png" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Navigateur</h5>
                    <p class="card-text">Pour naviguer sur Internet en sécurité !</p>
                    <a href="https://protege-moi-sur-internet.com/navigateur/" role="button" class="btn">Voir la liste</a>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="https://protege-moi-sur-internet.com/images/partage.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Partage</h5>
                    <p class="card-text">Pour ne partager ses fichiers qu'avec son destinataire !</p>
                    <a href="https://protege-moi-sur-internet.com/partage/" role="button" class="btn">Voir la liste</a>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="https://protege-moi-sur-internet.com/images/prisedenotes.jpg" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">Prise de notes</h5>
                    <p class="card-text">Pour ne prendre des notes que pour soi !</p>
                    <a href="https://protege-moi-sur-internet.com/prisedenotes/" role="button" class="btn">Voir la liste</a>
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="https://protege-moi-sur-internet.com/images/vpn.png" class="card-img-top" alt="">
                  <div class="card-body">
                    <h5 class="card-title">VPN</h5>
                    <p class="card-text">Pour conserver son anonymat sur Internet !</p>
                    <a href="https://protege-moi-sur-internet.com/vpn/" role="button" class="btn">Voir la liste</a>
                  </div>
                </div>
              </div>
          </div>
    </div>

    <!-- Séparateur -->
    <div class="py-2"></div>

    <!-- Footer -->
    <?php
      require_once 'require/footer.php';
    ?>

  </body>
</html>