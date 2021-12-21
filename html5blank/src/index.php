<?php get_header(); ?>
<?php get_template_part( 'templateparts/bigred' ); ?>
<div class="wrapper-full about-us"><div class="wrapper">
    
    <section class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <a href="https://www.youtube.com/embed/_VNx83azM5M" class="glightbox3"> <!----change after videos are made!---->
        
    <picture>    
<source class="lazy" sizes="(min-width: 40rem) 80vw, 100vw" 
 srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/video-5.webp" type="image/webp" />
<source class="lazy" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/video-5@0.75x-80.jpg" media="(min-width: 1000px)">
<source class="lazy" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/video-5-50.jpg" media="(min-width: 800px)">
  
<img width="624" class="responsive-img radius-both lazy" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/video-5@1.5x-50.jpg" alt="Featured video" />
        
    </picture>
</a>    
        </div></section>
    
    <section class="row">
<div class="col-lg-6 col-md-8 col-sm-12 col-lg-offset-3 col-lg-offset-2">
    


    <h2>A Message From Maxed Out Solar’s Founder</h2>
    
<p>Your energy bills are probably way too high. We can help you take on your expensive, monopolistic utility company and own your own solar panels, producing your own power instead of renting! Our hard work in the solar community makes entire neighborhoods stronger, healthier, and more vibrant. 
</p>
    
<p>Everyone deserves breathable air, clean drinking water, and healthier communities. Community solar and rooftop solar <strong>lower the overall cost of electricity</strong> for local communities, and are much better for the planet than fossil fuels.
</p>
    
    <h2>We strive to give more than we take</h2>
    
    <p>Our solar solutions provide maxed out value. Researching solar solutions should be easy. We pack our website with useful information to make the switch to solar a no-brainer. Every three households that switch will offset enough carbon emissions to save one life elsewhere in the world. 
</p>
    
    <p>That’s a big deal. If you want to support your local climate movement, we can connect you. When we switch you to solar, we look out for your wallet and our planet and keep you informed every step of the way.    </p>
    
    
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
