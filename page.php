<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php get_header(); ?>
<div class="row">
	<div id="widget-left" class="col-md-2">
		<?php //get_sidebar( 'left' ); ?>
	</div>
	<div id="main-content" class="col-md-8">
		<section>
		<?php
			if (have_posts()) :
				get_template_part( 'loops/loop' );
			else:
				get_template_part( 'loops/loop', 'empty' );
			endif;
		?>
		</section>
		<?php comments_template(); ?>
	</div>
	<div id="widget-right" class="col-md-2">
		<?php //get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>