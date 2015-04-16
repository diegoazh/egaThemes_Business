<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
				<header>
					<h2><?php the_title(); ?></h2>
					<div class="meta-datos">
						<?php the_time(get_option( 'date_format' )); ?>
						&bull;
						<?php the_category( ', ' ); ?>
						<?php edit_post_link(__('Editar post', 'ega'), '<strong>|</strong> ', '', ''); ?>
						<?php if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('<p id="breadcrumbs">','</p>');
						} ?>					
					</div>
				</header>
				<?php if (has_post_thumbnail()) {
					the_post_thumbnail( 'thumbnail', array('class' => 'img-circle') );
				}
				the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-info btn-xs" >
					<?php _e('Leer mas...', 'ega'); ?>
				</a>