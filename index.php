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
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <!-- Navbar avec le bouton Parametres -->
  <header>
  <div class="col-12 m-0 p-0">
                <img src="assets/img/blueheader.png" class="d-block align-items-left w-100">
            </div>
  </header> 
  <div class="container-fluid d-flex justify-content-start mt-4">
      <div class="row">
        <a class="navbar-brand" data-bs-toggle="modal" data-bs-target="#modalParameters">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-gear-fill" viewBox="0 0 16 16">
            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
          </svg>
        </a>
      </div>
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
              <h5>Choix du thème graphique</h5>
              <input type="radio" class="form-check-input" name="theme" id="theme1" value="1" <?php if((isset($_COOKIE["theme"]) && $_COOKIE["theme"] == "1") || !isset($_COOKIE["theme"])){ ?> checked <?php } ?>>
                <label for="theme1">Thème 1</label><br>
              <input type="radio" class="form-check-input" name="theme" id="theme2" value="2" <?php if(isset($_COOKIE["theme"]) && $_COOKIE["theme"] == "2" ){ ?> checked <?php } ?>>
                <label for="theme1">Thème 2</label><br>
              <input type="radio" class="form-check-input" name="theme" id="theme3" value="3" <?php if(isset($_COOKIE["theme"]) && $_COOKIE["theme"] == "3" ){ ?> checked <?php } ?>>
                <label for="theme1">Thème 3</label><br>
            </div>
            <div>
              <h5>Choix des flux RSS</h5><!-- Creer un input check pour chaque lien dans le tableau Feeds -->
              <div>
                <?php 
                foreach ($feeds as $key => $value)
                { 
                  if($key == array_key_first($feeds))
                  {
                    ?>
                    <input type="radio" class="form-check-input" id="<?= $key ?>" name="feed" value="<?= $value ?>" <?php if((isset($_COOKIE["feed"]) && $_COOKIE["feed"] == $value) || !isset($_COOKIE["feed"])){ ?> checked <?php } ?>>
                      <label for="<?= $key ?>"> <?= $key ?></label><br>
                    <?php
                  }
                  else
                  {
                    ?>
                    <input type="radio" class="form-check-input" id="<?= $key ?>" name="feed" value="<?= $value ?>" <?php if(isset($_COOKIE["feed"]) && $_COOKIE["feed"] == $value){ ?> checked <?php } ?>>
                      <label for="<?= $key ?>"> <?= $key ?></label><br>
                    <?php 
                  }                                  
                } ?>
              </div>
            </div>

            <div>
              <h5>Nombre d'articles affichés</h5>
              <input type="radio" class="form-check-input" name="nbArticle" id="article5" value="5" <?php if((isset($_COOKIE["nbArticle"]) && $_COOKIE["nbArticle"] == "5") || !isset($_COOKIE["nbArticle"])){ ?> checked <?php } ?>>
                <label for="article5">5</label><br>
              <input type="radio" class="form-check-input" name="nbArticle" id="article10" value="10" <?php if(isset($_COOKIE["nbArticle"]) && $_COOKIE["nbArticle"] == "10"){ ?> checked <?php } ?>>
                <label for="article10">10</label><br>
              <input type="radio" class="form-check-input" name="nbArticle" id="articleAll" value="All" <?php if(isset($_COOKIE["nbArticle"]) && $_COOKIE["nbArticle"] == "All"){ ?> checked <?php } ?>>
                <label for="articleAll">Tous les articles</label><br>
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
    if(isset($_COOKIE["feed"]))
    {
      foreach($feeds as $key=>$value)
      {
        if($_COOKIE["feed"] == $value)
        {
          ?>
          <h3><?= $key ?></h3>
          <?php
        }
      }
    }
    else
    {
      ?>
      <h3><?= array_key_first($feeds) ?></h3>
      <?php
    }

    if(isset($_COOKIE["feed"]))
    {
      $testFeed = new BlogFeed($_COOKIE["feed"]);
    }
    else
    {
      $testFeed = new BlogFeed($feeds[array_key_first($feeds)]);
    }
    if (isset($_COOKIE["nbArticle"]) && intval($_COOKIE["nbArticle"])) {
      $nbArt = intval($_COOKIE["nbArticle"]);
      for ($i = 0; $i < $nbArt; $i++) {
    ?>
        <div class="row justify-content-center">
          <p>
          <div class="col-1 colArticle p-4"><i class="fas fa-square align-middle" style="color:<?php if(isset($_COOKIE["feed"])){changeIconColor($_COOKIE["feed"], $feeds);}else{changeIconColor($feeds["Smartphones"], $feeds);} ?>;"></i></div>
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
                  <div class="col-4">
                            <img src="<?= $testFeed->posts[$i]->enclosure ?>" style="max-width : 100%">
                        </div>
                  <div class="col-6 p-4">
                    <?= $testFeed->posts[$i]->summary ?>
                  </div>
                  <div class="col-2 p-4">
                    <a type="button" href="<?= $testFeed->posts[$i]->link ?>">Aller à</a>
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
          <div class="col-1 colArticle p-4"><i class="fas fa-square align-middle " style="color:<?php if(isset($_COOKIE["feed"])){changeIconColor($_COOKIE["feed"], $feeds);}else{changeIconColor($feeds["Smartphones"], $feeds);} ?>;"></i></div>
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
                  <div class="col-4">
                              <img src="<?= $post->enclosure ?>" style="max-width : 100%">
                          </div>
                  <div class="col-6 p-4">
                    <?= $post->summary ?>
                  </div>
                  <div class="col-2 p-4">
                    <a type="button" href="<?= $post->link; ?>">Aller à</a>
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