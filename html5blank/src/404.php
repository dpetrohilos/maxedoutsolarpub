<?php get_header('without'); ?>

	<main role="main" aria-label="Content" class="wrapper">
		<!-- section -->
		<section class="section">

			<!-- article -->
			<article id="post-404" class="col">
<iframe src="https://giphy.com/embed/BM0i93ul1MRW8EjMHe" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cbc-schittscreek-schitts-creek-BM0i93ul1MRW8EjMHe">via GIPHY</a></p>

				<h1><?php esc_html_e( 'Page not found', 'html5blank' ); ?></h1>
				<p class="btn-wrap">
					<a class="btn" href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Return home?', 'html5blank' ); ?></a>
				</p>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
