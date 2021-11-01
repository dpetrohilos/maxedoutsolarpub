<?php /* Template Name: Page Splash */ get_header(); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<div class="contaienr-fluid bg-splash">
    <div class="container">
        <section class="row">
            
            <article class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-lg-offset-1 last-xs last-sm">
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
	formId: "a16524a0-9116-443e-898a-db370e841383"
});
</script> 
            </aside>
		
            
        <?php endwhile; ?>

		<?php else : ?>
        </section></div></div>

<?php get_footer('eco'); ?>
