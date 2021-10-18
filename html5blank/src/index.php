<?php get_header(); ?>
<?php get_template_part( 'templateparts/bigred' ); ?>
<?php get_template_part( 'templateparts/bigreddark' ); ?>
<?php get_template_part( 'templateparts/three' ); ?>
<?php get_template_part( 'templateparts/two' ); ?>
<?php get_template_part( 'templateparts/line-middle' ); ?>
<?php get_template_part( 'templateparts/bigtext' ); ?>
<div class="bg12">
<div class="wrapper pt10" role="main" aria-label="Content" id="writing">
		<section class="row content">
			<?php get_template_part( 'loop' ); ?>
		</section>
        </div></div>
<?php get_footer('home'); ?>
