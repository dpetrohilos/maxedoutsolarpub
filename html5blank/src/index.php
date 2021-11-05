<?php get_header(); ?>
<?php get_template_part( 'templateparts/bigred' ); ?>
<div class="wrapper three-across"><section class="row">
<div class="col-lg-6 col-md-8 col-sm-12 about-us offset-lg-3 offset-md-2">
    <p class="text-center">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Maxed Out Solar" class="logo-img text-center">
    </p>
    <h2>Your Green Future. Your Green Energy Community</h2>
    
    <p>Our cooperative was founded in 2020 during the Great Resignation and the Covid-19 pandemic.</p>
    
    <p>We're not just interested in putting solar on your roof, we're intersted in build stronger vibrant communities.</p>
    
    <p>Everyone deserves cleaner air, water, and communities.</p>
    
    <h2>We strive to give more than we take</h2>
    
    <p>We do this by donating money from your purchase towards community projects. We're looking to not just green your roof but connect you towards supporting activists on the ground.</p>
    
    <p>When you get solar from us, we'll make sure it's good for your neighbors and community members</p>
    
    <p class="text-center">
    <img src="https://maxedoutsolar.com/wp-content/uploads/2021/04/Max-face-friendly.png" alt="Founder Of Maxed Out Solar" class="logo-img text-center">
    <br/>
        <em>Founder, Max Neely</em>
    </p>
    
    </div></section></div>

<?php get_template_part( 'templateparts/three' ); ?>
<?php get_template_part( 'templateparts/introduction' ); ?>
<?php get_template_part( 'templateparts/two' ); ?>
<?php get_template_part( 'templateparts/core-message' ); ?>
<?php get_template_part( 'templateparts/line-middle' ); ?>
<?php get_template_part( 'templateparts/bigtext' ); ?>
<div class="wrapper writing" role="main" aria-label="Content" id="writing">
		<section class="row content">
			<?php get_template_part( 'loop' ); ?>
		</section>
    </div>
<?php get_footer('home'); ?>
