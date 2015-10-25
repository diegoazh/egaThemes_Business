<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes('html'); ?>>
<head>
	<!-- etiquetas de meta informacion -->
	<meta charset="<?php bloginfo('charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximumscale=2.0, user-scalable=0">
	<!-- Título del sitio -->
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name' ); ?></title>
	<!-- Cargando favicon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri().'/images/favicon.ico" type="image/x-icon' ?>" />
	<!-- Apple Touch Icons -->
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri().'/images/apple-touch-icon.png' ?>" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri().'/images/apple-touch-icon-57x57.png' ?>" / >
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri().'/images/apple-touch-icon-72x72.png' ?>" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri().'/images/apple-touch-icon-114x114.png' ?>" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri().'/images/apple-touch-icon-144x144.png' ?>" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri().'/images/apple-touch-icon-60x60.png' ?>" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri().'/images/apple-touch-icon-120x120.png' ?>" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri().'/images/apple-touch-icon-76x76.png' ?>" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri().'/images/apple-touch-icon-152x152.png' ?>" />
	<!-- MailChimp -->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
	<!-- Windows 8 Tile Icons -->
    <meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri().'/images/smalltile.png' ?>" />
	<meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri().'/images/mediumtile.png' ?>" />
	<meta name="msapplication-wide310x150logo" content="<?php echo get_stylesheet_directory_uri().'/images/widetile.png' ?>" />
	<meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri().'/images/largetile.png' ?>" />
	<!-- Lineas necesarias para un correcto funcionamiento de WP -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if (is_singular()) {
		wp_enqueue_script('comment-reply' );
	} ?>
	<?php 
		wp_head();
		ega_options_head();
	?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_stylesheet_directory_uri().'js/html5shiv.js'?>"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
<div id="container-total" class="container-fluid">
	<nav id="nav-theme">
		<div class="row">
			<div id="site-logo" class="col-xs-6 col-sm-6 col-md-6">
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
					<?php $logo_ega_nav = of_get_option( 'ega_logo', get_stylesheet_directory_uri().'/images/ega.png' );
						if ( $logo_ega_nav && !empty($logo_ega_nav) ) { ?>
						<img src="<?php echo $logo_ega_nav ?>" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
					<?php } else { ?>
						<img src="<?php echo get_stylesheet_directory_uri().'/images/ega.png' ?>" title="<?php bloginfo( 'name' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
					<?php } ?>
				</a>
			</div>
			<div id="site-menu" class="col-xs-12 col-sm-12 col-md-6">
                <?php
					wp_nav_menu(array(
						'theme_location' => __('menu-principal', 'ega'),
						'menu' => 'main-menu',
						'container' => 'nav',
						'container_class' => 'container-menu-class',
						'container_id' => 'container-menu-id',
						'menu_class' => 'menu-class',
						'menu_id' => 'nav',
						'echo' => '1',
						'fallback_cb' => '',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth' => '4',
						'walker' => ''
					));										
				?>
			</div>
			<div id="menu-small-device" class="col-xs-5 col-sm-5">
                <?php
					wp_nav_menu(array(
						'theme_location' => __('menu-small-device', 'ega'),
						'menu' => 'main-menu-small-device',
						'container' => 'nav',
						'container_class' => 'container-menu-small-device-class',
						'container_id' => 'container-menu-small-device-id',
						'menu_class' => 'menu-class',
						'menu_id' => 'nav-small',
						'echo' => '1',
						'fallback_cb' => '',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth' => '4',
						'walker' => ''
					));										
				?>
			</div>
		</div>
	</nav>
	<header id="head-header">
		<div id="contenedor-header" class="row">
			<div id="title-header" class="col-xs-12 col-sm-12 col-md-6">
				<div id="logo-title" class="col-md-2"></div>
				<div id="container-main-title" class="col-md-10">
					<h1 id="main-title"><?php bloginfo('name'); ?>
						<br/>
						<br/>
						<small><?php bloginfo('description'); ?></small>
					</h1>
					<div id="social-icon">
						<?php
							$ega_fb = of_get_option( 'ega_facebook_icon', '' );
							$ega_tw = of_get_option( 'ega_twitter_icon', '' );
							$ega_gp = of_get_option( 'ega_googleplus_icon', '' );
							$ega_yt = of_get_option( 'ega_youtube_icon', '');
							$id_fb = of_get_option( 'ega_facebook_id', '' );
							$id_tw = of_get_option( 'ega_twitter_id', '' );
							$id_gp = of_get_option( 'ega_googleplus_id', '' );
							$id_yt = of_get_option( 'ega_youtube_id', '' );

						if( $ega_fb == 1 ) { ?>
						<a href="<?php if( $id_fb && !empty( $id_fb ) ) { echo "https://www.facebook.com/".$id_fb; } else { echo "#"; } ?>" target="new">
							<img src="<?php echo get_stylesheet_directory_uri().'/images/icono_facebook.png' ?>" alt="<?php if( $id_fb && !empty( $id_fb ) ) { echo $id_fb; } else { echo "#"; } ?>" title="<?php if( $id_fb && !empty( $id_fb ) ) { echo $id_fb; } else { echo "#"; } ?>" />
						</a>
						<?php }
						if( $ega_tw == 1 ) { ?>
						<a href="<?php if( $id_tw && !empty( $id_tw ) ) { echo "https://www.twitter.com/".$id_tw; } else { echo "#"; } ?>" target="new">
							<img src="<?php echo get_stylesheet_directory_uri().'/images/icono_twitter.png' ?>" alt="<?php if( $id_tw && !empty( $id_tw ) ) { echo $id_tw; } else { echo "#"; } ?>" title="<?php if( $id_tw && !empty( $id_tw ) ) { echo $id_tw; } else { echo "#"; } ?>" />
						</a>
						<?php }
						if( $ega_gp == 1 ) { ?>
						<a href="<?php if( $id_gp && !empty( $id_gp ) ) { echo "https://www.google.com/".$id_gp; } else { echo "#"; } ?>" target="new">
							<img src="<?php echo get_stylesheet_directory_uri().'/images/icono_googleplus.png' ?>" alt="<?php if( $id_gp && !empty( $id_gp ) ) { echo $id_gp; } else { echo "#"; } ?>" title="<?php if( $id_gp && !empty( $id_gp ) ) { echo $id_gp; } else { echo "#"; } ?>" />
						</a>
						<?php }
						if( $ega_yt == 1 ) { ?>
						<a href="<?php if( $id_yt && !empty( $id_yt ) ) { echo "https://www.youtube.com/user/".$id_yt; } else { echo "#"; } ?>" target="new">
							<img src="<?php echo get_stylesheet_directory_uri().'/images/icono_youtube-md.png' ?>" alt="<?php if( $id_yt && !empty( $id_yt ) ) { echo $id_yt; } else { echo "#"; } ?>" title="<?php if( $id_yt && !empty( $id_yt ) ) { echo $id_yt; } else { echo "#"; } ?>" />
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
			<div id="slider-header" class="col-xs-12 col-sm-12 col-md-6">
				<div class="container-slider">
					<div id="slider">
						<div id="mask">
							<ul>
								<li>
									<?php
										$url_slide1 = of_get_option( 'ega_url_img_slider_1', '');
											$img_slide1 = of_get_option( 'ega_slider_img_1', '' );
											$tt_slide1 = of_get_option( 'ega_tt_img_slider_1', '' );
											$desc_slide1 = of_get_option( 'ega_desc_img_slider_1', '' );
										$url_slide2 = of_get_option( 'ega_url_img_slider_2', '');
											$img_slide2 = of_get_option( 'ega_slider_img_2', '' );
											$tt_slide2 = of_get_option( 'ega_tt_img_slider_2', '' );
											$desc_slide2 = of_get_option( 'ega_desc_img_slider_2', '' );
										$url_slide3 = of_get_option( 'ega_url_img_slider_3', '');
											$img_slide3 = of_get_option( 'ega_slider_img_3', '');
											$tt_slide3 = of_get_option( 'ega_tt_img_slider_3', '' );
											$desc_slide3 = of_get_option( 'ega_desc_img_slider_3', '' );
										$url_slide4 = of_get_option( 'ega_url_img_slider_4', '');
											$img_slide4 = of_get_option( 'ega_slider_img_4', '' );
											$tt_slide4 = of_get_option( 'ega_tt_img_slider_4', '' );
											$desc_slide4 = of_get_option( 'ega_desc_img_slider_4', '' );

											if ( $img_slide1 && !empty( $img_slide1 ) ) { ?>
									<a href="<?php if( $url_slide1 && !empty( $url_slide1 ) ) { echo $url_slide1; } else { echo '#'; } ?>" title="<?php if ( $tt_slide1 && !empty( $tt_slide1 ) ) { echo $tt_slide1; } else { echo "titulo no disponible"; }?>">
											<img src="<?php echo $img_slide1 ?>" alt="<?php if( $tt_slide1 && !empty( $tt_slide1 ) ) { echo $tt_slide1; } ?>" title="<?php if( $tt_slide1 && !empty( $tt_slide1 ) ) { echo $tt_slide1; } ?>" />
									</a>
									<span>
										<?php 
										if ( $tt_slide1 && !empty( $tt_slide1 ) ) { ?>
											<h2><?php echo $tt_slide1 ?></h2>
										<?php } else { ?>
											<h2>Title 1</h2>
										<?php } 
										if ( $desc_slide1 && !empty( $desc_slide1 ) ) { ?>
											<p><?php echo $desc_slide1 ?></p>
										<?php } else { ?>
											<p>Lorem ipsum dolor...</p>
										<?php } ?>
									</span>
										<?php } else { 
							                        $slide_posts = new WP_Query("post_type=post&post_status=publish");
							                        if ( $slide_posts->have_posts() ) : 
												        while ($slide_posts->have_posts()) :
												            $slide_posts->the_post(); 
												        	$post_actual = $slide_posts -> current_post;
												        	if($post_actual == 0) { ?>
	                                    						<h1><?php the_title(); ?></h1>
								                                <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary "><?php _e('Leer más...', 'ega'); ?></a></p>
								                                <div>
								                                    <?php
								                                        the_excerpt();
								                                    ?>
								                                </div>
                                    						<?php }
												        endwhile;
							                        else:
							                            get_template_part('loops/loop', 'empty');
							                        endif; 
							                        wp_reset_postdata();											
												} ?>
								</li>
								<li>
										<?php 
										if ( $img_slide2 && !empty( $img_slide2 ) ) { ?>
									<a href="<?php if( $url_slide2 && !empty( $url_slide2 ) ) { echo $url_slide2; } else { echo '#'; } ?>" title="<?php if ( $tt_slide2 && !empty( $tt_slide2 ) ) { echo $tt_slide2; } else { echo "titulo no disponible"; }?>">
											<img src="<?php echo $img_slide2 ?>" alt="<?php if( $tt_slide2 && !empty( $tt_slide2 ) ) { echo $tt_slide2; } ?>" title="<?php if( $tt_slide2 && !empty( $tt_slide2 ) ) { echo $tt_slide2; } ?>" />
									</a>
									<span>
										<?php if ( $tt_slide2 && !empty( $tt_slide2 ) ) { ?>
											<h2><?php echo $tt_slide2 ?></h2>
										<?php } else { ?>
											<h2>Title 2</h2>
										<?php } 
										if ( $desc_slide2 && !empty( $desc_slide2 ) ) { ?>
											<p><?php echo $desc_slide2 ?></p>
										<?php } else { ?>
											<p>Lorem ipsum dolor...</p>
										<?php } ?>
									</span>
										<?php } else { 
							                        $slide_posts = new WP_Query("post_type=post&post_status=publish");
							                        if ( $slide_posts->have_posts() ) : 
												        while ($slide_posts->have_posts()) :
												            $slide_posts->the_post(); 
												        	$post_actual = $slide_posts -> current_post;
												        	if($post_actual == 1) { ?>
	                                    						<h1><?php the_title(); ?></h1>
								                                <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary "><?php _e('Leer más...', 'ega'); ?></a></p>
								                                <div>
								                                    <?php
								                                        the_excerpt();
								                                    ?>
								                                </div>
                                    						<?php }
												        endwhile;
							                        else:
							                            get_template_part('loops/loop', 'empty');
							                        endif; 
							                        wp_reset_postdata();											
												} ?>
								</li>
								<li>
										<?php 
										if ( $img_slide3 && !empty( $img_slide3 ) ) { ?>
									<a href="<?php if( $url_slide3 && !empty( $url_slide3 ) ) { echo $url_slide3; } else { echo '#'; } ?>" title="<?php if ( $tt_slide3 && !empty( $tt_slide3 ) ) { echo $tt_slide3; } else { echo "titulo no disponible"; }?>">
										 	<img src="<?php echo $img_slide3 ?>" alt="<?php if( $tt_slide3 && !empty( $tt_slide3 ) ) { echo $tt_slide3; } ?>" title="<?php if( $tt_slide3 && !empty( $tt_slide3 ) ) { echo $tt_slide3; } ?>" />
									</a>
									<span>
										<?php if ( $tt_slide3 && !empty( $tt_slide3 ) ) { ?>
											<h2><?php echo $tt_slide3 ?></h2>
										<?php } else { ?>
											<h2>Title 3</h2>
										<?php } 
										if ( $desc_slide3 && !empty( $desc_slide3 ) ) { ?>
											<p><?php echo $desc_slide3 ?></p>
										<?php } else { ?>
											<p>Lorem ipsum dolor...</p>
										<?php } ?>
									</span>
										<?php } else { 
							                        $slide_posts = new WP_Query("post_type=post&post_status=publish");
							                        if ( $slide_posts->have_posts() ) : 
												        while ($slide_posts->have_posts()) :
												            $slide_posts->the_post(); 
												        	$post_actual = $slide_posts -> current_post;
												        	if($post_actual == 2) { ?>
	                                    						<h1><?php the_title(); ?></h1>
								                                <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary "><?php _e('Leer más...', 'ega'); ?></a></p>
								                                <div>
								                                    <?php
								                                        the_excerpt();
								                                    ?>
								                                </div>
                                    						<?php }
												        endwhile;
							                        else:
							                            get_template_part('loops/loop', 'empty');
							                        endif; 
							                        wp_reset_postdata();											
												} ?>
								</li>
								<li>			
										<?php 
										if ( $img_slide4 && !empty( $img_slide4 ) ) { ?>
									<a href="<?php if( $url_slide4 && !empty( $url_slide4 ) ) { echo $url_slide4; } else { echo '#'; } ?>" title="<?php if ( $tt_slide4 && !empty( $tt_slide4 ) ) { echo $tt_slide4; } else { echo "titulo no disponible"; }?>">
											<img src="<?php echo $img_slide4 ?>" alt="<?php if( $tt_slide4 && !empty( $tt_slide4 ) ) { echo $tt_slide4; } ?>" title="<?php if( $tt_slide4 && !empty( $tt_slide4 ) ) { echo $tt_slide4; } ?>" />
									</a>
									<span>
										<?php if ( $tt_slide4 && !empty( $tt_slide4 ) ) { ?>
											<h2><?php echo $tt_slide4 ?></h2>
										<?php } else { ?>
											<h2>Title 4</h2>
										<?php }
										if ( $desc_slide4 && !empty( $desc_slide4 ) ) { ?>
											<p><?php echo $desc_slide4 ?></p>
										<?php } else { ?>
											<p>Lorem ipsum dolor...</p>
										<?php } ?>
									</span>
										<?php } else { 
							                        $slide_posts = new WP_Query("post_type=post&post_status=publish");
							                        if ( $slide_posts->have_posts() ) : 
												        while ($slide_posts->have_posts()) :
												            $slide_posts->the_post(); 
												        	$post_actual = $slide_posts -> current_post;
												        	if($post_actual == 3) { ?>
	                                    						<h1><?php the_title(); ?></h1>
								                                <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary "><?php _e('Leer más...', 'ega'); ?></a></p>
								                                <div>
								                                    <?php
								                                        the_excerpt();
								                                    ?>
								                                </div>
                                    						<?php }
												        endwhile;
							                        else:
							                            get_template_part('loops/loop', 'empty');
							                        endif; 
							                        wp_reset_postdata();											
												} ?>
								</li>
							</ul>
						</div>
						<div id="progress">
						</div>
 						<div id="overlay">
						</div>
						<div id="pause">
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
