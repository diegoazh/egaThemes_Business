<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	$options[] = array(
		'name' => __('Cabecera', 'ega'),
		'type' => 'heading');

		$options[] = array(
			'name' => __('---- Logo -----', 'ega'),
			'desc' => __('Seleciona el logo del menú de la web. Ancho máximo sugerido 120px, alto máximo sugerido 40px.', 'ega'),
			'id' => 'ega_logo',
			'type' => 'upload');

		$options[] = array(
			'name' => __('----- Logo Cabecera -----', 'ega'),
			'desc' => __('Seleciona el logo de la cabecera. Tamaño máximo sugerido 400x400 px.', 'ega'),
			'id' => 'ega_logohead',
			'type' => 'upload');

		$options[] = array(
			'name' => __('----- Imagen  de fondo de la cabecera -----', 'ega'),
			'desc' => __('Selecciona la imagen que deseas que se vea en el fondo de la cabecera de la página frontal. Tamaño sugerido 1600x450 px', 'ega'),
			'id' => 'ega_fondo_cabecera',
			'type' => 'upload');

		$options[] = array(
			'name' => __('----- Imagen 1 del Slider -----', 'ega'),
			'desc' => __('Seleciona la primera imagen del slider de la página forntal. La imagen debe ser de 600x200 px', 'ega'),
			'id' => 'ega_slider_img_1',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Link 1º imagen slider', 'ega'),
			'desc' => __('URL absoluta de la primera imgen del slider.', 'ega'),
			'id' => 'ega_url_img_slider_1',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'type' => 'text');

		$options[] = array(
			'name' => __('Título 1º imagen slider', 'ega'),
			'desc' => __('Título corto de la primera imgen del slider.', 'ega'),
			'id' => 'ega_tt_img_slider_1',
			'std' => '',
			'placeholder' => 'Ingrese el título.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Descripción 1º imagen slider', 'ega'),
			'desc' => __('Descripción corta de la primera imgen del slider.', 'ega'),
			'id' => 'ega_desc_img_slider_1',
			'std' => '',
			'placeholder' => 'Ingrese la descripción.',
			'type' => 'textarea');

		$options[] = array(
			'name' => __('----- Imagen 2 del Slider -----', 'ega'),
			'desc' => __('Seleciona la segunda imagen del slider de la página forntal. La imagen debe ser de 600x200 px', 'ega'),
			'id' => 'ega_slider_img_2',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Link 2º imagen slider', 'ega'),
			'desc' => __('URL absoluta de la segunda imgen del slider.', 'ega'),
			'id' => 'ega_url_img_slider_2',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'type' => 'text');

		$options[] = array(
			'name' => __('Título 2º imagen slider', 'ega'),
			'desc' => __('Título corto de la segunda imgen del slider.', 'ega'),
			'id' => 'ega_tt_img_slider_2',
			'std' => '',
			'placeholder' => 'Ingrese el título.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Descripción 2º imagen slider', 'ega'),
			'desc' => __('Descripción corta de la segunda imgen del slider.', 'ega'),
			'id' => 'ega_desc_img_slider_2',
			'std' => '',
			'placeholder' => 'Ingrese la descripción.',
			'type' => 'textarea');

		$options[] = array(
			'name' => __('----- Imagen 3 del Slider -----', 'ega'),
			'desc' => __('Seleciona la tercera imagen del slider de la página forntal. La imagen debe ser de 600x200 px', 'ega'),
			'id' => 'ega_slider_img_3',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Link 3º imagen slider', 'ega'),
			'desc' => __('URL absoluta de la tercera imgen del slider.', 'ega'),
			'id' => 'ega_url_img_slider_3',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'type' => 'text');

		$options[] = array(
			'name' => __('Título 3º imagen slider', 'ega'),
			'desc' => __('Título corto de la tercera imgen del slider.', 'ega'),
			'id' => 'ega_tt_img_slider_3',
			'std' => '',
			'placeholder' => 'Ingrese el título.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Descripción 3º imagen slider', 'ega'),
			'desc' => __('Descripción corta de la tercera imgen del slider.', 'ega'),
			'id' => 'ega_desc_img_slider_3',
			'std' => '',
			'placeholder' => 'Ingrese la descripción.',
			'type' => 'textarea');

		$options[] = array(
			'name' => __('----- Imagen 4 del Slider -----', 'ega'),
			'desc' => __('Seleciona la cuarta imagen del slider de la página forntal. La imagen debe ser de 600x200 px', 'ega'),
			'id' => 'ega_slider_img_4',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Link 4º imagen slider', 'ega'),
			'desc' => __('URL absoluta de la cuarta imgen del slider.', 'ega'),
			'id' => 'ega_url_img_slider_4',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'type' => 'text');

		$options[] = array(
			'name' => __('Título 4º imagen slider', 'ega'),
			'desc' => __('Título corto de la cuarta imgen del slider.', 'ega'),
			'id' => 'ega_tt_img_slider_4',
			'std' => '',
			'placeholder' => 'Ingrese el título.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Descripción 4º imagen slider', 'ega'),
			'desc' => __('Descripción corta de la cuarta imgen del slider.', 'ega'),
			'id' => 'ega_desc_img_slider_4',
			'std' => '',
			'placeholder' => 'Ingrese la descripción.',
			'type' => 'textarea');

	$options[] = array(
		'name' => __('Servicios', 'ega'),
		'type' => 'heading');

		$options[] = array(
			'name' => __('----- Imagen 1 de nuestros servicios -----', 'ega'),
			'desc' => __('Seleciona la primera imagen que represente un servicio que ofrece de tu empresa. Ancho sugerido 130px.', 'ega'),
			'id' => 'ega_servicios_img_1',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Link 1º imagen de servicios', 'ega'),
			'desc' => __('URL absoluta de la primera imgen de tus servicios.', 'ega'),
			'id' => 'ega_url_img_servicios_1',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'type' => 'text');

		$options[] = array(
			'name' => __('Título 1º imagen de servicios', 'ega'),
			'desc' => __('Título corto de la primera imgen de tus servicios.', 'ega'),
			'id' => 'ega_tt_img_servicios_1',
			'std' => '',
			'placeholder' => 'Ingrese el título.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Descripción 1º imagen de servicios', 'ega'),
			'desc' => __('Descripción corta de la primera imgen de tus servicios.', 'ega'),
			'id' => 'ega_desc_img_servicios_1',
			'std' => '',
			'placeholder' => 'Ingrese la descripción.',
			'type' => 'textarea');

		$options[] = array(
			'name' => __('----- Imagen 2 de nuestros servicios -----', 'ega'),
			'desc' => __('Seleciona la segunda imagen que represente un servicio que ofrece de tu empresa. Ancho sugerido 130px.', 'ega'),
			'id' => 'ega_servicios_img_2',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Link 2º imagen de servicios', 'ega'),
			'desc' => __('URL absoluta de la segunda imgen de tus servicios.', 'ega'),
			'id' => 'ega_url_img_servicios_2',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'type' => 'text');

		$options[] = array(
			'name' => __('Título 2º imagen de servicios', 'ega'),
			'desc' => __('Título corto de la segunda imgen de tus servicios.', 'ega'),
			'id' => 'ega_tt_img_servicios_2',
			'std' => '',
			'placeholder' => 'Ingrese el título.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Descripción 2º imagen de servicios', 'ega'),
			'desc' => __('Descripción corta de la segunda imgen de tus servicios.', 'ega'),
			'id' => 'ega_desc_img_servicios_2',
			'std' => '',
			'placeholder' => 'Ingrese la descripción.',
			'type' => 'textarea');

		$options[] = array(
			'name' => __('----- Imagen 3 de nuestros servicios -----', 'ega'),
			'desc' => __('Seleciona la tercera imagen que represente un servicio que ofrece de tu empresa. Ancho sugerido 130px.', 'ega'),
			'id' => 'ega_servicios_img_3',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Link 3º imagen de servicios', 'ega'),
			'desc' => __('URL absoluta de la tercera imgen de tus servicios.', 'ega'),
			'id' => 'ega_url_img_servicios_3',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'type' => 'text');

		$options[] = array(
			'name' => __('Título 3º imagen de servicios', 'ega'),
			'desc' => __('Título corto de la tercera imgen de tus servicios.', 'ega'),
			'id' => 'ega_tt_img_servicios_3',
			'std' => '',
			'placeholder' => 'Ingrese el título.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Descripción 3º imagen de servicios', 'ega'),
			'desc' => __('Descripción corta de la tercera imgen de tus servicios.', 'ega'),
			'id' => 'ega_desc_img_servicios_3',
			'std' => '',
			'placeholder' => 'Ingrese la descripción.',
			'type' => 'textarea');

	$options[] = array(
		'name' => __('Llamado a la acción', 'ega'),
		'type' => 'heading');

		$options[] = array(
			'name' => __('----- Imagen de fondo de la sección llamado a la acción -----', 'ega'),
			'desc' => __('Seleciona la imagen que quieras para esta sección. Tamaño sugerido 1583x716 px.', 'ega'),
			'id' => 'ega_fondo_accion_img',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Título de la sección llamado a la acción', 'ega'),
			'desc' => __('Título corto de la sección llamado a la acción.', 'ega'),
			'id' => 'ega_tt_accion',
			'std' => '',
			'placeholder' => 'Ingrese el título.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Texto de la sección llamado a la acción', 'ega'),
			'desc' => __('Ingrese el texto que motivará a sus clientes a contratar sus servicios. Motivelos a contratar con Ud.', 'ega'),
			'id' => 'ega_texto_accion',
			'std' => '',
			'placeholder' => 'Ingrese su texto aquí.',
			'type' => 'textarea');

	$options[] = array(
		'name' => __('Clientes', 'ega'),
		'type' => 'heading');

		$options[] = array(
			'name' => __('Título de la sección clientes', 'ega'),
			'desc' => __('Título corto de la sección clientes.', 'ega'),
			'id' => 'ega_tt_clientes',
			'std' => '',
			'placeholder' => 'Ingrese el título.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Subtítulo de la sección clientes', 'ega'),
			'desc' => __('Subtítulo corto de la sección clientes.', 'ega'),
			'id' => 'ega_subtt_clientes',
			'std' => '',
			'placeholder' => 'Ingrese el subtítulo.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('----- Imagen cliente 1 -----', 'ega'),
			'desc' => __('Seleciona la imagen del primer cliente. Tamaño sugerido 450x338 px.', 'ega'),
			'id' => 'ega_cliente_1_img',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Nombre de la web cliente 1', 'ega'),
			'desc' => __('Escribe aquí el nombre del sitio web de tu primer cliente.', 'ega'),
			'id' => 'ega_nombreweb_clientes_1',
			'std' => '',
			'placeholder' => 'Ingrese el nombre de la web.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Dirección web cliente 1', 'ega'),
			'desc' => __('Escribe aquí la dirección web de tu primer cliente.', 'ega'),
			'id' => 'ega_dirweb_clientes_1',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Subtítulo de la imagen cliente 1', 'ega'),
			'desc' => __('Subtítulo corto de la imagen cliente 1.', 'ega'),
			'id' => 'ega_subtt_img_clientes_1',
			'std' => '',
			'placeholder' => 'Ingrese el subtítulo.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('----- Imagen cliente 2 -----', 'ega'),
			'desc' => __('Seleciona la imagen del segundo cliente. Tamaño sugerido 450x338 px.', 'ega'),
			'id' => 'ega_cliente_2_img',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Nombre de la web cliente 2', 'ega'),
			'desc' => __('Escribe aquí el nombre del sitio web de tu segundo cliente.', 'ega'),
			'id' => 'ega_nombreweb_clientes_2',
			'std' => '',
			'placeholder' => 'Ingrese el nombre de la web.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Dirección web cliente 2', 'ega'),
			'desc' => __('Escribe aquí la dirección web de tu segundo cliente.', 'ega'),
			'id' => 'ega_dirweb_clientes_2',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Subtítulo de la imagen cliente 2', 'ega'),
			'desc' => __('Subtítulo corto de la imagen cliente 2.', 'ega'),
			'id' => 'ega_subtt_img_clientes_2',
			'std' => '',
			'placeholder' => 'Ingrese el subtítulo.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('----- Imagen cliente 3 -----', 'ega'),
			'desc' => __('Seleciona la imagen del tercer cliente. Tamaño sugerido 450x338 px.', 'ega'),
			'id' => 'ega_cliente_3_img',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Nombre de la web cliente 3', 'ega'),
			'desc' => __('Escribe aquí el nombre del sitio web de tu tercer cliente.', 'ega'),
			'id' => 'ega_nombreweb_clientes_3',
			'std' => '',
			'placeholder' => 'Ingrese el nombre de la web.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Dirección web cliente 3', 'ega'),
			'desc' => __('Escribe aquí la dirección web de tu tercer cliente.', 'ega'),
			'id' => 'ega_dirweb_clientes_3',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Subtítulo de la imagen cliente 3', 'ega'),
			'desc' => __('Subtítulo corto de la imagen cliente 3.', 'ega'),
			'id' => 'ega_subtt_img_clientes_3',
			'std' => '',
			'placeholder' => 'Ingrese el subtítulo.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('----- Imagen cliente 4 -----', 'ega'),
			'desc' => __('Seleciona la imagen del cuarto cliente. Tamaño sugerido 450x338 px.', 'ega'),
			'id' => 'ega_cliente_4_img',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Nombre de la web cliente 4', 'ega'),
			'desc' => __('Escribe aquí el nombre del sitio web de tu cuarto cliente.', 'ega'),
			'id' => 'ega_nombreweb_clientes_4',
			'std' => '',
			'placeholder' => 'Ingrese el nombre de la web.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Dirección web cliente 4', 'ega'),
			'desc' => __('Escribe aquí la dirección web de tu cuarto cliente.', 'ega'),
			'id' => 'ega_dirweb_clientes_4',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Subtítulo de la imagen cliente 4', 'ega'),
			'desc' => __('Subtítulo corto de la imagen cliente 4.', 'ega'),
			'id' => 'ega_subtt_img_clientes_4',
			'std' => '',
			'placeholder' => 'Ingrese el subtítulo.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('----- Imagen cliente 5 -----', 'ega'),
			'desc' => __('Seleciona la imagen del quinto cliente. Tamaño sugerido 450x338 px.', 'ega'),
			'id' => 'ega_cliente_5_img',
			'type' => 'upload');

		$options[] = array(
			'name' => __('Nombre de la web cliente 5', 'ega'),
			'desc' => __('Escribe aquí el nombre del sitio web de tu quinto cliente.', 'ega'),
			'id' => 'ega_nombreweb_clientes_5',
			'std' => '',
			'placeholder' => 'Ingrese el nombre de la web.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Dirección web cliente 5', 'ega'),
			'desc' => __('Escribe aquí la dirección web de tu quinto cliente.', 'ega'),
			'id' => 'ega_dirweb_clientes_5',
			'std' => '',
			'placeholder' => 'Ingrese la URL.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('Subtítulo de la imagen cliente 5', 'ega'),
			'desc' => __('Subtítulo corto de la imagen cliente 5.', 'ega'),
			'id' => 'ega_subtt_img_clientes_5',
			'std' => '',
			'placeholder' => 'Ingrese el subtítulo.',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('----- Texto del copyright -----', 'ega'),
			'desc' => __('Agrega aquí tu texto de copyright, el simbolo de copyright y la palabra copyright ya están agregadas, solo debes agregar lo que sigue.', 'ega'),
			'id' => 'ega_copyright',
			'std' => '',
			'placeholder' => 'Ingrese el texto de copyright',
			'type' => 'text');

	$options[] = array(
		'name' => __('Redes Sociales', 'ega'),
		'type' => 'heading');

		$options[] = array(
			'name' => __('----- Icono de Facebook -----', 'ega'),
			'desc' => __('Si está seleccionada esta opción el ícono de Facebook se hará visible.', 'ega'),
			'id' => 'ega_facebook_icon',
			'std' => '1',
			'type' => 'checkbox');

		$options[] =array(
			'name' => __('ID de Facebook', 'ega'),
			'desc' => __('Aquí debes poner solamente tu id de facebook. Ejemplo: En http://www.facebook.com/elgaleonargentino, el id es unicamente elgaleonargentino', 'ega'),
			'id' => 'ega_facebook_id',
			'std' => '',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('----- Icono de Twitter -----', 'ega'),
			'desc' => __('Si está seleccionada esta opción el ícono de Twitter se hará visible.', 'ega'),
			'id' => 'ega_twitter_icon',
			'std' => '1',
			'type' => 'checkbox');

		$options[] =array(
			'name' => __('ID de Twitter', 'ega'),
			'desc' => __('Aquí debes poner solamente tu id de twitter. Ejemplo: En http://www.twitter.com/GaleonArgentino, el id es unicamente GaleonArgentino', 'ega'),
			'id' => 'ega_twitter_id',
			'std' => '',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('----- Icono de Google+ -----', 'ega'),
			'desc' => __('Si está selecciona esta opción el ícono de Google+ se hará visible.', 'ega'),
			'id' => 'ega_googleplus_icon',
			'std' => '1',
			'type' => 'checkbox');

		$options[] =array(
			'name' => __('ID de Google+', 'ega'),
			'desc' => __('Con las nuevas URLs personalizadas de Google+ aquí solo debes poner tu id. Ejemplo: En https://www.google.com/+ElGaleonArgentino, el id es unicamente +ElGaleonArgentino', 'ega'),
			'id' => 'ega_googleplus_id',
			'std' => '',
			'class' => 'mini',
			'type' => 'text');

		$options[] = array(
			'name' => __('----- Icono de YouTube -----', 'ega'),
			'desc' => __('Si está selecciona esta opción el ícono de Google+ se hará visible.', 'ega'),
			'id' => 'ega_youtube_icon',
			'std' => '1',
			'type' => 'checkbox');

		$options[] =array(
			'name' => __('ID de YouTube', 'ega'),
			'desc' => __('Con las nuevas URLs personalizadas de Google+ aquí solo debes poner tu id. Ejemplo: En https://www.youtube.com/user/elgaleonargentino, el id es unicamente elgaleonargentino', 'ega'),
			'id' => 'ega_youtube_id',
			'std' => '',
			'class' => 'mini',
			'type' => 'text');

	return $options;
}