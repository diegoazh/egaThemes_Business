<?php /*
===============================================================================
###############################################################################
===============================================================================
##	THEME NAME: Business_egaThemes
##	VERSION: v1.0.0
##	AUTHOR: Diego A. Zapata Häntsch
##	AUTHOR URI: http://egalabs.com
===============================================================================
###############################################################################
===============================================================================
*/
//---------------------------------------------------------------------------------
//Cargando hojas de estilo
//---------------------------------------------------------------------------------
if (! function_exists('elgaleonargentino_styles')) {
	
	function elgaleonargentino_styles() {

		wp_register_style( 'generales', get_stylesheet_directory_uri().'/style.css', '', '1.0.0', 'all' );

		wp_enqueue_style( 'generales' );
	}
}
add_action( 'wp_enqueue_scripts', 'elgaleonargentino_styles' );

//---------------------------------------------------------------------------------
//Cargando scripts
//---------------------------------------------------------------------------------
if (! function_exists('elgaleonargentino_scripts')) {
	
	function elgaleonargentino_scripts(){

		wp_register_script( 'jQuery', 'http://code.jquery.com/jquery-1.11.2.min.js', '', '1.11.2', false );

		wp_register_script( 'bootstrap', get_stylesheet_directory_uri().'/js/bootstrap.js', array('jQuery'), '3.1.1', '' );

		wp_enqueue_script( 'bootstrap' );
	}
}
add_action( 'wp_enqueue_scripts', 'elgaleonargentino_scripts');

//---------------------------------------------------------------------------------
//Tamaño de imagenes del tema
//---------------------------------------------------------------------------------

if ( ! isset( $content_width ) ) {
	$content_width = 860;
}

//---------------------------------------------------------------------------------
//Características del tema
//---------------------------------------------------------------------------------

if ( ! function_exists( 'elgaleonargentino_setup' ) ) {

function elgaleonargentino_setup() {

	load_theme_textdomain( 'ega', get_template_directory() . '/languages' );

	add_editor_style( 'css/ega.css' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	set_post_thumbnail_size( 672, 372, true );

	//add_image_size( 'elgaleonargentino-fullwidth', 1038, 576, true );

	register_nav_menus(array(
		'menu-principal' => __('Menú principal del tema', 'ega')
	));

	register_nav_menus(array(
		'menu-small-device' => __('Menú principal del tema para dispositivos con pantalla chica', 'ega')
	));

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

	$defaults = array(
		'default-color'          => 'fcfcfc',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'wp-head-callback'       => '_custom_background_cb',
		'admin-head-callback'    => '',
		'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );

	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'elgaleonargentino_get_featured_posts',
		'max_posts' => 6,
	) );

	add_image_size( 'img-chica', 100, 0, 'false' );
	add_image_size( 'img-mediana', 160, 0, 'false' );
	add_image_size( 'img-grande', 250, 0, 'false' );
	add_image_size( 'img-muygrande', 320, 0, 'false' );
	add_image_size( 'img-extgrande', 400, 0, 'false' );
	}
}

add_action( 'after_setup_theme', 'elgaleonargentino_setup' );

//---------------------------------------------------------------------------------
//Sidebars del tema
//---------------------------------------------------------------------------------
   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$first = array(
		'name'          => __( 'Primera barra lateral', 'ega' ),
		'id'            => 'first-sidebar',
		'description'   => __( 'Se ordenan de izquierda a derecha.', 'ega' ),
		'class'         => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $first );

   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$second = array(
		'name'          => __( 'Segunda barra lateral', 'ega' ),
		'id'            => 'second-sidebar',
		'description'   => __( 'Se ordenan de izquierda a derecha.', 'ega' ),
		'class'         => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $second );

   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$third = array(
		'name'          => __( 'Tercera barra lateral', 'ega' ),
		'id'            => 'third-sidebar',
		'description'   => __( 'Se ordenan de izquierda a derecha.', 'ega' ),
		'class'         => 'sidebar-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $third );

   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$fourth = array(
		'name'          => __( 'Cuarta barra lateral', 'ega' ),
		'id'            => 'fourth-sidebar',
		'description'   => __( 'Se ordenan de izquierda a derecha.', 'ega' ),
		'class'         => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $fourth );

   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$left = array(
		'name'          => __( 'Barra lateral izquierda.', 'ega' ),
		'id'            => 'left-sidebar',
		'description'   => __( 'Se muestra en la columna izquierda del blog.', 'ega' ),
		'class'         => 'sidebar-left',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $left );

   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$right = array(
		'name'          => __( 'Barra lateral derecha.', 'ega' ),
		'id'            => 'right-sidebar',
		'description'   => __( 'Se muestra en la columna derecha de las páginas y demas archivos, pero no en el blog.', 'ega' ),
		'class'         => 'sidebar-right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $right );

//---------------------------------------------------------------------------------
//Cabecera personalizable
//---------------------------------------------------------------------------------

require get_template_directory() . '/includes/custom-header.php';

//---------------------------------------------------------------------------------
//Opciones del tema
//---------------------------------------------------------------------------------
/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/includes/' );
require_once dirname( __FILE__ ) . '/includes/options-framework.php';

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>
<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>
<style type="text/css">
	@import url("<?php echo get_stylesheet_directory_uri().'/css/option-framework.css' ?>");
</style>
<?php
}

/*
 * This is an example of filtering menu parameters
 */

/*
function prefix_options_menu_filter( $menu ) {
	$menu['mode'] = 'menu';
	$menu['page_title'] = __( 'Hello Options', 'textdomain');
	$menu['menu_title'] = __( 'Hello Options', 'textdomain');
	$menu['menu_slug'] = 'hello-options';
	return $menu;
}

add_filter( 'optionsframework_menu', 'prefix_options_menu_filter' );
*/

//---------------------------------------------------------------------------------
//Función que cambia las caracteristicas del tema utilizando los campos de theme options
//---------------------------------------------------------------------------------

require_once get_template_directory() . '/includes/ega-options-head.php';

//---------------------------------------------------------------------
// PIE DE PAGINA DEL ADMIN PERSONALIZADO
//---------------------------------------------------------------------

if (!function_exists('ega_change_footer_admin')) {
function ega_change_footer_admin() {  
    echo '&copy;2014 Copyright ElGaleonArgentino.com.ar - Todos los derechos reservados - Web creada por <a href="http://elgaleonargentino.com.ar">El Galeón Argentino</a>';  
	}
}  
add_filter('admin_footer_text', 'ega_change_footer_admin');

if(!function_exists('text_prom')){
	function text_prom(){
		$prom = "Powered by <a href=\"http://egalabs.com\" target=\"_new\">EGALABS.COM</a>";
		return $prom;
	}
}
