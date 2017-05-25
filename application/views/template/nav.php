<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>Publico/index">
                    <img src="<?php echo base_url('assets/rentacar.png'); ?>" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li <?php echo setMenuItemActive( $active_menu == "index"); ?>>
                        <a href="<?=base_url('publico');?>">Início</a>
                    </li>
                    <li <?php echo setMenuItemActive( $active_menu == "sobre"); ?>>
                        <a href="<?=base_url('publico/sobre')?>">Sobre</a>
                    </li>
                    <li <?=setMenuItemActive( $active_menu == "frota", true);?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Frota automóvel <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=base_url("frota")?>">Consultar</a>
                            </li>
                            <li>
                                <a href="<?=base_url("frota/inserir")?>">Inserir Automóvel</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php echo setMenuItemActive( $active_menu == "contacto"); ?>>
                        <a href="<?=base_url('publico/contacto')?>">Contacto</a>
                    </li>
                    <li <?php echo setMenuItemActive( $active_menu == "listaremail"); ?>>
                        <a href="<?=base_url('frota/listarEmail')?>">Listar Mensagens</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<script>
jQuery(function($) {
    $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
    }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
    });
    $('.navbar .dropdown > a').click(function(){
        location.href = this.href;
    });
});
</script>

