<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="fas fa-cog"></i>
      </a>
    </div>
  </nav>

<?php include("controllers/index_controller.php");?> 

<div class="row justify-content-center">
    <div class="col-10 col-md-5 border m-2 ">
      <h1 style="text-align:center">test</h1>
      <h2 class="fs-5" style="text-align:center">08/02/2021</h2>
      <img src="https://img.bfmtv.com/i/0/0/fd9/f75d839f7df97b9fa570c70c44b6b.jpg" style="max-width : 100%">
      <div class="col-12 border m-2">
        <div class="collapse" id="collapseText">
          <div class="card card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="collapse" href="#collapseText" role="button" aria-expanded="false" aria-controls="collapseText" style="float: right;">
        <i class="fas fa-plus mx-1"></i>Plus d'infos
      </button>
      </div>
    </div>
    <div class="col-md-5 border m-2">
      <h1 style="text-align: center;">test</h1>
      <h2 class="fs-5" style="text-align:center">08/02/2021</h2>
      <img src="https://img.bfmtv.com/i/0/0/fd9/f75d839f7df97b9fa570c70c44b6b.jpg" style="max-width : 100%">
      <button type="button" class="btn btn-primary" data-bs-toggle="collapse" href="#collapseText" role="button" aria-expanded="false" aria-controls="collapseText" style="float: right;">
        <i class="fas fa-plus mx-1"></i>Plus d'infos
      </button>
      <div class="collapse" id="collapseText">
        <div class="card card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        </div>
      </div>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>