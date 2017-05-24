<div class="container" style="margin-top:50px;">
	<div class="row">
		<div class="col-xs-12">
			<form class="form-horizontal" action="<?php echo base_url();?>Publico/contacto" method="post">
				<fieldset>

					<!-- Form Name -->
					<legend>Contacte a Empresa</legend>
					<?php 
					$form_status = $form_status ?? '';
					if($form_status == 'submetido'){
						echo "<div class='alert alert-success'>
						<strong>Sucesso!</strong> Formulario submetido
					</div>";
				}
				if (NULL !== validation_errors() && set_value('submit_btn_email')==TRUE)
				{
					echo "<div class='alert alert-danger'>
					<strong>Erro!</strong>".validation_errors()."
				</div>";}?>
				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="nome_email">Nome</label>  
					<div class="col-md-4">
						<input id="nome_email" name="nome_email" type="text" placeholder="" class="form-control input-md" required="" value="<?=set_value('nome_email');?>">
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="email">Email</label>  
					<div class="col-md-4">
						<input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="" value="<?=set_value('email');?>">
					</div>
				</div>

				<!-- Textarea -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="mensagem_email">Mensagem</label>
					<div class="col-md-4">                     
						<textarea class="form-control" id="mensagem_email" name="mensagem_email" required=""><?=set_value('mensagem_email');?></textarea>
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<div class="col-md-8 text-right">
						<button id="submit_btn_email" name="submit_btn_email" class="btn btn-primary" value = TRUE>Enviar</button>
					</div>
				</div>

			</fieldset>
		</form>
	</div>
</div>
</div>