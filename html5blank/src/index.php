<?php get_header(); ?>
<?php get_template_part( 'templateparts/bigred' ); ?>
<?php get_template_part( 'templateparts/guarantee' ); ?>
<?php get_template_part( 'templateparts/three' ); ?>
<?php get_template_part( 'templateparts/introduction' ); ?>
<?php get_template_part( 'templateparts/two' ); ?>
<?php get_template_part( 'templateparts/core-message' ); ?>
<?php get_template_part( 'templateparts/line-middle' ); ?>
<?php get_template_part( 'templateparts/bigtext' ); ?>
<div class="wrapper writing" role="main" aria-label="Content" id="writing">
		<section class="row content">
			<?php get_template_part( 'loop' ); ?>
		</section>
    </div>


<?php get_footer('home'); ?>
