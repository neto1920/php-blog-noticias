<html>
    <head>
        <meta charset="utf-8" />
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/index.css">        
    </head>
  <body>
    <div class="container">    
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <?php 
                  if(isset($_GET['login']) && $_GET['login'] == 'errologin') { ?>
                    <div class="text-danger">
                      Usuário ou senha inválida
                    </div>
                <?php } ?>

                <?php 
                  if(isset($_GET['login']) && $_GET['login'] == 'errosessao') {                 
                ?>
                <div class="text-danger">
                  Login nescessário
                </div>
                <?php } ?>
                
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>