<?php 
  require_once('valida_acess.php');
  $exibe_materias = [];
  $materias = fopen('materias.hd', 'r');

  while(!feof($materias)) {
    $e = fgets($materias);
    $exibe_materias[] = $e;
  }
  fclose($materias);
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
          .bar {
              background-color: #404079;
              padding: 30px  0;
              height: 40px;
          }      
          .nav-link {
              margin-right: 20px;
              font-weight: bold;
          }

      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
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
              <a class="nav-link text-light" href="criar_materia.php">Escrever uma Matéria</a>
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
      
      <div class="row">           
     
      <div class="card border-success mb-3 " style="max-width: 30rem;">
        <?php foreach ($materias as $materia){ ?>
        <?php 
        $e = explode('#', $materia);
          if(count($e) < 3) {
            continue;
          }
        ?>
        <?php } ?>
      
        <div class="card-header bg-transparent border-success"><?php $e[0] ?>Header</div>
        <div class="card-body text-success">
          <h5 class="card-title"><?php $e[1] ?></h5>
          <p class="card-text"><?php $e[2] ?> Descrição</p>
        </div>
        <div class="card-footer bg-transparent border-success">Footer</div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>