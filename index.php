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
<?php include("controllers/index_controller.php");?> 
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
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Paramètres de personnalisation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div> 
            <h5>Choix du thème graphique</h5>
            <input type="radio" class="form-check-input" name="theme" id="theme1" value="theme1" checked><label for="theme1">Thème 1</label><br>
            <input type="radio" class="form-check-input" name="theme" id="theme2" value="theme2"><label for="theme1">Thème 2</label><br>
            <input type="radio" class="form-check-input" name="theme" id="theme3" value="theme3"><label for="theme1">Thème 3</label><br>
          </div>
          
          <div>
            <h5>Choix des flux RSS</h5><!-- Creer un input check pour chaque lien dans le tableau Feeds -->
            <div>
            <?php foreach ($feeds as $key => $value)
            {?>
              <input type="checkbox" class="form-check-input" id="<?= $key ?>" name="<?= $key ?>" value="<?= $value ?>"><label for="<?= $key ?>"> <?= $key ?></label><br>
              <?php }?>
            </div>
          </div>

          <div>
            <h5>Nombre d'articles affichés</h5>
            <input type="radio" class="form-check-input" name="nbArticle" id="article5" value="5" checked><label for="article5">5</label><br>
            <input type="radio" class="form-check-input" name="nbArticle" id="article10" value="10" checked><label for="article10">10</label><br>
            <input type="radio" class="form-check-input" name="nbArticle" id="articleAll" value="All" checked><label for="articleAll">Tous les articles</label><br>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" href="">Save changes</button>
      </div>
    </div>
  </div>
</div>



<div class="row justify-content-center">
    <!-- Creer une col + card à chaque article du tableau Posts -->
    <div class="col-9 col-md-3 border m-2">
      <h1 style="text-align:center">test</h1>
      <h2 class="fs-5" style="text-align:center">08/02/2021</h2>
      <img src="https://img.bfmtv.com/i/0/0/fd9/f75d839f7df97b9fa570c70c44b6b.jpg" style="max-width : 100%">
      <div class="col-12 border my-2">
        <div class="collapse" id="collapseText1">
          <div class="card card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary" data-bs-toggle="collapse" href="#collapseText1" role="button" aria-expanded="false" aria-controls="collapseText1" style="float: right;">
        <i class="fas fa-plus mx-1"></i>Plus d'infos
      </button>
    </div>
    <div class="col-9 col-md-3 border m-2">
      <h1 style="text-align: center;">test</h1>
      <h2 class="fs-5" style="text-align:center">08/02/2021</h2>
      <img src="https://img.bfmtv.com/i/0/0/fd9/f75d839f7df97b9fa570c70c44b6b.jpg" style="max-width : 100%">
      <div class="col-12 border my-2">
        <div class="collapse" id="collapseText">
          <div class="card card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary" data-bs-toggle="collapse" href="#collapseText" role="button" aria-expanded="false" aria-controls="collapseText" style="float: right;">
        <i class="fas fa-plus mx-1"></i>Plus d'infos
      </button>
    </div>
    <div class="col-9 col-md-3 border m-2">
      <h1 style="text-align: center;">test</h1>
      <h2 class="fs-5" style="text-align:center">08/02/2021</h2>
      <img src="https://img.bfmtv.com/i/0/0/fd9/f75d839f7df97b9fa570c70c44b6b.jpg" style="max-width : 100%">
      <div class="col-12 border my-2">
        <div class="collapse" id="collapseText2">
          <div class="card card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-primary" data-bs-toggle="collapse" href="#collapseText2" role="button" aria-expanded="false" aria-controls="collapseText2" style="float: right;">
        <i class="fas fa-plus mx-1"></i>Plus d'infos
      </button>
    </div>
    
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>