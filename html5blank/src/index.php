<?php get_header(); ?>
<?php get_template_part( 'templateparts/bigred' ); ?>
<div class="wrapper-full about-us"><div class="wrapper"><section class="row">
<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-lg-offset-2">
    
<a href="https://www.youtube.com/embed/_VNx83azM5M" class="glightbox3"> <!----change after videos are made!---->
        
    <picture>    
<source class="lazy" sizes="(min-width: 40rem) 80vw, 100vw" 
 srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/video-5.webp" type="image/webp" />
<source class="lazy" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/video-5@0.75x-80.jpg" media="(min-width: 1000px)">
<source class="lazy" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/video-5-50.jpg" media="(min-width: 800px)">
  
<img width="624" class="responsive-img radius-both lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/video-5@1.5x-50.jpg" alt="Featured video" />

        
        
    </picture>
</a>    

    <p class="text-center">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Maxed Out Solar" class="logo-img text-center">
    </p>
    <h2>Your Green Future Starts Today</h2>
    
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
    
    </div></section></div></div>

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
