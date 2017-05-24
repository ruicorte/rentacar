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
                    <img src="<?php echo base_url('assets/rentacar.jpg'); ?>" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li
                        <?php echo setMenuItemActive( $active_menu == "index"); ?>><a href="<?php echo base_url();?>Publico/">Início</a>
                    </li>
                    <li
                        <?php echo setMenuItemActive( $active_menu == "sobre"); ?>><a href="<?php echo base_url();?>Publico/sobre">Sobre</a>
                    </li>
                    <li
                        <?php echo setMenuItemActive( $active_menu == "frota"); ?>><a href="<?php echo base_url();?>Frota/index">Frota automóvel</a>
                    </li>
                    <li
                       <?php echo setMenuItemActive( $active_menu == "contacto"); ?>><a href="<?php echo base_url();?>Publico/contacto">Contacto</a>>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>