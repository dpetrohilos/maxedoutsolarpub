<?php get_header('without'); ?>

        <div class="wrapper">
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
   	<section class="row content"> 

<div id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 content-inner'); ?>>
<h1><?php the_title(); ?>
			</h1>
			<!-- /post title -->

 
        
<p class="info pb2 pt1"><span class="date pr2">
			<time datetime="<?php the_time( 'M y d' ); ?>">
                <?php the_date('M y d'); ?>   
			</time>
    
             </span>  | 
     		<span class="author pl2">
<span class="pr1">
             <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                </span>
                <?php esc_html_e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
     
     </p> 
            

            
        

        </div></section> 
            
   	<section class="row content"> 
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 content-inner mb2">

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
					<?php the_post_thumbnail('larger radius-both'); // Fullsize image for the single post. ?>
			<?php endif; ?>
			<!-- /post thumbnail -->
    </div> 
        
<?php get_template_part( 'sidebar' ); ?>
            </section></div>
           <div class="wrapper">

<section class="row content">
    <article class="content-inner col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt2 content-inner">    
                                    <?php wcr_share_buttons(); ?> 

			<?php the_content(); // Dynamic Content. ?>

<div class="cat--in">
             <?php esc_html_e( 'Filed Under: ', 'html5blank' ); the_category( ' ' ); // Separated by commas. ?>   
        </div>
        
        

			<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>


		<!-- /article -->

	<?php endwhile; ?>

	<?php else : ?>

		<!-- article -->
		<article>

			<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
        </article>
	</section>
	<!-- /section -->

            </div>
<?php get_footer('home'); ?>



