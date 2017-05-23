	<div class=" col-md-12">

		<table class="table table-bordered table-hover " style=" width:100%; border: 1px solid black;color:black" >
      <thead>
        <?php echo ("<tr><th>ID</th><th>Fabricante</th><th>Modelo</th><th>Cor</th><th>Matricula</th><th>Disponibilidade </th><th>Actions </th></tr>");?>
      </thead>
      <tbody>

      <?php
        foreach ($frota as $car) {
          $id              = $car->id; 
          $disponibilidade = $car->disponibilidade; 
          $matricula       = $car->matricula; 
          $cor             = $car->cor; 
          $modelo          = $car->modelo; 
          $fabricante      = $car->fabricante; 
      // e necessario corrigir os links de edicao e de eleminar os automoveis
          echo ("<tr><th>$id</th><th>$fabricante</th><th>$modelo</th><th> $cor</th><th>$matricula</th><th>$disponibilidade</th><th><a href='editBar.php?id=$id'> <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </a><a href='asMelhores.php?apaga=$id'> <i class='fa fa-times' aria-hidden='true' style='color:darkred'></i> </a></th></tr>");}?>
          <?php echo ("<tr><th></th><th></th><th></th><th></th><th><a href='adicionaBar.php'> <i class='fa fa-plus' aria-hidden='true'></i> </a> </th></tr>");
      ?>
      <tbody>
    </table>
      <?php //echo $search_pagination;?>
    <hr>
      <h3>Total Cars: <?php echo $total_rows; ?></h3>
        <?php echo "<hr>";?>
  </div>