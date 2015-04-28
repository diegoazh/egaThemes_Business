<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php get_header(); ?>
	<section id="servicios">
		<div class="row">
			<div id="diseno" class="col-md-4">
				<?php
				$img_service1 = of_get_option( 'ega_servicios_img_1', '' );
				$url_service1 = of_get_option( 'ega_url_img_servicios_1', '');
				$tt_service1 = of_get_option( 'ega_tt_img_servicios_1', '' );
				$desc_service1 = of_get_option( 'ega_desc_img_servicios_1', '' );
				$img_service2 = of_get_option( 'ega_servicios_img_2', '' );
				$url_service2 = of_get_option( 'ega_url_img_servicios_2', '');
				$tt_service2 = of_get_option( 'ega_tt_img_servicios_2', '' );
				$desc_service2 = of_get_option( 'ega_desc_img_servicios_2', '' );
				$img_service3 = of_get_option( 'ega_servicios_img_3', '' );
				$url_service3 = of_get_option( 'ega_url_img_servicios_3', '');
				$tt_service3 = of_get_option( 'ega_tt_img_servicios_3', '' );
				$desc_service3 = of_get_option( 'ega_desc_img_servicios_3', '' );
				?>
				<a href="<?php if( $url_service1 && !empty( $url_service1 ) ) { echo $url_service1; } else { echo '#'; } ?>" title="<?php if( $tt_service1 && !empty( $tt_service1 ) ) { echo $tt_service1; } else { echo "Título no disponible"; } ?>" alt="<?php if( $tt_service1 && !empty( $tt_service1 ) ) { echo $tt_service1; } else { echo "Título no disponible"; } ?>">
				<?php if ( $img_service1 && !empty( $img_service1 ) ) { ?>
					<img src="<?php echo $img_service1 ?>" class="img-circle" title="<?php if( $tt_service1 && !empty( $tt_service1 ) ) { echo $tt_service1; } ?>" alt="<?php if( $tt_service1 && !empty( $tt_service1 ) ) {echo $tt_service1; } ?>"/>
				<?php } else { ?>
					<img src="<?php echo get_stylesheet_directory_uri().'/images/diseno.png' ?>" class="img-circle" title="Dise&nacute;o" alt="Dise&nacute;o"/>
				<?php } ?>
				</a>
				<?php if( $tt_service1 && !empty( $tt_service1 ) ) { ?>
				<h3><?php echo $tt_service1 ?></h3>
				<?php } else { ?>
				<h3>Sección A</h3>
				<?php } if( $desc_service1 && !empty( $desc_service1 ) ) { ?>
				<p><?php echo $desc_service1 ?></p>
				<?php } else { ?>
				<p>Pellentesque sit amet faucibus orci. Pellentesque accumsan diam vel libero semper auctor. Sed sodales accumsan posuere. Quisque id erat at arcu viverra consequat a sit amet enim. Vestibulum in tincidunt turpis. Nunc aliquet diam nec condimentum eleifend. In velit mauris, scelerisque a metus eget, lobortis elementum arcu. Cras vulputate risus tortor, eu sodales lacus ornare at. Morbi convallis urna ac eleifend vehicula. </p>
				<?php } ?>
			</div>
			<div id="cursos" class="col-md-4">
				<a href="<?php if( $url_service2 && !empty( $url_service2 ) ) { echo $url_service2; } else { echo '#'; } ?>" title="<?php if( $tt_service2 && !empty( $tt_service2 ) ) { echo $tt_service2; } else { echo "Título no disponible"; } ?>" alt="<?php if( $tt_service2 && !empty( $tt_service2 ) ) { echo $tt_service2; } else { echo "Título no disponible"; } ?>">
				<?php if( $img_service2 && !empty( $img_service2 ) ) { ?>
					<img src="<?php echo $img_service2 ?>" class="img-circle" title="<?php if( $tt_service2 && !empty( $tt_service2 ) ) { echo $tt_service2; } ?>" alt="<?php if( $tt_service2 && !empty( $tt_service2 ) ) { echo $tt_service2; } ?>" />
				<?php } else { ?>
					<img src="<?php echo get_stylesheet_directory_uri().'/images/cursos.png' ?>" class="img-circle" title="Cursos" alt="Cursos" />
				<?php } ?>
				</a>
				<?php if( $tt_service2 && !empty( $tt_service2 ) ) { ?>
				<h3><?php echo $tt_service2 ?></h3>
				<?php } else { ?>
				<h3>Sección B</h3>
				<?php } if( $desc_service2 && !empty( $desc_service2 ) ) { ?>
				<p><?php echo $desc_service2 ?></p>
				<?php } else { ?>
				<p>Pellentesque sit amet faucibus orci. Pellentesque accumsan diam vel libero semper auctor. Sed sodales accumsan posuere. Quisque id erat at arcu viverra consequat a sit amet enim. Vestibulum in tincidunt turpis. Nunc aliquet diam nec condimentum eleifend. In velit mauris, scelerisque a metus eget, lobortis elementum arcu. Cras vulputate risus tortor, eu sodales lacus ornare at. Morbi convallis urna ac eleifend vehicula. </p>
				<?php } ?>
			</div>
			<div id="soporte" class="col-md-4">
				<a href="<?php if( $url_service3 && !empty( $url_service3 ) ) { echo $url_service3; } else { echo '#'; } ?>" title="<?php if( $tt_service3 && !empty( $tt_service3 ) ) { echo $tt_service3; } else { echo "Título no disponible"; } ?>" alt="<?php if( $tt_service3 && !empty( $tt_service3 ) ) { echo $tt_service3; } else { echo "Título no disponible"; } ?>">
				<?php if( $img_service3 && !empty( $img_service3 ) ) { ?>
					<img src="<?php echo $img_service3 ?>" class="img-circle" title="<?php if( $tt_service3 && !empty( $tt_service3 ) ) { echo $tt_service3; } ?>" alt="<?php if( $tt_service3 && !empty( $tt_service3 ) ) { echo $tt_service3; } ?>" />
				<?php } else { ?>
					<img src="<?php echo get_stylesheet_directory_uri().'/images/soporte.png' ?>" class="img-circle" title="Soporte" alt="Soporte" />
				<?php } ?>
				</a>
				<?php if( $tt_service3 && !empty( $tt_service3 ) ) { ?>
				<h3><?php echo $tt_service3 ?></h3>
				<?php } else { ?>
				<h3>Sección C</h3>
				<?php } if( $desc_service3 && !empty( $desc_service3 ) ) { ?>
				<p><?php echo $desc_service3 ?></p>
				<?php } else { ?>
				<p>Pellentesque sit amet faucibus orci. Pellentesque accumsan diam vel libero semper auctor. Sed sodales accumsan posuere. Quisque id erat at arcu viverra consequat a sit amet enim. Vestibulum in tincidunt turpis. Nunc aliquet diam nec condimentum eleifend. In velit mauris, scelerisque a metus eget, lobortis elementum arcu. Cras vulputate risus tortor, eu sodales lacus ornare at. Morbi convallis urna ac eleifend vehicula. </p>
				<?php } ?>
			</div>
		</div>
	</section>
	<aside id="accion">
		<div class="row">
			<div id="accion-llamado" class="col-md-12">
				<?php
						$tt_accion = of_get_option( 'ega_tt_accion', '');
						$txt_accion = of_get_option( 'ega_texto_accion', '');
					if ( $tt_accion && !empty( $tt_accion ) ) { ?>
						<h3><?php echo $tt_accion ?></h3>
					<?php } else { ?>
						<h3>Título de la sección</h3>
					<?php } if ( $txt_accion && !empty( $txt_accion ) ) { ?>
						<p><?php echo $txt_accion ?></p>
					<?php } else { ?>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac metus quis metus dictum pharetra in eu ligula. Fusce a iaculis risus. Sed consequat ante urna, in suscipit erat dignissim nec. Cras ut venenatis libero. In ac sem ac ligula congue sagittis ac a nisl. Quisque et elit sit amet ante fermentum vehicula. Donec turpis urna, viverra id pulvinar ac, sodales vitae magna. Sed aliquet tristique neque, a suscipit lacus fringilla in. Proin aliquam commodo feugiat. Vestibulum ipsum urna, tempus a rutrum pulvinar, placerat sed purus. Nulla diam arcu, tincidunt vitae urna et, pulvinar adipiscing ligula. Suspendisse suscipit, tellus in lacinia convallis, orci quam facilisis justo, non tristique enim orci vitae leo. Suspendisse ac hendrerit sem, ut sollicitudin massa. Fusce lacinia ligula non erat adipiscing convallis. Nullam in vehicula mi.
							Quisque sit amet tellus ac risus mollis laoreet ut ut urna. Donec ultrices, nisl nec bibendum iaculis, arcu turpis dapibus neque, id rhoncus velit massa at mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra sed est et convallis. Nullam nunc erat, rutrum sit amet nisi ut, laoreet rutrum massa. In eros purus, placerat vestibulum fermentum eget, suscipit eget risus. Donec hendrerit erat libero, viverra aliquet nibh pretium a. Ut gravida vehicula posuere. Ut tempus rutrum turpis. Cras ut suscipit leo, quis adipiscing nibh. Phasellus vitae aliquam sapien. Duis eu dictum ante. Vestibulum quis enim convallis, mattis ligula vitae, tempor erat. Maecenas ultrices, elit eget volutpat elementum, erat arcu tempor felis, sit amet sollicitudin lacus dui sed ligula.
							Vestibulum egestas quam nisi, tempus lacinia metus pharetra id. Pellentesque mauris lacus, commodo nec metus a, facilisis convallis massa. Pellentesque luctus malesuada eros sit amet varius. Aenean tempus fermentum justo in luctus. Nam vitae malesuada purus. Ut vestibulum eros mi, non dapibus ligula ornare a. Donec consectetur tortor vitae erat semper facilisis. Donec venenatis tortor ac purus tempus, dapibus rhoncus nisi elementum. Sed malesuada justo at diam egestas ornare. Cras porta accumsan placerat. Nullam aliquam enim id metus pretium, at tempus massa eleifend.
							Donec eget dui ullamcorper, tempus magna eget, mollis enim. Morbi blandit quam in massa pretium euismod. Mauris eget gravida lectus. Nullam facilisis, neque nec sollicitudin suscipit, dui felis consequat felis, non blandit dolor nibh id velit. Aliquam lorem augue, convallis a leo sit amet, dapibus consequat sem. Nulla facilisi. Nulla hendrerit nisl ac pharetra imperdiet. Etiam fermentum, dui a pellentesque vulputate, nulla massa consectetur mi, quis consectetur leo arcu vel justo. Mauris varius ornare ante eu rutrum. Mauris eu tortor tristique, consequat orci eget, tempus urna. Ut pulvinar vulputate ullamcorper. Nunc sodales porttitor mi sit amet ornare. Maecenas eu arcu sed magna suscipit tincidunt nec ut elit. Fusce vestibulum, nunc eget sollicitudin porttitor, dolor lorem placerat nulla, ut fermentum tellus velit et lorem. Integer mollis commodo accumsan.
							Pellentesque sit amet faucibus orci. Pellentesque accumsan diam vel libero semper auctor. Sed sodales accumsan posuere. Quisque id erat at arcu viverra consequat a sit amet enim. Vestibulum in tincidunt turpis. Nunc aliquet diam nec condimentum eleifend. In velit mauris, scelerisque a metus eget, lobortis elementum arcu. Cras vulputate risus tortor, eu sodales lacus ornare at. Morbi convallis urna ac eleifend vehicula. 
						</p>
				<?php } ?>
			</div>
		</div>
	</aside>
	<section id="clientes" class="">
		<div id="container-clientes" class="row">
			<div id="images-clientes" class="col-md-12">
				<?php
					$tt_clientes = of_get_option( 'ega_tt_clientes', '' );
					$subtt_clientes = of_get_option( 'ega_subtt_clientes', '' );
					$img_cliente1 = of_get_option( 'ega_cliente_1_img', '' );
					$nombre_web_cliente1 = of_get_option( 'ega_nombreweb_clientes_1', '');
					$url_web_cliente1 = of_get_option( 'ega_dirweb_clientes_1', '');
					$subtt_cliente1 = of_get_option( 'ega_subtt_img_clientes_1', '' );
					$img_cliente2 = of_get_option( 'ega_cliente_2_img', '' );
					$nombre_web_cliente2 = of_get_option( 'ega_nombreweb_clientes_2', '');
					$url_web_cliente2 = of_get_option( 'ega_dirweb_clientes_2', '');
					$subtt_cliente2 = of_get_option( 'ega_subtt_img_clientes_2', '' );
					$img_cliente3 = of_get_option( 'ega_cliente_3_img', '' );
					$nombre_web_cliente3 = of_get_option( 'ega_nombreweb_clientes_3', '');
					$url_web_cliente3 = of_get_option( 'ega_dirweb_clientes_3', '');
					$subtt_cliente3 = of_get_option( 'ega_subtt_img_clientes_3', '');
					$img_cliente4 = of_get_option( 'ega_cliente_4_img', '' );
					$nombre_web_cliente4 = of_get_option( 'ega_nombreweb_clientes_4', '');
					$url_web_cliente4 = of_get_option( 'ega_dirweb_clientes_4', '');
					$subtt_cliente4 = of_get_option( 'ega_subtt_img_clientes_4', '');
					$img_cliente5 = of_get_option( 'ega_cliente_5_img', '' );
					$nombre_web_cliente5 = of_get_option( 'ega_nombreweb_clientes_5', '');
					$url_web_cliente5 = of_get_option( 'ega_dirweb_clientes_5', '');
					$subtt_cliente5 = of_get_option( 'ega_subtt_img_clientes_5', '' );

				if( $tt_clientes && !empty( $tt_clientes ) ) { ?>
				<h2><?php echo $tt_clientes ?></h2>
				<?php } else { ?>
				<h2>T&iacute;tulo Secci&oacute;n 2</h2>
				<?php } ?>
					<ul>
						<li>
							<a href="<?php if( $url_web_cliente1 && !empty( $url_web_cliente1 ) ) { echo $url_web_cliente1; } else { echo "http://radiocristovive.com"; } ?>" target="new">
							<?php if ( $img_cliente1 && !empty( $img_cliente1 ) ) { ?>
								<img src="<?php echo $img_cliente1 ?>" title="<?php if( $nombre_web_cliente1 && !empty( $nombre_web_cliente1 ) ) { echo $nombre_web_cliente1; } else { echo "Nombre cliente 1"; } ?>" alt="<?php if( $nombre_web_cliente1 && !empty( $nombre_web_cliente1 ) ) { echo $nombre_web_cliente1; } else { echo "Nombre cliente 1"; } ?>" class="img-rounded" />
							<?php } else { ?>
								<img src="<?php echo get_stylesheet_directory_uri().'/images/cliente-1.png' ?>" title="RadioCristoVive.com" alt="RadioCristoVive.com" class="img-rounded" />
							<?php } if( $subtt_cliente1 && !empty( $subtt_cliente1 ) ) { ?>
								<p><?php echo $subtt_cliente1 ?></p>
							<?php } else { ?>
								<p>Subtítulo cliente 1.</p>
							<?php } ?>
							</a>
						</li>
						<li>
							<a href="<?php if( $url_web_cliente2 && !empty( $url_web_cliente2 ) ) { echo $url_web_cliente2; } else { echo "http://eaglecctvc.com"; } ?>" target="new">
							<?php if( $img_cliente2 && !empty( $img_cliente2 ) ) { ?>
								<img src="<?php echo $img_cliente2 ?>" title="<?php if( $nombre_web_cliente2 && !empty( $nombre_web_cliente2 ) ) { echo $nombre_web_cliente2; } else { echo "Nombre cliente 2"; } ?>" alt="<?php if( $nombre_web_cliente2 && !empty( $nombre_web_cliente2 ) ) { echo $nombre_web_cliente2; } else { echo "Nombre cliente 2"; } ?>" class="img-rounded" />
							<?php } else { ?>
								<img src="<?php echo get_stylesheet_directory_uri().'/images/cliente-2.png' ?>" title="Eaglecctvc.com" alt="Eaglecctvc.com" class="img-rounded" />
							<?php } if( $subtt_cliente2 && !empty( $subtt_cliente2 ) ) { ?>
								<p><?php echo $subtt_cliente2 ?></p>
							<?php } else { ?>
								<P>Subtítulo cliente 2.</P>
							<?php } ?>
							</a>
						</li>
						<li>
							<a href="<?php if( $url_web_cliente3 && !empty( $url_web_cliente3 ) ) { echo $url_web_cliente3; } else { echo "http://churchfl.com"; } ?>" target="new">
							<?php if( $img_cliente3 && !empty( $img_cliente3 ) ) { ?>
								<img src="<?php echo $img_cliente3 ?>" title="<?php if( $nombre_web_cliente3 && !empty( $nombre_web_cliente3 ) ) { echo $nombre_web_cliente3; } else { echo "Nombre cliente 3"; } ?>" alt="<?php if( $nombre_web_cliente3 && !empty( $nombre_web_cliente3 ) ) { echo $nombre_web_cliente3; } else { echo "Nombre cliente 3"; } ?>" class="img-rounded" />
							<?php } else { ?>
								<img src="<?php echo get_stylesheet_directory_uri().'/images/cliente-3.png' ?>" title="Churchfl.com" alt="Churchfl.com" class="img-rounded" />
							<?php } if( $subtt_cliente3 && !empty( $subtt_cliente3 ) ) { ?>
								<p><?php echo $subtt_cliente3 ?></p>
							<?php } else { ?>
								<p>Subtítulo cliente 3.</p>
							<?php } ?>
							</a>
						</li>
						<li>
							<a href="<?php if( $url_web_cliente4 && !empty( $url_web_cliente4 ) ) { echo $url_web_cliente4; } else { echo "http://sebazapata-mex.com.ar"; } ?>" target="new">
							<?php if( $img_cliente4 && !empty( $img_cliente4 ) ) { ?>
								<img src="<?php echo $img_cliente4 ?>" title="<?php if( $nombre_web_cliente4 && !empty( $nombre_web_cliente4 ) ) { echo $nombre_web_cliente4; } else { echo "Nombre cliente 4"; } ?>" alt="<?php if( $nombre_web_cliente4 && !empty( $nombre_web_cliente4 ) ) { echo $nombre_web_cliente4; } else { echo "Nombre cliente 4"; } ?>" class="img-rounded" />
							<?php } else { ?>
								<img src="<?php echo get_stylesheet_directory_uri().'/images/cliente-4.png' ?>" title="Sebastián Zapata Häntsch" alt="Sebastián Zapata Häntsch" class="img-rounded" />
							<?php } if( $subtt_cliente4 && !empty( $subtt_cliente4 ) ) { ?>
								<p><?php echo $subtt_cliente4 ?></p>
							<?php } else { ?>
								<p>Subtítulo cliente 4.</p>
							<?php } ?>
							</a>
						</li>
						<li>
							<a href="<?php if( $url_web_cliente5 && !empty( $url_web_cliente5 ) ) { echo $url_web_cliente5; } else { echo "#"; } ?>" target="new">
							<?php if( $img_cliente5 && !empty( $img_cliente5 ) ) { ?>
								<img src="<?php echo $img_cliente5 ?>" title="<?php if( $nombre_web_cliente5 && !empty( $nombre_web_cliente5 ) ) { echo $nombre_web_cliente5; } else { echo "Nombre cliente 5"; } ?>" alt="<?php if( $nombre_web_cliente5 && !empty( $nombre_web_cliente5 ) ) { echo $nombre_web_cliente5; } else { echo "Nombre cliente 5"; } ?>" class="img-rounded" />
							<?php } else { ?>
								<img src="<?php echo get_stylesheet_directory_uri().'/images/cliente-5.png' ?>" title="Nombre cliente 5" alt="Nombre cliente 5" class="img-rounded" />
							<?php } if( $subtt_cliente5 && !empty( $subtt_cliente5 ) ) { ?>
								<p><?php echo $subtt_cliente5 ?></p>
							<?php } else { ?>
								<p>Subtítulo cliente 5</p>
							<?php } ?>
							</a>
						</li>
					</ul>
			</div>
			<?php if( $subtt_clientes && !empty( $subtt_clientes ) ) { ?>
			<h4><?php echo $subtt_clientes ?></h4>
			<?php } else { ?>
			<h4>Subt&iacute;tulo de la secci&oacute;n</h4>
			<?php } ?>
		</div>
	</section>
<?php get_footer(); ?>