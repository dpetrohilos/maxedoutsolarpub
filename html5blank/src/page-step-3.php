<?php /* Template Name: Step 3 */ get_header('no-nav'); ?>
<div class="wrapper-fluid bg-splash middle-line">
    <div class="wrapper">
        <section class="row">
            
            <article class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-lg-offset-1 first-md first-lg first-xl last-xs last-sm">
    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
    
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>


                <p><?php edit_post_link(); ?></p>

            </article>
            
            <aside class="col-lg-4 col-md-6 col-sm-12 col-xs-12 first-sm first-xs">
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
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

        </section></div></div>

<?php get_footer('eco'); ?>
