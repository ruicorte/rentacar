<div class="container topo">
	<div class="row">
		<div class="col-xs-12">
			<form class="form-horizontal" action="<?php echo base_url();?>Publico/contacto" method="post">
				<fieldset>

					<!-- Form Name -->
					<legend>Contacte a Empresa</legend>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="nome_email">Nome</label>  
						<div class="col-md-4">
							<input id="nome_email" name="nome_email" type="text" placeholder="" class="form-control input-md" required="" value="<?php set_value('nome_email')?>">
							<?php echo form_error('nome_email');?>
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="email">Email</label>  
						<div class="col-md-4">
							<input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
							<?php echo form_error('email');?>
						</div>
					</div>

					<!-- Textarea -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="mensagem_email">Mensagem</label>
						<div class="col-md-4">                     
							<textarea class="form-control" id="mensagem_email" name="mensagem_email" required=""></textarea>
							<?php echo form_error('mensagem_email');?>
						</div>
					</div>

					<!-- Button -->
					<div class="form-group">
						<div class="col-md-8 text-right">
							<button id="submit_btn_email" name="submit_btn_email" class="btn btn-primary">Enviar</button>
						</div>
					</div>

				</fieldset>
			</form>
		</div>
	</div>
</div>