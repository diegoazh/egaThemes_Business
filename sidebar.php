<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php 

	if (is_active_sidebar( 'first-sidebar' )) {
		dynamic_sidebar( 'first-sidebar' );
	}

?>