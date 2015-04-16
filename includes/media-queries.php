<?php

	if( ! is_admin() && ! in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) ) {

			if ( !isset($_GET['ancho']) ) { ?>

				<script language="JavaScript">

					location.href="<?php $_SERVER["REQUEST_URI"]; ?>?ancho=" + window.innerWidth

				</script>

				<?php exit();

			}

			$ancho = $_GET['ancho'];

/*?>			
<script type="text/javascript">
	var anchoVentana = window.innerWidth;
	document.cookie = 'ancho='+anchoVentana;
</script>
<?php
			$ancho = $_COOKIE["ancho"];
*/

			function nav_hidden() {

				global $ancho;

				if( $ancho > 1024 ) {

					echo 'hidden';

				}
			}

			function div_hidden() {

				global $ancho;

				if( $ancho <= 1024 ) {

					echo 'hidden';

				}
			}

			function nav_absolute() {

				global $ancho;

				if( $ancho <= 1024 ) {

					echo '-small-device';
				}
			}

			function styles_small_device() {

				global $ancho;

				if( $ancho <= 1024 && $ancho >= 480 ) { ?>

					<style type="text/css">
						#contenedor-header #title-header #logo-title::before {
						  content: url("<?php echo get_stylesheet_directory_uri().'/images/ega-youtube-redondo-muychico.png'?>");
						}
						footer {
						  margin-top: 0 !important;
						  padding-top: 0 !important;
						}
						#accion div #accion-llamado p {
						  columns: 2 auto;
						  column-gap: 1em !important;
						  column-rule: 1px solid #F3F3F3;
						  -webkit-columns: 2 auto;
						  -webkit-column-gap: 1em !important;
						  -webkit-column-rule: 1px solid #F3F3F3;
						  -moz-columns: 2 auto;
						  -moz-column-gap: 1em !important;
						  -moz-column-rule: 1px solid #F3F3F3;
						  -o-columns: 2 auto;
						  -o-column-gap: 1em !important;
						  -o-column-rule: 1px solid #F3F3F3;
						}
						#accion div #accion-llamado {
						  padding: 0px 7px;
						}
						#comments,
						#comments h3,
						#comments #comments-list,
						#comments #respond,
						#comments #respond form p,
						#comments #respond form p input#author,
						#comments #respond form p input#email,
						#comments #respond form p input#url {
						  min-width: 430px !important;
						  max-width: 1000px !important;
						}
					</style>
					<?php
				}
				elseif( $ancho < 480 && $ancho > 250 ) { ?>

					<style type="text/css">
						#contenedor-header #title-header #logo-title::before {
						  content: url("<?php echo get_stylesheet_directory_uri().'/images/ega-youtube-redondo-muychico.png'?>");
						}
						footer {
						  margin-top: 0 !important;
						  padding-top: 0 !important;
						}
						#accion div #accion-llamado p {
						  columns: 1 auto !important;
						  -webkit-columns: 1 auto !important;
						  -moz-columns: 1 auto !important;
						  -o-columns: 1 auto !important;
						}
						#accion div #accion-llamado {
						  padding: 0px 7px;
						}
						#comments,
						#comments h3,
						#comments #comments-list,
						#comments #respond,
						#comments #respond form p,
						#comments #respond form p input#author,
						#comments #respond form p input#email,
						#comments #respond form p input#url {
						  min-width: 250px !important;
						  max-width: 280px !important;
						}
					</style>
					<?php
				}
				elseif( $ancho <= 250 ) { ?>

					<style type="text/css">
						#contenedor-header #title-header #logo-title::before {
						  content: url("<?php echo get_stylesheet_directory_uri().'/images/ega-youtube-redondo-muychico.png'?>");
						}
						footer {
						  margin-top: 0 !important;
						  padding-top: 0 !important;
						}
						#accion div #accion-llamado p {
						  columns: 1 auto !important;
						  -webkit-columns: 1 auto !important;
						  -moz-columns: 1 auto !important;
						  -o-columns: 1 auto !important;
						}
						#accion div #accion-llamado {
						  padding: 0px 7px;
						}
						#contenedor-header #title-header #container-main-title #main-title {
						  font-size: 30px !important;
						}
						#comments,
						#comments h3,
						#comments #comments-list,
						#comments #respond,
						#comments #respond form p,
						#comments #respond form p input#author,
						#comments #respond form p input#email,
						#comments #respond form p input#url {
						  min-width: 150px !important;
						  max-width: 200px !important;
						}
					</style>
					<?php
				}
			}
	//}

?>