<?php require("controllers/index_controller.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

  <?php if (!isset($_COOKIE["theme"]) || $_COOKIE["theme"] == 1 ) { ?>
    <link rel="stylesheet" href="assets/css/stylelight.css" />
  <?php } elseif ($_COOKIE["theme"] == 2) { ?>
    <link rel="stylesheet" href="assets/css/styledark.css" />
  <?php } elseif ($_COOKIE["theme"] == 3) { ?>
    <link rel="stylesheet" href="assets/css/styleblue.css" />
  <?php } ?>


</head>

<body>


  <!-- Navbar avec le bouton Parametres -->
  <header>
    <div class="col-12 m-0 p-0">
      <?php if (!isset($_COOKIE["theme"]) || $_COOKIE["theme"] == 1) { ?>
        <img src="assets/img/orangeimg.png" class="d-block align-items-left w-100">
      <?php } elseif ($_COOKIE["theme"] == 2) { ?>
        <img src="assets/img/darkheader.png" class="d-block align-items-left w-100">
      <?php } elseif ($_COOKIE["theme"] == 3) { ?>
        <img src="assets/img/blueheader.png" class="d-block align-items-left w-100">
      <?php } ?>

    </div>
  </header>
  <div class="container-fluid d-flex justify-content-start mt-4">
    <div class="row">
      <div class="col-1">
        <?php if (!isset($_COOKIE["theme"]) || $_COOKIE["theme"] == 1 ) { ?>
          <a class="navbar-brand" data-bs-toggle="modal" data-bs-target="#modalParameters">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ff9100" class="bi bi-gear-fill" viewBox="0 0 16 16">
              <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
            </svg>
          </a>
        <?php } elseif ($_COOKIE["theme"] == 2) { ?>
          <a class="navbar-brand" data-bs-toggle="modal" data-bs-target="#modalParameters">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16">
              <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
            </svg>
          </a>
        <?php } elseif ($_COOKIE["theme"] == 3) { ?>
          <a class="navbar-brand" data-bs-toggle="modal" data-bs-target="#modalParameters">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16">
              <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
            </svg>
          </a>
        <?php } ?>
      </div>

    </div>
  </div>
  <div class="col-11 mx-auto text-center">
    <h1 id="titleColor">Cactus ___</h1>
    <h2>Vos actus qui ne manquent pas de piquants</h2>
    <?php
    if (isset($_COOKIE["feed"])) {
      foreach ($feeds as $key => $value) {
        if ($_COOKIE["feed"] == $value) {
    ?>
          <h3 class="mb-5"> Vous êtes dans la section <?= $key ?></h3>
      <?php
        }
      }
    } else {
      ?>
      <h3 class="mb-5"> Vous êtes dans la section <?= array_key_first($feeds) ?></h3>
    <?php
    } ?>
  </div>

  <!-- Modal affichant les paramètres -->
  <div class="modal fade" id="modalParameters" tabindex="-1" aria-labelledby="modalParametersLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content border-0">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Paramètres de personnalisation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="post">
            <div>
              <h5 class="text-center">Choix du thème graphique</h5>
              <div class="text-center my-3">
                <input type="radio" class="form-check-input ms-3" name="theme" id="theme1" value="1" <?php if ((isset($_COOKIE["theme"]) && $_COOKIE["theme"] == "1") || !isset($_COOKIE["theme"])) { ?> checked <?php } ?>>
                <label for="theme1" class="me-2">Thème clair</label>
                <input type="radio" class="form-check-input ms-3" name="theme" id="theme2" value="2" <?php if (isset($_COOKIE["theme"]) && $_COOKIE["theme"] == "2") { ?> checked <?php } ?>>
                <label for="theme1" class="me-2">Thème sombre</label>
                <input type="radio" class="form-check-input ms-3" name="theme" id="theme3" value="3" <?php if (isset($_COOKIE["theme"]) && $_COOKIE["theme"] == "3") { ?> checked <?php } ?>>
                <label for="theme1" class="me-2">Thème bleu</label>
              </div>
            </div>
            <div>
              <h5 class="text-center">Choix des flux RSS</h5><!-- Creer un input check pour chaque lien dans le tableau Feeds -->
              <div>
                <?php
                foreach ($feeds as $key => $value) {
                  if ($key == array_key_first($feeds)) {
                ?>
                    <input type="radio" class="form-check-input" id="<?= $key ?>" name="feed" value="<?= $value ?>" <?php if ((isset($_COOKIE["feed"]) && $_COOKIE["feed"] == $value) || !isset($_COOKIE["feed"])) { ?> checked <?php } ?>>
                    <label for="<?= $key ?>"> <?= $key ?></label><br>
                  <?php
                  } else {
                  ?>
                    <input type="radio" class="form-check-input" id="<?= $key ?>" name="feed" value="<?= $value ?>" <?php if (isset($_COOKIE["feed"]) && $_COOKIE["feed"] == $value) { ?> checked <?php } ?>>
                    <label for="<?= $key ?>"> <?= $key ?></label><br>
                <?php
                  }
                } ?>
              </div>
            </div>

            <div>
              <h5 class="text-center">Nombre d'articles affichés</h5>
              <div class="text-center my-3">
                <input type="radio" class="form-check-input ms-3" name="nbArticle" id="article5" value="5" <?php if ((isset($_COOKIE["nbArticle"]) && $_COOKIE["nbArticle"] == "5") || !isset($_COOKIE["nbArticle"])) { ?> checked <?php } ?>>
                <label for="article5" class="me-2">5 articles</label>
                <input type="radio" class="form-check-input ms-3" name="nbArticle" id="article10" value="10" <?php if (isset($_COOKIE["nbArticle"]) && $_COOKIE["nbArticle"] == "10") { ?> checked <?php } ?>>
                <label for="article10" class="me-2">10 articles</label>
                <input type="radio" class="form-check-input ms-3" name="nbArticle" id="articleAll" value="All" <?php if (isset($_COOKIE["nbArticle"]) && $_COOKIE["nbArticle"] == "All") { ?> checked <?php } ?>>
                <label for="articleAll" class="me-2">Tous les articles</label>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn border-0 btn-light" data-bs-dismiss="modal">Fermer</button>
              <button type="submit" class="btn border-0 btn-light" id="submit" name="submit" href="">Valider</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">


    <?php
    //Condition de création de l'objet BlogFeed en fonction de l'existence d'un cookie
    if (isset($_COOKIE["feed"])) {
      $testFeed = new BlogFeed($_COOKIE["feed"]);
    } else {
      $testFeed = new BlogFeed($feeds[array_key_first($feeds)]);
    }
    //Teste le nombre l'article que l'utilisateur souhaite afficher
    if (isset($_COOKIE["nbArticle"]) && intval($_COOKIE["nbArticle"])) {
      $nbArt = intval($_COOKIE["nbArticle"]);
      for ($i = 0; $i < $nbArt; $i++) {
    ?>
        <div class="row justify-content-center">

          <div class="col-1 mt-4 colArticle p-4"><i class="fas fa-square align-middle" style="color:<?php if (isset($_COOKIE["feed"])) {
                                                                                                      changeIconColor($_COOKIE["feed"], $feeds);
                                                                                                    } else {
                                                                                                      changeIconColor($feeds["Smartphones"], $feeds);
                                                                                                    } ?>;"></i></div>
          <div id="boldfont" class="col-8 col-lg-6 colArticle mt-4 p-4"><?= $testFeed->posts[$i]->title ?></div>
          <div class="col-lg-2 d-none mt-4 d-lg-block colArticle p-4" style="text-align: center"><?= $testFeed->posts[$i]->date ?></div>
          <div class="col-1 colArticle mt-4 p-4">
            <button type="button" class="btn border-0 btn-light" data-bs-toggle="collapse" href="#collapseText<?= $i ?>" role="button" aria-expanded="false" aria-controls="collapseText<?= $i ?>" style="float: right;">
              <i class="fas fa-plus mx-1"></i>
            </button>
          </div>

          <div class="col-10 mx-auto">
            <div class="collapse" id="collapseText<?= $i ?>">
              <div class="row my-0 p-0 ">
                <div class="card card-body">
                  <div class="col-6 mx-auto">
                    <img src="<?= $testFeed->posts[$i]->enclosure ?>" style="max-width : 100%">
                  </div>
                  <div class="col-12 p-4 text-center">
                    <?= $testFeed->posts[$i]->summary ?>
                  </div>
                  <div class="col-12 p-4 text-center">
                    <a type="button" href="<?= $testFeed->posts[$i]->link ?>">Lire l'article sur le site ↗</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
    } else {
      $nbPost = 0;
      foreach ($testFeed->posts as $post) {
      ?>
        <div class="row justify-content-center">

          <div class="col-1 colArticle mt-4 p-4"><i class="fas fa-square align-middle " style="color:<?php if (isset($_COOKIE["feed"])) {
                                                                                                        changeIconColor($_COOKIE["feed"], $feeds);
                                                                                                      } else {
                                                                                                        changeIconColor($feeds["Smartphones"], $feeds);
                                                                                                      } ?>;"></i></div>
          <div id="boldfont" class="col-8 col-lg-6 colArticle mt-4 p-4  "><?= $post->title ?></div>
          <div class="col-md-2 mt-4 d-none d-lg-block colArticle p-4" style="text-align: center;"><?= $post->date ?></div>
          <div class="col-1 colArticle mt-4 p-4">
            <button type="button" class="btn border-0 btn-light mt-3 mt-md-0" data-bs-toggle="collapse" href="#collapseText<?= $nbPost ?>" role="button" aria-expanded="false" aria-controls="collapseText<?= $nbPost ?>" style="float: right;">
              <i class="fas fa-plus mx-1"></i>
            </button>
          </div>

          <div class="col-10 mx-auto">
            <div class="collapse" id="collapseText<?= $nbPost ?>">
              <div class="row my-0 p-0 ">
                <div class="card card-body">
                  <div class="col-6 mx-auto">
                    <img src="<?= $testFeed->posts[$nbPost]->enclosure ?>" style="max-width : 100%">
                  </div>
                  <div class="col-12 p-4 text-center">
                    <?= $testFeed->posts[$nbPost]->summary ?>
                  </div>
                  <div class="col-12 p-4 text-center">
                    <a type="button" href="<?= $testFeed->posts[$nbPost]->link ?>">Lire l'article sur le site ↗</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
        $nbPost++;
      }
    }
    ?>

  </div>

  <footer class="mt-5 p-3 text-center">
    <p>© Nora Charef & Raphael Debraize | La Manu 2020 Le havre | <a data-bs-toggle="collapse" href="#collapseMentions" role="button" aria-expanded="false"
                                                                    aria-controls="collapseMentions" id="linkMention">
                                                                    Mentions légales
                                                                  </a>
      </p>
      <div class="collapse" id="collapseMentions">
				<div class="card card-body">
          <p>
          Conformément aux dispositions des articles 6-III-1 de la loi n°2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, vous trouverez ci-dessous l’ensemble des informations légales à propos du présent site Internet.

PRÉSENTATION DU SITE
Nom de la société : Cactus Tél 1 :06 37 11 69 16 Tél 2 :06 12 85 63 67 E-mail pour les professionnels : nora6272@hotmail.fr E-mail pour les particuliers :nora6272@hotmail.fr

A. HÉBERGEMENT

Le présent site est hébergé par la société : Local host

B. RÉALISATION DU SITE INTERNET

Le créateur du site est : Raphaël & Nora Le responsable de la publication est : Nora Contactez le responsable de la publication : 06 12 85 63 67
Le responsable de la publication est une personne physique.

C. PROTECTION DES DONNÉES PERSONNELLES

Conformément à la loi Informatique et Liberté du 6 janvier 1978 (art.34), vous disposez d’un droit d’accès, de rectification ou de suppression concernant les données personnelles que nous pourrions être amenés à recueillir (données renseignées par vous)

CONDITIONS ET RÈGLES GÉNÉRALES D’UTILISATION DU SITE INTERNET ET DES SERVICES PROPOSÉS

En utilisant le présent site internet, vous reconnaissez avoir lu, compris et accepté les présentes conditions d’utilisation du site et vous vous engagez à les respecter en intégralité et sans restriction.

A. SÉCURITÉ

Les mentions légales peuvent être modifiées à tout moment, sans préavis et s’imposent à l’utilisateur sans réserve. Le site se réserve aussi le droit de céder, transférer, ce sans préavis les droits et/ou obligations des présences CGU et mentions légales.

DESCRIPTION DES SERVICES FOURNIS

Le site a pour objet de fournir une information concernant l’ensemble des activités de la société. Toutes les informations proposées sur le site sont données à titre indicatif, sont non exhaustives et sont susceptibles d’évoluer. Elles sont données sous réserve de modifications ayant été apportées depuis leur mise en ligne.

LIENS

Le présent site est susceptible de contenir des liens vers d’autres sites internet, ou d’autres ressources en ligne. Ces liens sont proposés à simple but de complément d’information. L’activation de ces liens n’a aucun caractère obligatoire, et l’utilisateur reconnaît les activer à ses propres risques et périls. Il vous appartient en outre de prendre connaissance des conditions d’utilisation particulières relatives à l’utilisation des ces autres sites internet ou ressources en ligne.

DROIT APPLICABLE ET ATTRIBUTION DE JURIDICTION

Tout litige en relation avec l’utilisation du site est soumis au droit français. L’utilisateur ainsi que le site acceptent de se soumettre à la compétence exclusive des tribunaux Français en cas de litige.

PROPRIÉTÉ INTELLECTUELLE

L’éditeur du site détient tous les droits de propriété, notamment intellectuellement, sur le présent site et les éléments qu’il contient (textes, photos, éléments graphiques et multimédia…). Ceci comprend les droits d’utilisation et de reproduction. En conséquence, toute reproduction partielle ou totale du présent du site et des éléments qu’il contient est strictement interdite sans autorisation écrite de l’éditeur du site et constituerait une contrefaçon sanctionnée par le Code de la Propriété Intellectuelle.

Les marques, logos, textes et tous autres signes distinctifs contenus sur ce site sont la propriété de l’éditeur du site, ou font l’objet d’une autorisation d’utilisation de la part de leurs propriétaires respectifs. Aucun droit ou licence sur l’un de ces éléments ne sera concédé sans l’autorisation écrite de l’éditeur du site ou du tiers détendeur des droits. Toutes reproduction partielle ou totale de ces marques, logos et autres signes distinctifs effectuée à partir des éléments du site dans notre autorisation expresse est donc strictement prohibée.
          </p>
        </div>
      </div>
  </footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>