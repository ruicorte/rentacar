<div class="container topo">
	<legend>Remover automóvel</legend>
	<div class="row">
		<div class="col-xs-12">
			<!-- Button (Double) -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cancel_button">Confirmar eliminar Veiculo <?=$matricula->matricula;?></label>
						<div class="col-md-8">
						<form  style="display:inline" method="post" action="<?=base_url('frota/index');?>">
    <button id="submit_cancel" name="submit_cancel" class="btn btn-warning">Cancelar</button>
</form>
		<form  style="display:inline" method="post" action="<?=base_url('frota/index/'.$matricula->id)?>">
    <button id="submit_eliminar"  name="submit_eliminar" value="TRUE" class="btn btn-primary">Eliminar</button>
</form>					
							
						</div>
					</div>
		</div>
	</div>
</div>