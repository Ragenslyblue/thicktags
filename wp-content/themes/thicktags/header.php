<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thicktags
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title>Thicktags Web Development Services</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!--<link rel="stylesheet" type="text/css" href="style.css" />-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'thicktags' ); ?></a>

	<!--<header id="masthead" class="site-header">-->
        <header class="header">
		<!--<div class="site-branding">-->
        <div class="title_thick">
            <a href=""><img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/thigtags_title.png" width="236" height="100" /></a>
			<?php
            /*
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				*/?>
			<!--	<h1 class="site-title"><a href="<?php// echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1>
				<?php
			//else :
				?>
				<p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php// bloginfo( 'name' ); ?></a></p>
				<?php
                /*
			endif;
			$thicktags_description = get_bloginfo( 'description', 'display' );
			if ( $thicktags_description || is_customize_preview() ) :
				*/?>
				<p class="site-description"><?php echo $thicktags_description; /* WPCS: xss ok. */ ?></p>
			<?php //endif; ?>
            -->
		</div><!-- .site-branding -->

		<!--<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'thicktags' ); ?></button>
			<?php
			/*wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			*/?>
		</nav>--><!-- #site-navigation -->
  <div class="nav">
        <ul class="nav-header">
        <?php
			/*wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );*/
			?>
            <li><a href="<?php echo(get_template_directory_uri()); ?>/home"><img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/home.png" width="62" height="14" /></a></li>
            <li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/services.png" width="98" height="19" /></a></li>
            <li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/company_overview.png" width="213" height="19" /></a></li>
            <li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/testimonials.png" width="127" height="19" /></a></li>
            <li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/google_map.png" width="125" height="19" /></a></li>
        </ul>
    </div>
    
    <div class="passion-div wrapper">
        <div class="image-passion">
            <img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/with_text.png" width="369" height="190" />
        </div>
    </div>
    <div class="click-padding">
        <div class="click-text">
                <h3><a href="">Click Me</a></h3>
        </div>
    </div>
    <div class="arrow-side">
        <div class="arrow-center">
            <img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/carousel_arrow.png" width="153" height="78" />
        </div>
    </div>
    <div class="carousel-wrapper">
        <div class="carousel-buttons">
            <img src="<?php echo(get_template_directory_uri()); ?>/pics/images_2/iconizing_slide_dots.png" width="124" height="25" />
        </div>
    </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
