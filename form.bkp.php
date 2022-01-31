<div class="container-fluid">  
      <div class="row">
        <div class="justify-content-center">
          <div class="card col-9 position-absolute top-50 start-50 translate-middle ">
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
                      <div class=" col-6 d-grid justify-content-end">
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