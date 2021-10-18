
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('radius col-lg-4 col-md-4 col-sm-6 col-xs-12'); ?>> <div class="card">
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

<?php endwhile; ?>

<?php else : ?>

	


<?php endif; ?>
