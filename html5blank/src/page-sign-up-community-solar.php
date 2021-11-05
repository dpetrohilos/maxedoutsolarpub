<?php /* Template Name: Signup Community Solar */ get_header('no-nav'); ?>
    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        

<div class="wrapper-fluid sign-up-pages" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
        <section class="row">
            
<article class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-8 col-md-offset-8">
                
<section class="row">
<div class="col-xl-6 col-lg-9 col-md-12 col-sm-12 col-xs-12">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Maxed Out Solar" class="logo-img">
                <?php the_content(); ?>
    <div class="form-import">
    <div data-prefill-inherit="1" data-paperform-id="find-my-local-community-solar-project" data></div><script>(function() {var script = document.createElement('script'); script.src = "https://paperform.co/__embed.min.js"; document.body.appendChild(script); })()</script>
    
    </div></div></section>
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
