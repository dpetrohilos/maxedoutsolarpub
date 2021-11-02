<?php /* Template Name: Eco Community Solar */ get_header(); ?>

<?php get_template_part( 'templateparts/cse/bigred' ); ?>
<?php get_template_part( 'templateparts/guarantee-community' ); ?>
<?php get_template_part( 'templateparts/cse/three' ); ?>
<main role="main" aria-label="Content" class="wrapper">
		<!-- section -->
		<section class="row content">
            
		<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('content-inner col-lg-6 col-md-6 col-sm-6 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-1'); ?>>

				<?php the_content(); ?>


				<?php edit_post_link(); ?>

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
<?php get_template_part( 'templateparts/introduction' ); ?>
<?php get_template_part( 'templateparts/cse/two' ); ?>
<?php get_template_part( 'templateparts/core-message-community' ); ?>
<?php get_template_part( 'templateparts/cse/line-middle' ); ?>
<?php get_template_part( 'templateparts/cse/bigtext' ); ?>
<?php get_footer('eco'); ?>
