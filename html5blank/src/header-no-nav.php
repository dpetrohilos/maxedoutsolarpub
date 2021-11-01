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

<!-- End Facebook Pixel Code -->
	</head>
	<body <?php body_class(); ?>>
    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
        
<header class="wrapper-fluid steps-header">
    <div class="wrapper">
        <section class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 bg-red">
            
            <h1><?php the_title(); ?></h1>

            </div>
            
            <div class="col-lg-9 col-md-6 col-lg-3 col-md-6 col-sm-12 col-xs-12">
            
                
    			<?php if ( has_post_thumbnail(1200,600) ) : // Check if Thumbnail exists. ?>
					<?php the_post_thumbnail('radius-both responsive-img'); // Fullsize image for the single post. ?>
			<?php endif; ?>
                
            </div>
        </section>
    </div>
</header>