<?php require_once('valida_acess.php') ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">      
    <title>Criar Materia</title>
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
            <a class="navbar-brand text-light" href="home.php">Blog de Notícias</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link text-light active" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-light" href="criar_materia.php">Escrever uma Matéria</a>
                  </li>  
                  <li class="nav-item sair">
                    <a href="logoff.php" class="nav-link text-warning">Sair da Conta</a>
                  </li>
              </ul>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid">  
      <div class="row">
        <div class="justify-content-center">
          <div class="card col-9  top-50 start-50 translate-middle mt-1 bi bi-caret-down-fill">
            <div class="card-header">
              Escreva Sua Matéria
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form method="post" action="adiciona_materia.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>...</option>
                        <option>Politica</option>
                        <option>Turismo</option>
                        <option>Moda</option>
                        <option>Estudos</option>
                        <option>Natureza</option>
                      </select>
                    </div>
                    
                    <div class="mb-3">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" type="button" href="home.php">Cancelar</a>
                      </div>
                      <div class="col-6 d-grid justify-content-end">
                        <button class="btn btn-lg btn-info btn-block " type="submit">Publicar Matéria</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>