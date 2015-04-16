<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
		<?php
			while (have_posts()) :
			the_post(); 
		?>
			<article <?php post_class( 'clearfix' ); ?> >
				<?php
					if (is_single()) {
						get_template_part( 'contents/content', 'single' );
					}
					elseif (is_page()) {
						get_template_part( 'contents/content', 'page' );
					}
					else {
					get_template_part( 'contents/content' );
					}
				?>
			</article>
			<hr />
		<?php endwhile; ?>
