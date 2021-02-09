<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <?php include("controllers/index_controller.php"); ?>
  <!-- Navbar avec le bouton Parametres -->
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" data-bs-toggle="modal" data-bs-target="#modalParameters">
        <i class="fas fa-cog"></i>
      </a>
    </div>
  </nav>
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
              <h5>Choix du thème graphique</h5>
              <input type="radio" class="form-check-input" name="theme" id="theme1" value="1" checked><label for="theme1">Thème 1</label><br>
              <input type="radio" class="form-check-input" name="theme" id="theme2" value="2"><label for="theme1">Thème 2</label><br>
              <input type="radio" class="form-check-input" name="theme" id="theme3" value="3"><label for="theme1">Thème 3</label><br>
            </div>
            <div>
              <h5>Choix des flux RSS</h5><!-- Creer un input check pour chaque lien dans le tableau Feeds -->
              <div>
                <?php foreach ($feeds as $key => $value) { ?>
                  <input type="radio" class="form-check-input" id="<?= $key ?>" name="feed" value="<?= $value ?>"><label for="<?= $key ?>"> <?= $key ?></label><br>
                <?php } ?>
              </div>
            </div>

            <div>
              <h5>Nombre d'articles affichés</h5>
              <input type="radio" class="form-check-input" name="nbArticle" id="article5" value="5" checked><label for="article5">5</label><br>
              <input type="radio" class="form-check-input" name="nbArticle" id="article10" value="10"><label for="article10">10</label><br>
              <input type="radio" class="form-check-input" name="nbArticle" id="articleAll" value="All"><label for="articleAll">Tous les articles</label><br>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn border-0 btn-light" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn border-0 btn-light" id="submit" name="submit" href="">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <?php
    var_dump($_POST["theme"]);
    var_dump($_POST["nbArticle"]);
    $testFeed = new BlogFeed($_POST["feed"]);

    if (isset($_POST["nbArticle"]) && intval($_POST["nbArticle"])) {
      $nbArt = intval($_POST["nbArticle"]);
      for ($i = 0; $i < $nbArt; $i++) {
    ?>
        <div class="row justify-content-center">
          <p>
          <div class="col-1 colArticle p-4"><i class="fas fa-square align-middle"></i></div>
          <div class="col-8 col-lg-6 colArticle p-4 fs-4"><?= $testFeed->posts[$i]->title ?></div>
          <div class="col-lg-2 d-none d-lg-block colArticle p-4" style="text-align: center"><?= $testFeed->posts[$i]->date ?></div>
          <div class="col-1 colArticle p-4">
            <button type="button" class="btn border-0 btn-light" data-bs-toggle="collapse" href="#collapseText<?= $i ?>" role="button" aria-expanded="false" aria-controls="collapseText<?= $i ?>" style="float: right;">
              <i class="fas fa-plus mx-1"></i>
            </button>
          </div>
          </p>
          <div class="col-10">
            <div class="collapse" id="collapseText<?= $i ?>">
              <div class="row">
                <div class="card card-body">
                  <!--<div class="col-4">
                            <img src="https://img.bfmtv.com/i/0/0/fd9/f75d839f7df97b9fa570c70c44b6b.jpg" style="max-width : 100%">
                        </div>-->
                  <div class="col-7 colArticle p-4">
                    <?= $testFeed->posts[$i]->summary ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
    } else {
      foreach ($testFeed->posts as $post) {
      ?>
        <div class="row justify-content-center">
          <p>
          <div class="col-1 colArticle p-4"><i class="fas fa-square align-middle "></i></div>
          <div class="col-8 col-lg-6 colArticle p-4 fs-4"><?= $post->title ?></div>
          <div class="col-md-2 d-none d-lg-block colArticle p-4" style="text-align: center;"><?= $post->date ?></div>
          <div class="col-1 colArticle p-4">
            <button type="button" class="btn border-0 btn-light mt-3 mt-md-0" data-bs-toggle="collapse" href="#collapseText2" role="button" aria-expanded="false" aria-controls="collapseText2" style="float: right;">
              <i class="fas fa-plus mx-1"></i>
            </button>
          </div>
          </p>
          <div class="col-10 ">
            <div class="collapse" id="collapseText2">
              <div class="row">
                <div class="card card-body colArticle">
                  <!--<div class="col-4">
                              <img src="https://img.bfmtv.com/i/0/0/fd9/f75d839f7df97b9fa570c70c44b6b.jpg" style="max-width : 100%">
                          </div>-->
                  <div class="col-7 p-4">
                    <?= $post->summary ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>

  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>