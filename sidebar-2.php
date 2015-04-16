<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

	if (is_active_sidebar( 'second-sidebar' )) {
		dynamic_sidebar( 'second-sidebar' );
	}

?>