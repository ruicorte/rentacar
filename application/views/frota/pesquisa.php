<div class="col-xs-12 col-md-9">
  <form role="form" class="form" method="POST">
    <div class="form-group">
      <div class="input-group">       
        <span class="input-group-btn">
          <select name="criterio_search" class="btn btn-warning">
            <option value="modelo">Modelo</option>
            <option value="matricula">Matrícula</option>
            <option value="fabricante">Fabricante</option>
          </select>
        </span>
        <input name="termo_search" type="text" class="form-control" placeholder="Termo de pesquisa">
        <div class="input-group-btn">
          <button name="submit_search" type="submit" class="btn btn-primary">Pesquisa</button>
        </div>
      </div>
    </div>
  </form>  
</div>
<div class="col-xs-12 col-md-3">
  <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#insere_automovel">Inserir Automóvel</button>
</div>

<!-- Modal -->
<div class="modal fade" id="insere_automovel" role="dialog">
  <div class="modal-dialog">   
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inserção de Automóvel</h4>
      </div>
      <div class="modal-body">
        <?=$formulario_automovel?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-successt" data-dismiss="modal">Fechar</button>
      </div>
    </div>
    
  </div>
</div>
  
