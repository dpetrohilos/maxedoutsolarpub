<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
        
<meta name="theme-color" content="#f7f6f1">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
        

	
	</head>
	<body <?php body_class(); ?>>
        
		<!-- wrapper -->
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
		<!-- header -->
<header class="header topbar" role="banner" id="top">
<section class="row">
					<!-- logo -->
					<div class="logo col-lg-2 col-lg-offset-5 col-md-3 col-sm-3 col-xs-4 col-sm-offset-4 col-xs-offset-6 col-md-offset-2">
						<a title="home link" href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Maxed Out Solar" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
    
    <div class="nav-top icon col-lg-4 col-md-4 col-sm-10 col-xs-12 col-lg-offset-1">

        <ul id="top-menu" role="navigation" class="nav nav-top">
            <li><a title="Offer" href="<?php echo esc_url( home_url() ); ?>/#offer">Offer</a></li>
            <li><a title="Story" href="<?php echo esc_url( home_url() ); ?>/#story">Story</a></li>
            <li><a title="Vision" href="<?php echo esc_url( home_url() ); ?>/#vision">Vision</a></li>
            <li><a title="Services" href="<?php echo esc_url( home_url() ); ?>/#Service">Service</a></li>

        
        </ul>
        
    </div>
    
    
					<!-- /nav -->
                </section>
			</header>
			<!-- /header --> 
        
