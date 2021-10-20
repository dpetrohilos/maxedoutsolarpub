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

<div data-prefill-inherit="1" data-paperform-id="find-my-local-community-solar-project"></div><script>(function() {var script = document.createElement('script'); script.src = "https://paperform.co/__embed.min.js"; document.body.appendChild(script); })()document.querySelectorAll('div[data-paperform-id] > iframe:not(:last-child)').forEach(node => node.remove())</script>



<?php get_footer('home'); ?>
