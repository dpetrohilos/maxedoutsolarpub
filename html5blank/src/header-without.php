<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head><title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="theme-color" content="#f7f6f1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

        
<nav id="mainnav" role="navigation" class="nav hamburger headroom headroom header--fixed hide-from-print animated slideDown">
  <div id="menuToggle"><form>
        <label for="hamburger-menu" class="menu-label">Menu</label>  
    <input id="hamburger-menu" class="menu-checkbox" type="checkbox" />

    

    <span></span>
    <span></span>
    <span></span>
 
<?php html5blank_nav('header-menu'); ?>
      
      </form>  
</div>
    
    
    
</nav>   
<header class="header topbar" role="banner" id="top">
<section class="row">
							<div class="logo col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-8 col-xl-offset-1 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 col-xs-offset-4">
						<a title="home link" href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Maxed Out Solar" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
                </section>
			</header>
			<!-- /header --> 
        