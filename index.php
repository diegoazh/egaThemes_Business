<?php
	// File Security Check
	if( !function_exists('wp') && !empty($_SERVER['SCRIPT_FILENAME']) && basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME']) ) {
		die ( 'You do not have sufficient permissions to access this page!' );
	}

	get_header(); 
?>
<div class="row">
	<div id="widget-left" class="col-md-2 hidden-xs hidden-sm">
		<?php get_sidebar( 'left' ); ?>
	</div>
	<div id="main-content" class="col-md-8">
		<?php if ( is_category() ) : ?>
		<div class="alert alert-info">
			<p><?php _e('Artículos en la categoría', 'ega');?>: 
				<strong><?php single_cat_title(); ?></strong>
			</p>
		</div>
		<?php elseif ( is_tag() ) : ?>
		<div class="alert alert-info">
			<p><?php _e('Artículos etiquetados como', 'ega'); ?>:
				<strong><?php single_tag_title(); ?></strong>
			</p>
		</div>
		<?php elseif ( is_day() ) : ?>
		<div class="alert alert-info">
			<p><?php _e('Archivo', 'ega');?>:
				<strong><?php the_date(); ?></strong>
			</p>
		</div>
		<?php elseif ( is_month() ) : ?>
		<div class="alert alert-info">
			<p><?php _e('Archivo', 'ega');?>:
				<strong><?php the_date('F Y'); ?></strong>
			</p>
		</div>
		<?php elseif ( is_year() ) : ?>
		<div class="alert alert-info">
			<p><?php _e('Archivo', 'ega'); ?>:
				<strong><?php the_date('Y'); ?></strong>
			</p>
		</div>
		<?php elseif ( is_search() ) : ?>
		<div class="alert alert-info">
			<p><?php _e('Resultados para', 'ega'); ?>:
				<strong><?php echo the_search_query(); ?></strong>
			</p>
		</div>
		<?php elseif ( is_author() ) : ?>
		<div class="alert alert-info">
			<p><?php _e('Artículos por', 'ega'); ?>:
				<strong>
					<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) :
						get_userdata(intval($author));
						echo $curauth->display_name;
					?>
				</strong>
			</p>
		</div>
		<?php elseif ( is_404() ) : ?>
		<div class="alert alert-danger">
			<p>
				<strong><?php _e('Error 404', 'ega');?>:</strong> <?php _e('Página no	encontrada', 'ega');?>
			</p>
		</div>
		<?php endif; ?>
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