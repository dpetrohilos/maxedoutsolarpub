<?php /* Template Name: Step 1 */ get_header('no-nav'); ?>
<div class="wrapper-fluid bg-splash middle-line">
    <div class="wrapper">
        <section class="row">
            
            <article class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-lg-offset-1 first-md first-lg first-xl last-xs last-sm">
    
                <?php the_content(); ?>


                <p><?php edit_post_link(); ?></p>

            </article>
            
            <aside class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 first-sm first-xs">
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "14544351",
	formId: "a16524a0-9116-443e-898a-db370e841383"
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
