<header class="header">
    <div class="container">
        <div class="d-xl-none">
            <!-- ******************* The Navbar Area ******************* -->
            <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

                <a class="skip-link sr-only sr-only-focusable" href="#content">
                    <?php esc_html_e( 'Skip to content', 'understrap' ); ?>
                </a>

                <nav class="navbar navbar-expand-xl navbar-dark">

                    <?php if ( 'container' == $container ) : ?>
                    <div class="container" >
                        <?php endif; ?>
                        <a class="navbar-brand"
                           rel="home"
                           href="<?php echo esc_url( home_url( '/' ) ); ?>"
                           title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                           itemprop="url"
                        >
                            <img class ="center-block img-responsive " src ="<?php echo IMAGES;?>/logo.png">
                        </a>

                        <div class="row no-gutters align-items-center phones">
                            <svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg>
                            <a href="tel:+380472731315">
                                0472 <span>73-13-15</span>
                            </a>

                            <a href="tel:+380504400727" class="phone2 d-none d-md-block">
                                050 <span>440-07-27</span>
                            </a>
                        </div>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- The WordPress Menu goes here -->
                        <?php wp_nav_menu(
                            array(
                                'theme_location'  => 'primary',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'navbarNavDropdown',
                                'menu_class'      => 'navbar-nav ml-auto',
                                'fallback_cb'     => '',
                                'menu_id'         => 'main-menu',
                                'depth'           => 2,
                                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                            )
                        ); ?>
                        <?php if ( 'container' == $container ) : ?>
                    </div><!-- .container -->
                <?php endif; ?>

                </nav><!-- .site-navigation -->

            </div><!-- #wrapper-navbar end -->
        </div>

        <div class="d-none d-xl-flex no-gutters align-items-center">
            <div class="col-md-auto">
                <a class="navbar-brand"
                   rel="home"
                   href="<?php echo esc_url( home_url( '/' ) ); ?>"
                   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                   itemprop="url"
                >
                    <img class ="center-block img-responsive " src ="<?php echo IMAGES;?>/logo.png">
                </a>
            </div>

            <div class="col">
                <?php wp_nav_menu(array('menu' => 2)); ?>
            </div>

            <div class="col-xl-auto">
                <div class="row no-gutters align-items-center phones">
                    <svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg>
                    <a href="tel:+380472731315">
                        0472 <span>73-13-15</span>
                    </a>

                    <a href="tel:+380504400727" class="phone2">
                        050 <span>440-07-27</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>