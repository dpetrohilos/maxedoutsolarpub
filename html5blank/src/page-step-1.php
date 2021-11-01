<?php /* Template Name: Step 1 */ get_header('no-nav'); ?>

    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>


<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        

<div class="wrapper-fluid sign-up-pages" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">        
<section class="row">
<article class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-8 col-md-offset-8">
                
<section class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Maxed Out Solar" class="logo-img">
                           <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
     
                
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "14544351",
	formId: "a16524a0-9116-443e-898a-db370e841383"
});
</script>        
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
