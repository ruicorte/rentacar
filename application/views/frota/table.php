	<div class=" col-md-12">

		<table class="table table-bordered table-hover " style=" width:100%; border: 1px solid black;color:black" >
     <thead>
      <?php echo ("<tr><th>Fabricante</th><th>Modelo</th><th>Cor</th><th>Matricula</th><th>Disponibilidade </th><th>Actions </th></tr>");?>
    </thead>
    <tbody>

     <?php foreach ($frota as $car) {
      $titulo = $car->disponibilidade; 
      $nome = $car->matricula; 
      $data_publicacao = $car->cor; 
      $data_publicacao = $car->modelo; 
      $data_publicacao = $car->fabricante; 
      echo ("<tr><th>$car->fabricante</th><th>$car->modelo</th><th> $car->cor</th><th>$car->matricula</th><th>$car->disponibilidade</th><th><a href='editBar.php?id=$car->$id'> <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </a><a href='asMelhores.php?apaga=$id'> <i class='fa fa-times' aria-hidden='true' style='color:darkred'></i> </a></th></tr>");}?>
<?php echo ("<tr><th></th><th></th><th></th><th></th><th><a href='adicionaBar.php'> <i class='fa fa-plus' aria-hidden='true'></i> </a> </th></tr>");?>
      <tbody>
      </table>
       <?php echo $search_pagination;?>
      <hr>
      <h3>total books: <?php echo $total_rows;?></h3>
      <?php echo "<hr>";
      ?>
   </div><!-- /.col-md-12 -->