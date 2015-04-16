<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div id="comments" class="comments-area">
	<?php
		
		if (! empty($_SERVER['SCRIPT-FILENAME']) && basename($_SERVER['SCRIPT-FILENAME']) == 'comments.php') {
			die( __('Lamentablemente no podemos brindarte acceso a esta página.', 'ega') );
		}

		if (post_password_required()) { ?>
			
			<p><?php _e( 'Necesitas una contraseña para acceder.', 'ega' ); ?></p>
			</div>
			<?php return; 
		}

		if (have_comments()) { ?>
			
			<h3><?php comments_number( __('Se el primero en exponer tu punto de vista.', 'ega'), __('Hay un solo comentario en este artículo y estamos seguros de que puedes aportar un punto de vista diferente. ¡Atrévete!', 'ega'), __('Aunque hay % comentarios no gustaria eschuchar tu punto de vista sobre el tema. ¡Cuentanos que piensas!', 'ega') ); ?></h3>
			<ol id="comments-list">
				<?php wp_list_comments( 'avatar_size = 40' ); ?>
			</ol>

			<?php
			if (get_comment_pages_count( null, 10, false ) > 1 && get_option( 'page_comments' )) { ?>
			  	
			  	<ul class="pager">
			  		<li class="previous">&larr; <?php previous_comments_link( __('Comentarios anteriores', 'ega') ); ?></li>
			  		<li class="next"><?php next_comments_link( __('Comentarios recientes', 'ega') ); ?> &rarr;</li>
			  	</ul>
			  <?php 
			}
			elseif (! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
			
				<p><?php _e( 'No se permiten comentarios en este artículo.', 'ega' ); ?></p>
				</div>

				<?php return; 
			}
		} 

		comment_form();
	?>
</div><!-- fin div comments -->
