<div class="container<?=(($container_fluid ?? false) ? '-fluid' : ' topo')?>">
	<?php if(!($container_fluid ?? false)):?>
	<legend>Inserção de automóvel</legend>
	<?php endif;?>
	<div class="row">
		<div class="col-xs-12">
			<form class="form-horizontal" method="POST">
				<fieldset>
					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="fabricante_id">Fabricante</label>
						<div class="col-md-8">
							<select id="fabricante_id" name="fabricante_id" class="form-control" onchange="actualiza_modelos()">
							<?php foreach($fabricantes as $fab):?>
								<option value="<?=$fab['id']?>"><?=$fab['nome']?></option>
							<?php endforeach; ?>
							</select>
						</div>
					</div>
					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="modelo_id">Modelo</label>
						<div class="col-md-8">
							<select id="modelo_id" name="modelo_id" class="form-control">
							<?php foreach($modelos as $mod):?>
								<option value="<?=$mod['id']?>"><?=$mod['nome']?></option>
							<?php endforeach; ?>
							</select>
						</div>
					</div>
					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cor_id">Cor</label>
						<div class="col-md-8">
							<select id="cor_id" name="cor_id" class="form-control">
							<?php foreach($cores as $cor):?>
								<option value="<?=$cor['id']?>"><?=$cor['nome']?></option>
							<?php endforeach; ?>
							</select>
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="matricula">Matrícula</label>  
						<div class="col-md-8">
							<input id="matricula" name="matricula" type="text" placeholder="XX-XX-XX" class="form-control input-md" required="">
						</div>
					</div>
					<!-- Multiple Radios (inline) -->
					<div class="form-group">
						<div class="col-md-offset-4 col-md-8"> 
							<label class="radio-inline" for="radios-0">
								<input type="radio" name="radios" id="radios-0" value="1" checked="checked">
								Disponível
							</label> 
							&emsp;
						<!--</div>
						<div class="col-md-4"> -->
							<label class="radio-inline" for="radios-1">
								<input type="radio" name="radios" id="radios-1" value="2">
								Ocupado
							</label> 
						</div>
					</div>
					<!-- Button (Double) -->
					<div class="form-group">
						<div class="col-md-offset-4 col-md-4">
							<button id="cancel_button" name="cancel_button" class="btn btn-block btn-warning">Cancelar</button>
						</div>
						<div class="col-md-4">
							<button id="submit_automovel" name="submit_automovel" class="btn btn-block btn-primary">Guardar</button>
						</div>
					</div>

				</fieldset>
			</form>
		</div>
	</div>
</div>
<script>
//$fabricantes_select = 
$('.fabricante_id').on('change',function(){
    var selectedFabricante = $(this).find('option:selected').val();
    console.log(selectedFabricante);
    /*foreach(){
    	$('modelo_id').append('<option>'+value+'</option>');
    }*/
});
</script>