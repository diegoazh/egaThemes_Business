<?php

if ( ! function_exists( 'ega_options_head' ) ) {

	function ega_options_head() { ?>

		<style type="text/css">

			<?php

				$logo_ega_cabecera = of_get_option( 'ega_logohead', '' );

				if( $logo_ega_cabecera && !empty( $logo_ega_cabecera ) ) { ?>

					#contenedor-header #title-header #logo-title::before{
						content: url("<?php echo $logo_ega_cabecera ?>") !important;
					}

				<?php }

				$fondo_cabecera = of_get_option( 'ega_fondo_cabecera', '' );

				if ( $fondo_cabecera && !empty( $fondo_cabecera ) ) { ?>
				 	
				 	#contenedor-header{
				 		background-image: url("<?php echo $fondo_cabecera ?>") !important;
				 	}

				<?php }

				$fondo_accion_div = of_get_option( 'ega_fondo_accion_img', '' );

				if( $fondo_accion_div && !empty( $fondo_accion_div ) ) { ?>

					#accion div {
						background-image: url("<?php echo $fondo_accion_div ?>") !important;
					}

				<?php }

				$img_slide1 = of_get_option( 'ega_slider_img_1', '' );
				$img_slide2 = of_get_option( 'ega_slider_img_2', '' );
				$img_slide3 = of_get_option( 'ega_slider_img_3', '' );
				$img_slide4 = of_get_option( 'ega_slider_img_4', '' );

				if( empty( $img_slide1 ) || empty ( $img_slide2 ) || empty( $img_slide3 ) || empty( $img_slide4 ) ) { ?>

					#slider{
						background-color:#FCFCFC !important;
					}
					#overlay{
						background-image:none !important;
					}
					#slider li{
						background-image:none !important;
						position: static !important;
						padding: 0px 7px !important;
					}

				<?php }

			?>
		</style>
	<?php
	}
}

?>