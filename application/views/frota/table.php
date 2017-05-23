	<div class="col-md-12">
		<table class="table table-bordered table-hover table-responsive" style="width:100%; border: 1px solid black; color:black">
     <thead>
      <tr>
        <th>ID</th>
        <th>Fabricante</th>
        <th>Modelo</th>
        <th>Cor</th>
        <th>Matricula</th>
        <th>Disponibilidade</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

     <?php foreach ($frota as $car): ?>
      <tr>
        <th><?=$car->id?></th>
        <th><?=$car->fabricante?></th>
        <th><?=$car->modelo?></th>
        <th><?=$car->cor?></th>
        <th><?=$car->matricula?></th>
        <th><?=$car->disponibilidade?></th>
        <th>
          <a href='editBar.php?id=$id'> <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </a>
          <a href='asMelhores.php?apaga=$id'> <i class='fa fa-trash' aria-hidden='true' style='color:darkred'></i> </a>
        </th>
      </tr>
    <?php endforeach; ?>
    <tbody>
      <tfoot>
        <tr>
        <th colspan="7" class="text-right">
            <a href='adiciona_automovel.php'> <i class='fa fa-plus' aria-hidden='true'></i> </a>
          </th>  
        </tr>
      </tfoot>
    </table>
    <?php //echo $search_pagination;?>
    <hr>
    <h3>Total Cars: <?php echo $total_rows;?></h3>
    <?php echo "<hr>";?>
   </div><!-- /.col-md-12 -->