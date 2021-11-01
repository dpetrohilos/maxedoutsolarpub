<?php /* Template Name: Step 3 */ get_header('no-nav'); ?>
    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>


<div class="wrapper-fluid">
        <section class="row">
            
          <article style="padding: 0;" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 first-md first-lg first-xl last-xs last-sm p0">
    
                
    			<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
					<?php the_post_thumbnail('radius-both responsive-img'); // Fullsize image for the single post. ?>
			<?php endif; ?>

            </article>
            
            <aside class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 first-sm first-xs"><script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "14544351",
	formId: "f784b239-4aec-4447-a0d1-8252de95cc91"
});
</script>
            </aside>
		
            
		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

        </section></div>

<?php get_footer('eco'); ?>
