<div class="container">
  <legend>Emails recebidos</legend>
  <div class="row">
    <div class="col-md-12">
      <?php
        if( isset( $_SESSION['emailstatus'] )) {
            echo   $_SESSION['emailstatus'];
            unset( $_SESSION['emailstatus'] );
            }
      ?>
      <table class="text-center table table-bordered table-hover table-responsive">
        <thead class="text-center">
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Mensagem</th>
            <th>Data</th>
            <th>Opcões</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($this->session->email as $mensagem): ?>
          <tr>
            <td><?=$mensagem->nome?></td>
            <td><?=$mensagem->email?></td>
            <td><?=$mensagem->mensagem?></td>
            <td>
              <?php 
                $data = new DateTime($mensagem->date);
                $data = $data->format('Y-m-d H:i:s');
                echo $data;
              ?>
            </td>
            <td>
              <form  style="display:inline" method="post" action="<?=base_url('frota/listarEmail/tableEmail?id='.$mensagem->id)?>">
                <button id="submit_eliminar" name="submit_eliminar" value="TRUE" class="btn btn-danger">Apagar <span class='fa fa-times' aria-hidden='true'></span></button>
              </form> 
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div><!-- /.col-md-12 -->
  </div>
  <div class="row">
    <div class="col-xs-12 text-center">
      <?php echo $search_pagination;?>
    </div>
  </div>
</div>