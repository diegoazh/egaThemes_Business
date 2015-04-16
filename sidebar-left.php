<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

	if (is_active_sidebar( 'left-sidebar' )) {
		dynamic_sidebar( 'left-sidebar' );
	}

?>