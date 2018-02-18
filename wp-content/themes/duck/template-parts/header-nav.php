<nav id="site-navigation" class="main-navigation navbar navbar-default <?php echo of_get_option('primary_color'); ?> <?php echo of_get_option('header_choice'); ?> <?php echo of_get_option('nav_behavior'); ?>" role="navigation">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'duck' ); ?></a>

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
			<span class="sr-only"><?php _e('Toggle navigation', 'duck'); ?></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<!--<a class="navbar-brand" href="#">Brand</a>-->
	</div><!-- .navbar-header -->

	<div class="container">
		<div class="row">
			<div class="collapse navbar-collapse" id="navbar-collapse-main">
				<?php
				$menu_type = of_get_option('nav_behavior');

				if ($menu_type == 'yamm' || $menu_type == 'yamm hover') {

					wp_nav_menu(
						array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'container'         => false,
							'menu_class'        => 'nav navbar-nav yamm',
							'depth'             => 3,
							'fallback_cb'       => 'Yamm_Nav_Walker_menu_fallback',
							'walker'            => new Yamm_Nav_Walker(),
						)
					);

				} else {

					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container'       => false,
							'menu_class'      => 'nav navbar-nav',
							'depth'			  => 3,
							'walker'          => new Bootstrap_Nav_Menu(),
						)
					);

				}


				?>

				<div class="navbar-right">
					<?php
					if (of_get_option('display_search') == 'search') {
						echo sprintf(
							'<div class="pull-right"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="sr-only">Search</span><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a><div class="nav-search dropdown-menu pull-right">%s</div></div>',
							get_search_form( false )
						);
					}
					if ( of_get_option('display_social', '') == 'header' || of_get_option('display_social', '') == 'headerfooter' ) {
						get_template_part( 'templates/social' );
					}
					?>
				</div><!-- .navbar-right -->
			</div><!-- /.navbar-collapse -->
		</div><!-- .row -->
	</div>

</nav><!-- #site-navigation -->