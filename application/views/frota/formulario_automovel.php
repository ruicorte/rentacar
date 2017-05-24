<div class="container topo">
	<legend>Inserção de automóvel</legend>
	<div class="row">
		<div class="col-xs-12">
			<form class="form-horizontal">
				<fieldset>
					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="fabricante_id">Fabricante</label>
						<div class="col-md-4">
							<select id="fabricante_id" name="fabricante_id" class="form-control">
								<option value="1">Option one</option>
								<option value="2">Option two</option>
							</select>
						</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="modelo_id">Modelo</label>
						<div class="col-md-4">
							<select id="modelo_id" name="modelo_id" class="form-control">
								<option value="1">option1</option>
								<option value="2">option12</option>
							</select>
						</div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cor_id">Cor</label>
						<div class="col-md-4">
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
						<div class="col-md-4">
							<input id="matricula" name="matricula" type="text" placeholder="XX-XX-XX" class="form-control input-md" required="">
						</div>
					</div>

					<!-- Multiple Radios (inline) -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="radios"></label>
						<div class="col-md-4"> 
							<label class="radio-inline" for="radios-0">
								<input type="radio" name="radios" id="radios-0" value="1" checked="checked">
								Disponível
							</label> 
							<label class="radio-inline" for="radios-1">
								<input type="radio" name="radios" id="radios-1" value="2">
								Ocupado
							</label> 
						</div>
					</div>

					<!-- Button (Double) -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="cancel_button"></label>
						<div class="col-md-8">
							<button id="cancel_button" name="cancel_button" class="btn btn-warning">Cancelar</button>
							<button id="submit_automovel" name="submit_automovel" class="btn btn-primary">Guardar</button>
						</div>
					</div>

				</fieldset>
			</form>


		</div>
	</div>
</div>