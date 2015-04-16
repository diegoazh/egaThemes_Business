<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
				<header>
					<h1><?php the_title(); ?></h1>
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
				<?php the_content(); 
				wp_link_pages( array(
				'before' => '<p class="paginacion">'.__('Páginas', 'ega')
				) ); 
				the_tags( __('Etiquetas: ', 'ega'), ' - ', '' ); ?>
