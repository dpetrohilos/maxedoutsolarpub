<?php /* Template Name: Signup Community Solar */ get_header('no-nav'); ?>
    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        

<div class="wrapper-fluid sign-up-pages" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
        <section class="row">
            
<article class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-8 col-md-offset-8">
                
<section class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Maxed Out Solar" class="logo-img">
                <?php the_content(); ?>

    <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
<div id="hs_cos_wrapper_widget_1632277226579" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module"><div data-prefill-inherit="1" data-paperform-id="find-my-local-community-solar-project"> <iframe title="Embedded form" frameborder="0" src="https://find-my-local-community-solar-project.paperform.co?embed=1&amp;takeover=0&amp;inline=1&amp;popup=0&amp;_d=www.myutilityadvisor.com&amp;_in=0&amp;bg_id=maxedoutsolar&amp;bg_cid=solar-with-no-panels&amp;bg_pid=swnp-opt-in&amp;" data-src="" allowfullscreen="" allowpaymentrequest="" width="100%" allow="geolocation *;camera *;microphone *;" style="
        width: 100%;
        box-sizing: border-box;
        
        height: 327px;"></iframe>   </div><script>(function() {var script = document.createElement('script'); script.src = "https://paperform.co/__embed.min.js"; document.body.appendChild(script); })()</script></div>

</div>
    
    </div></section>
            </article>
		
            
		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

        </section></div>

<?php get_footer('bottom'); ?>
