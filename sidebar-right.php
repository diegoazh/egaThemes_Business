<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

	if (is_active_sidebar( 'right-sidebar' )) {
		dynamic_sidebar( 'right-sidebar' );
	}

?>