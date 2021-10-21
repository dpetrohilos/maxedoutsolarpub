<?php /* Template Name: Savings Community Solar */ get_header(); ?>



<?php get_template_part( 'templateparts/css/bigreddark' ); ?>
<?php get_template_part( 'templateparts/css/bigred' ); ?>
<?php get_template_part( 'templateparts/guarantee-community' ); ?>
<?php get_template_part( 'templateparts/css/three' ); ?>

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

<?php get_template_part( 'templateparts/css/two' ); ?>
<?php get_template_part( 'templateparts/css/line-middle' ); ?>
<?php get_template_part( 'templateparts/css/bigtext' ); ?>

<div role="main" aria-label="Content" class="wrapper">
<section class="row">
 <?php $my_query = new WP_Query( 'posts_per_page=6' );
while ( $my_query->have_posts() ) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
    
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-4 col-sm-12 col-xs-12'); ?>>

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
           
            </p></div>        
            <div class="blog-footer">

        <p class="info">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
            <span class="author"><?php esc_html_e( 'By', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>  
        </p>            

                    </div></div></div>
            </article>        
  <?php endwhile; ?>

   
            
    </section></div>

<div class="wrapper pt10">
    <section class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h3>
            Ready to save with solar? 
            </h3>
            
                       
   <p class="btn-wrap">
    

<a title="Find a project near you" class="btn" href="" onclick="Calendly.initPopupWidget({url: 'https://find-my-local-community-solar-project.paperform.co/?embed=1&amp;takeover=0&amp;inline=1&amp;popup=0&amp;_d=www.myutilityadvisor.com&amp;_in=0&amp;bg_id=maxedoutsolar&amp;bg_cid=solar-with-no-panels&amp;bg_pid=swnp-opt-in&amp'});return false;">Sign up</a>
    
        </p>       </div>
    </section>
    
</div>

<?php get_footer('eco'); ?>
