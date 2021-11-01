<?php /* Template Name: Step 1 */ get_header('no-nav'); ?>
        
<header class="wrapper-fluid steps-header">
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
</header>

    <?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>


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
