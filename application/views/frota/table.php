<div class="col-md-12">

  <?php
  if(isset($status)==TRUE) 
  {
    echo '<div class="alert alert-success">
    <strong>Eliminado com Sucesso!</strong></div>';
  }
  ?>
  <table class="table table-bordered table-hover table-responsive">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Fabricante</th>
        <th class="text-center">Modelo</th>
        <th class="text-center">Cor</th>
        <th class="text-center">Matricula</th>
        <th class="text-center">Disponibilidade</th>
        <th class="text-center" colspan="2">Operações</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($frota as $car): ?>
      <tr class="text-center">
        <td><?=$car->id?></td>
        <td><?=$car->fabricante?></td>
        <td><?=$car->modelo?></td>
        <td><?=$car->cor?></td>
        <td><?=strtoupper($car->matricula)?></td>
        <td><?=($car->disponibilidade ? '<span class="text-success">disponível</span>' : '<span class="text-danger">ocupado</span>')?></td>
        <td>
          <!--<div class="btn-group btn-group-xs" class="text-center">-->
            <a href='editBar.php?id=$id' class="btn btn-info">editar <span class='fa fa-edit' aria-hidden='true'></span></a>
        </td>
        <td>
            <?php if($car->disponibilidade): ?>
            <a href='<?=base_url('frota/remover/'.$car->id)?>' class="btn btn-danger">apagar <span class='fa fa-times' aria-hidden='true'></span></a>
            <?php endif; ?>
          <!--</div>-->
        </td>
      </tr>
    <?php endforeach; ?>
    <tbody>
  </table>
  <?php //echo $search_pagination;?>
  <hr>
  <h3>Total Cars: <?php echo $total_rows;?></h3>
  <?php echo "<hr>";?>
</div><!-- /.col-md-12 -->