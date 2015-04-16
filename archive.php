<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php get_header(); ?>
<div class="row">
	<div id="widget-left" class="col-md-2 hidden-xs hidden-sm">
		<?php get_sidebar( 'left' ); ?>
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
		<ul id="pager">
			<?php if (get_previous_posts_link()) { ?>
			<li class="btn btn-primary btn-xs">
				<?php previous_posts_link(__( '&larr; Posts recientes', 'ega')); ?>
			</li>
			<?php }
			if (get_next_posts_link()) { ?>
			<li class="btn btn-primary btn-xs">
				<?php next_posts_link(__('Posts anteriores &rarr;', 'ega')); ?>
			</li>
			<?php } ?>
		</ul>
	</div>
	<div id="widget-right" class="col-md-2">
		<?php get_sidebar( 'right' ); ?>
	</div>
</div>
<?php get_footer(); ?>