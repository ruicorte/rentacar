<?php

	$automovel_id 	= $dados_carro['automovel_id'] 		?? false; 
	$fabricante_id 	= $dados_carro['fabricante_id'] 	?? $this->input->post('fabricante_id') 	?? false;
	$modelo_id 		= $dados_carro['modelo_id'] 		?? $this->input->post('modelo_id') 		?? false;
	$cor_id 		= $dados_carro['cor_id'] 			?? $this->input->post('cor_id') 		?? false;
	$matricula 		= $dados_carro['matricula'] 		?? $this->input->post('matricula') 		?? false;
	$disponivel 	= $dados_carro['disponibilidade'] 	?? $this->input->post('disponivel') 	?? false;

	$destController	= base_url('frota/inserir'.($automovel_id ? '/1' : ''));//base_url($automovel_id ? 'frota/edita' : 'frota/inserir');
?>

<div class="container<?=(($container_fluid ?? false) ? '-fluid' : ' topo')?>">
	<?php if(!($container_fluid ?? false)):?>
		<legend><?=$automovel_id ? 'Edição' : 'Inserção'?> de automóvel</legend>
	<?php endif;?>
	<div class="row">
		<div class="col-xs-12">
		<form class="form-horizontal" method="POST" action="<?=$destController?>">
		<?=($automovel_id ? '<input type="hidden" value="'.$automovel_id.'" name="id">' : '')?>
			<fieldset>
				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="fabricante_id">Fabricante</label>
					<div class="col-md-8">
						<select id="fabricante_id" name="fabricante_id" class="form-control" onchange="actualiza_modelos()" required>
						<?php if(!$fabricante_id):?>
							<option value="" selected disabled>Escolha um fabricante</option>
						<?php endif;?>
						<?php foreach($fabricantes as $fab):?>
							<option value="<?=$fab['id']?>" <?=($fabricante_id == $fab['id'] ? 'selected' : '')?>><?=$fab['nome']?></option>
						<?php endforeach; ?>
						</select>
						<?=form_error('fabricante_id')?>
					</div>
				</div>
				<!-- Select Basic -->
				<div id="select_modelo" class="form-group" style="display:none;">
					<label class="col-md-4 control-label" for="modelo_id">Modelo</label>
					<div class="col-md-8">
						<select id="modelo_id" name="modelo_id" class="form-control" required>
						</select>
						<?=form_error('modelo_id')?>
					</div>
				</div>
				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="cor_id">Cor</label>
					<div class="col-md-8">
						<select id="cor_id" name="cor_id" class="form-control" required>
							<?php if(!$cor_id):?>
								<option value="" selected disabled>Escolha a cor</option>
							<?php endif;?>
							<?php foreach($cores as $cor):?>
								<option value="<?=$cor['id']?>" <?=($cor_id == $cor['id'] ? 'selected' : '')?>><?=$cor['nome']?></option>
							<?php endforeach; ?>
						</select>
						<?=form_error('cor_id')?>
					</div>
				</div>
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="matricula">Matrícula</label>  
					<div class="col-md-8">
						<input id="matricula" name="matricula" type="text" placeholder="XX-XX-XX" class="form-control input-md" value="<?=strtoupper($matricula)?>" required>
						<?=form_error('matricula')?>
					</div>
				</div>
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
					<div class="col-md-offset-4 col-md-8"> 
						<label class="radio-inline" for="disponivel1">
							<input type="radio" id="disponivel1" name="disponivel" value="1" <?=(($disponivel ==1 || $disponivel != 0) ? 'checked="checked"' : '')?>>
							Disponível
						</label> 
						&emsp;
					<!--</div>
					<div class="col-md-4"> -->
						<label class="radio-inline" for="disponivel0">
							<input type="radio" name="disponivel" id="disponivel0" value="0" <?=($disponivel==0 ? 'checked="checked"' : '')?>>
							Ocupado
						</label> 
					</div>
				</div>
				<!-- Button (Double) -->
				<div class="form-group">
					<div class="col-md-offset-4 col-md-4">
					<?php if(!($container_fluid ?? false)): ?>
						<button id="cancel_button" type="reset" name="cancel_button" onclick="cancelar()" class="btn btn-block btn-warning">Cancelar</button>
					<?php endif;?>
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
function actualiza_modelos(){
	let modelos 		= <?php echo json_encode($modelos);?>;
	let id_modelo		= <?php echo $modelo_id ? $modelo_id : 'false'; ?>; 
	let modelo_id 		= document.getElementById("modelo_id");
	let selected  		= document.getElementById("fabricante_id").value;
   	let options   		= !id_modelo ? '<option value="" disabled selected>Escolha o modelo</option>' : ''
	modelos[selected].forEach( function(mod) {
  		options += `<option value="${mod.id}" ${modelo_id == mod.id ? "selected" : ""}>${mod.nome}</option>`
		}
	)
	modelo_id.innerHTML = options
	document.getElementById("select_modelo").style.display = "block"
}
function cancelar(){
	window.location = "<?php echo base_url('frota');?>"
}
if(document.getElementById("fabricante_id").value)
	actualiza_modelos()
</script>