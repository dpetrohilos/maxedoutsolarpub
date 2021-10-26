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
        <?php wp_head(); ?><!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '882561502389151');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=882561502389151&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	</head>
	<body <?php body_class(); ?>>

        
<nav id="mainnav" role="navigation" class="nav hamburger">
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
							<div class="logo col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-8 col-xl-offset-1 col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
						<a title="home link" href="<?php echo esc_url( home_url() ); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Maxed Out Solar" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
                </section>
			</header>
			<!-- /header --> 
        