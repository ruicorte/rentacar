<div class="col-md-12">
	<table class="table table-bordered table-hover table-responsive text-center">
    <thead>
      <tr>
        <th class="">ID</th>
        <th>Fabricante</th>
        <th>Modelo</th>
        <th>Cor</th>
        <th>Matricula</th>
        <th>Disponibilidade</th>
        <th>Acções</th>
      </tr>
    </thead>
    <tbody>

     <?php foreach ($frota as $car): ?>
      <tr>
        <td><?=$car->id?></td>
        <td><?=$car->fabricante?></td>
        <td><?=$car->modelo?></td>
        <td><?=$car->cor?></td>
        <td><?=$car->matricula?></td>
        <td><?=($car->disponibilidade ? '<span class="text-success">disponível</span>' : '<span class="text-danger">ocupado</span>')?></td>
        <td>
          <a href='editBar.php?id=$id'> <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </a>
          <?php if($car->disponibilidade): ?>
          <a href='asMelhores.php?apaga=$id'> <i class='fa fa-trash' aria-hidden='true' style='color:darkred'></i> </a>
        <?php endif; ?>
        </td>
      </tr>
    <?php endforeach; ?>
    <tbody>
<!--      <tfoot>
      <tr>
      <th colspan="7" class="text-right">
          <a href='adiciona_automovel.php'> <i class='fa fa-plus' aria-hidden='true'></i> </a>
        </th>  
      </tr>
    </tfoot>-->
  </table>
  <?php //echo $search_pagination;?>
  <hr>
  <h3>Total Cars: <?php echo $total_rows;?></h3>
  <?php echo "<hr>";?>
</div><!-- /.col-md-12 -->