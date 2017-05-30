<div class="container" style="margin-top:50px;">
	<legend>Frota automóvel <!--<small><?=(($_SESSION['searchData']['termo_search'] ?? false) ? '- pesquisa activa: '.$_SESSION['searchData']['termo_search'].' ('.$_SESSION['searchData']['criterio_search'].')' : '')?></small>--></legend>
	<div class="row">
		<div class="col-xs-12" style="margin-bottom:1em;">
			<?php $this->load->view('frota/pesquisa'); ?>
		</div>
		<div class="col-xs-12">
			<?php $this->load->view('frota/table'); ?>
		</div>
	</div>
</div>