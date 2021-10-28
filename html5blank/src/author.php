<?php get_header('without'); ?>

	<div class="core-message writing">
		<!-- section -->
		<section class="section">

		<?php if ( have_posts() ): the_post(); ?>

			<h1><?php esc_html_e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>

		<?php if ( get_the_author_meta( 'description' ) ) : ?>

		<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>

			<h2><?php esc_html_e( 'About ', 'html5blank' ); echo get_the_author(); ?></h2>

			<?php echo wpautop( get_the_author_meta( 'description' ) ); ?>

		<?php endif; ?>
            

		<?php rewind_posts(); while ( have_posts() ) : the_post(); ?>
        </section></div>
<main role="main" aria-label="Content"  class="writing wrapper"><section class="row">
			
    
    
    <!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('radius col-lg-4 col-md-4 col-sm-12 col-xs-12'); ?>>

		<div class="card">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
				<?php the_post_thumbnail( array( 600, 400 ) ); // Declare pixel size you need inside the array. ?>
		<?php endif; ?>
		<!-- /post thumbnail --></a>

		<!-- post title -->
		<header class="blog-header">
            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?>
            </h2></a>
       	<!--  <p><?php edit_post_link(); ?></p> -->

        </header>
		<!-- /post title -->

        
    
    <section class="row blog-body">
            
            
<div class="col-lg-8 col-sm-12 p0">
         <p class="info">  
                
             <?php esc_html_e( 'Filed Under: ', 'html5blank' ); the_category( ', ' ); // Separated by commas. ?>   
                </p> </div>
            
            <div class="col-lg-4 col-sm-12 p0">
         <p class="info text-right"><span class="date">
			<time datetime="<?php the_time( 'y-M' ); ?>">
                <em><?php the_date('M y'); ?> </em>
			</time>
		</span> </p> </div>
    
        </section>
            


        
        <footer class="blog-footer"> <div></div>
        <p class="info">
		<span class="author">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>

            <?php esc_html_e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
            </p>
        </footer>

        </div>

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
