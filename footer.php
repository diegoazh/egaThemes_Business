<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
	<footer>
		<div id="widgets-dinamicos" class="row">
			<div id="pri" class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
			<div id="seg" class="col-md-3">
				<?php get_sidebar(2); ?>
			</div>
			<div id="ter" class="col-md-3">
				<?php get_sidebar(3); ?>
			</div>
			<div id="cua" class="col-md-3">
				<?php get_sidebar(4); ?>
			</div>
			<div id="copyright" class="col-md-12">
			<?php
			$copyright_footer = of_get_option( 'ega_copyright', '' );

			if( $copyright_footer && !empty( $copyright_footer ) ) { ?>
				<p>
					<strong>
						Copyright &#169; <?php echo $copyright_footer ?>
					</strong>
				</p>
			<?php } else { ?>
				<p>
					<strong>
						Copyright &#169; Tu texto iría aquí.
					</strong>
				</p>
			<?php } ?>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>