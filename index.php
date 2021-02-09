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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right;">
            <i class="fas fa-plus mx-1"></i>Plus d'infos
        </button>
    </div>
    <div class="col-md-5 border m-2">
        <h1 style="text-align: center;">test</h1>
        <h2 class="fs-5" style="text-align:center">08/02/2021</h2>
        <img src="https://img.bfmtv.com/i/0/0/fd9/f75d839f7df97b9fa570c70c44b6b.jpg" style="max-width : 100%">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right;">
            <i class="fas fa-plus mx-1"></i>Plus d'infos
        </button>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title fs-1" id="exampleModalLabel">Titre de l'article</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h5>08/02/2021</h5>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        <p><?php var_dump($feeds);?></p>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>        
</body>
</html>