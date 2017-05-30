<div class="container topo">
	<div class="row">
		<div class="col-xs-12">
		<?php $linkbase = base_url();?>
		<?=form_open($linkbase.'Publico/contacto',array('class' => 'form-horizontal'));?>
			<!--<form class="form-horizontal" action="<?php echo base_url();?>Publico/contacto" method="post">-->
				<fieldset>
					<legend>Contacte a Empresa</legend>
					<?php 
						if ( validation_errors() && set_value('submit_btn_email') == TRUE) {
							echo "<div class='alert alert-danger'>
							<strong>Erro!</strong>".validation_errors()."</div>";
						}
						if( isset( $_SESSION['formStatus'] )) {
							echo   $_SESSION['formStatus'];
							unset( $_SESSION['formStatus'] );
						}
					?>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="nome_email">Nome</label>  
						<div class="col-md-4">
							<input id="nome_email" name="nome_email" type="text" placeholder="" class="form-control input-md" required="" value="<?=isset($messagePost['nome_email']) ? $messagePost['nome_email'] : '' ;?>">
						</div>
					</div>
					<!-- Text input-->
					<div class="form-group">
						<label class="col-md-4 control-label" for="email">Email</label>  
						<div class="col-md-4">
							<input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="" value="<?=isset($messagePost['email']) ? $messagePost['email'] : '' ;?>">
						</div>
					</div>

					<!-- Textarea -->
					<div class="form-group">
						<label class="col-md-4 control-label" for="mensagem_email">Mensagem</label>
						<div class="col-md-4">                     
							<textarea class="form-control" id="mensagem_email" name="mensagem_email" required=""><?=isset($messagePost['mensagem_email']) ? $messagePost['mensagem_email']:'';?></textarea>
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