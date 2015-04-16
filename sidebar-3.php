<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

	if (is_active_sidebar( 'third-sidebar' )) {
		dynamic_sidebar( 'third-sidebar' );
	}

?>