<?php get_header('without'); ?>
<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<div class="wrapper-full big-text page-headline">        
<section class="row"><div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-xs-offset-1 col-lg-offset-1">
    <h1 class="text-center"><?php the_title(); ?></h1></div></section> </div>
<div class="wrapper-flull featured-wrapper"><section class="row"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2 text-center middle-line">

    			<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
					<?php the_post_thumbnail('radius-both responsive-img'); // Fullsize image for the single post. ?>
			<?php endif; ?>

    </div></section></div>

	<main role="main" aria-label="Content" class="wrapper">
		<!-- section -->
		<section class="row content">
            
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('content-inner col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3'); ?>>

				<?php the_content(); ?>


                <p><?php edit_post_link(); ?></p>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
