
<div class="col-xs-10">
  <form role="form" class="form" method="POST">
    <div class="form-group">
      <div class="input-group">       
        <span class="input-group-btn">
          <select name="criterio_search" class="btn btn-default">
            <option value="modelo">Modelo</option>
            <option value="matricula">Matrícula</option>
            <option value="fabricante">Fabricante</option>
          </select>
        </span>
        <input name="termo_search" type="text" class="form-control" placeholder="Termo de pesquisa">
        <div class="input-group-btn">
          <button name="submit_search" type="submit" class="btn btn-primary" >Pesquisa</button>
        </div>
      </div>
    </div>
  </form>  
</div>
<div class="col-xs-2">
  <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#insere_automovel">inserir automóvel</button>
</div>

<!-- Modal -->
<div class="modal fade" id="insere_automovel" role="dialog">
  <div class="modal-dialog">   
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inserção de automóvel</h4>
      </div>
      <div class="modal-body">
        <p>aqui vai o formulário</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>
  
