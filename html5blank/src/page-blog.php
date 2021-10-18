<?php /* Template Name: BLOG */ get_header(); ?>
<main role="main" aria-label="Content" class="wrapper wrapper">
<section class="row">
            

<?php $my_query = new WP_Query( 'posts_per_page=2' );
while ( $my_query->have_posts() ) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
    
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-sm-12'); ?>>

                <div class="radius blog-wrapper card">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(array(1200,800)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		            <div class="blog-header">
<!-- post title -->
		<h2 class="blog-title"><strong>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></strong>
		</h2>
		<!-- /post title -->
            </div><div class="blog-body row"><div class="col-lg-8 col-sm-12 p0">
		<!-- post details -->
	 <p class="info"><span>Added to
                         <?php esc_html_e( '', 'html5blank' ); the_category( ', ' ); // Separated by commas. ?>
         </span>
			
         
         
            </p> </div>
            
    <div class="col-lg-4 col-sm-12 p0"> 
	 <p class="info">
          <span class="date">
				<time datetime="<?php the_time( 'Y-m-d' ); ?> | <?php the_time( 'H:i' ); ?>">
					<?php the_date(); ?> 
				</time>
            </span>
           
            </p>



            
            </div></div>        
            <div class="blog-footer">

        <p class="info">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
            <span class="author"><?php esc_html_e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>  
        </p>            

                    </div></div>
            </article>        
  <?php endwhile;?>

   
            
        </section></main>
	<main role="main" aria-label="Content" class="wrapper">
<section class="row">
            

<?php $my_query = new WP_Query( 'posts_per_page=9&offset=2' );
while ( $my_query->have_posts() ) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
    
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-4 col-sm-6 col-xs-6'); ?>>

                <div class="radius blog-wrapper card">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(array(900,600)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
            <div class="blog-header">

		<!-- post title -->
		<h2 class="blog-title"><strong>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></strong>
		</h2>
		<!-- /post title -->
            </div><div class="blog-body row"><div class="col-lg-8 col-sm-12 p0">
		<!-- post details -->
	 <p class="info"><span>Added to
                         <?php esc_html_e( '', 'html5blank' ); the_category( ', ' ); // Separated by commas. ?>
         </span>
			
         
         
            </p> </div>
            
    <div class="col-lg-4 col-sm-12 p0"> 
	 <p class="info">
          <span class="date">
				<time datetime="<?php the_time( 'Y-m-d' ); ?> | <?php the_time( 'H:i' ); ?>">
					<?php the_date(); ?> 
				</time>
            </span>
           
            </p>



            
            </div></div>        
            <div class="blog-footer">

        <p class="info">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
            <span class="author"><?php esc_html_e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>  
        </p>            

                    </div></div>
            </article>        
  <?php endwhile; ?>

   
            
        </section></main>

<?php get_footer(); ?>
