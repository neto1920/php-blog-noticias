<?php 
  require_once('valida_acess.php');  

  $materias = [];
  $arquivo = fopen('arquivo.hd', 'r');

  while(!feof($arquivo)) {
    $registro = fgets($arquivo);
    $materias[] = $registro;
  }
  fclose($arquivo);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="styles/index.css">      
      <title>Home</title>
      <style>
        .nav-link {
            font-weight: bold;
        }
      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary font-weight-bold">
      <div class="container-fluid ">
        <a class="navbar-brand text-light" href="#">Blog de Notícias</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link text-light active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a href="criar_materia.php" class="nav-link text-light">Escrever uma Matéria</a>
            </li>  
            <li class="nav-item sair">
              <a href="logoff.php" class="nav-link text-warning">Sair da Conta</a>
            </li>
          </ul>
          <form class="d-flex busca">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
        
      </div>
    </nav>

    <section class="container-fluid">  

      <h2 style="margin-top: 30px;">Últimas Matérias</h2>
      <hr>
      <?php foreach ($materias as $materia){ ?>              
        <?php
          $materia_dados = explode("#", $materia);
          if(count($materia_dados) < 3 ) {
            continue;
          }  
        ?>
      <div class="row card-noticias">         
        <div class="card border-success" style="max-width: 30rem;">
            <div class="card-header bg-transparent border-success"><h4><?= $materia_dados[0] ?></h4></div>
            <div class="card-body text-success">  
              <h5 class="card-title"><?= $materia_dados[1] ?></h5>
              <p class="card-text"><?= $materia_dados[2] ?></p>
            </div>            
            <div class="card-footer bg-transparent border-success">Footer</div>
        </div>
      </div>
      <br>
      <?php } ?>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>