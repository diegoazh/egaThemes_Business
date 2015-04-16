<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
				<header>
					<h1><?php the_title(); ?></h1>
					<?php edit_post_link(__('Editar página', 'ega'), '', '', ''); ?>
					<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
					} ?>					
				</header>
				<?php the_content(); 
					wp_link_pages( array(
					'before' => '<p class="paginacion">'.__('Páginas', 'ega')
					) ); 
				?>
