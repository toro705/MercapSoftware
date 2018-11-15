<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'home');

 	$metas = array(
		'titulo' 		=> 'Mercap',
		'descripcion' 	=> '',
		'img' 			=> '',
		'slider' 		=> '',
	);

	include('header.php');

?>

	<article>
		<?php array_push($js, 'slider-principal');
			$slider_principal = array(
	        array(
	        	'',
	        	''
	        	),
	      );
		?>
		<div class="video-background" style="width: 100%;" data-vide-bg="images/home.mp4" data-vide-options="loop: true, muted: false, position: 0% 0%, resizing: true">
			<div class="mascara" background="images/slider-principal/1-1920-x1.png">	</div>
		</div>
		<div class="slider-principal">
			<div class="owl-carousel">
		      		<div class="item">
						  <img class="img-responsive slider-principal__imagen" src="images/slider-principal/2-1920-x1.png">
					      <div class="slider-principal__contenido">
						      	<div class="container">
						      		<div class="row">  
							      		<div class="col-xs-12">
							      			<div class="slider-principal__texto">
							      				<h1 class="h1 color-1 text-center">Tecnología financiera <br>con más de 20 años <br>de experiencia</h1>
							      			</div>
							      		</div>
							      	</div>
						      	</div>
				      </div>
				    </div>
		      		<div class="item">
						  <img class="img-responsive slider-principal__imagen" src="images/slider-principal/2-1920-x1.png">
					      <div class="slider-principal__contenido">
						      	<div class="container">
						      		<div class="row">  
							      		<div class="col-xs-12">
							      			<div class="slider-principal__texto">
							      				<h1 class="h1 color-1 text-center">Innovación y calidad <br>al servicio del <br>mercado financiero</h1>
							      			</div>
							      		</div>
							      	</div>
						      	</div>
					      </div>
				    </div>
		      		<div class="item">
						  <img class="img-responsive slider-principal__imagen" src="images/slider-principal/2-1920-x1.png">
					      <div class="slider-principal__contenido">
						      	<div class="container">
						      		<div class="row">  
							      		<div class="col-xs-12">
							      			<div class="slider-principal__texto">
							      				<h1 class="h1 color-1 text-center">diseño, know how <br>y cultura de servicio<br><br></h1>
							      			</div>
							      		</div>
							      	</div>
						      	</div>
					      </div>
				    </div>
			</div>
			<div class="clearfix"></div>
			<a href="#nuestras-soluciones-1" class="godown bg-5 hidden-xs"><img src="images/arrow.png" alt="">
			</a>
		</div>
		<div class="clearfix"></div>
		<section id="nuestras-soluciones-1" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="text-center color-3">
							<hr> <span>Nuestras Soluciones</span>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="nuestras-soluciones-1__head relative">
							<div class="soluciones-1__img animated wow imgzoomin hidden-xs" data-wow-duration="2500ms" data-wow-delay="0ms"></div>
							<img src="images/01.jpg" alt="01" class="img-responsive visible-xs">
							<div class="recuadro-azul absolute">
								<p>Mercap Unitrade</p>
								<small>Custodia y Tesorería</small>
							</div>
							<p class="absolute">01</p>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row nuestras-soluciones-1__detail">
							<div class="col-sm-7 pull-right">
								<p class="paragraph-1">Mercap Unitrade es una solución diseñada especialmente para el mercado bancario, comprendiendo los negocios de las Mesas de Dinero, Títulos, Cambios, Tesorería y Custodia. Contempla la operatoria completa de front-to-back office, gestión de la cartera propia y atención a clientes corporativos. También permite la gestión de operaciones de clientes minoristas a través de las órdenes recibidas desde sus módulos web de gestión de Sucursales y Call Center y servicios de integración con el Home Banking.</p>
								<a data-text="Más Información" href="<?=url('mercap-unitrade')?>" class="btn btn-redondeado button--winona"><span>Más Información</span></a>
							</div>
							<div class="col-sm-5 col-md-4 pull-left animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="100ms">
								<p class="paragraph-2">«Con Mercap Unitrade hemos logrado conjugar un trabajo en equipo con capacidad de respuesta a los permanentes requerimientos evolutivos de la institución.»</p>
								<p class="paragraph-3">Daniel Arzamendia - IT Manager <br>BACS (Banco de Crédito y Securitización S.A)</p>
							</div>
							
				</div>
			</div>
		</section>
		<section id="nuestras-soluciones-2" class="bg-5">
			<div class="container relative">
				<div class="absolute franja-blanca bg-1"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="nuestras-soluciones-2__head relative">
							<div class="soluciones-2__img animated wow imgzoomin hidden-xs" data-wow-duration="2500ms" data-wow-delay="0ms"></div>

							<img src="images/02.jpg" alt="02" class="img-responsive visible-xs">
							<div class="recuadro-azul absolute">
								<p>Mercap Trading</p>
								<small>Mercado de Capitales</small>
							</div>
							<p class="absolute">02</p>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row nuestras-soluciones-2__detail">
							<div class="col-sm-6 col-md-7">
								<p class="paragraph-1">Mercap Trading es una Mesa Virtual que consolida la planificación financiera y la gestión de operaciones de Mesas de Dinero, Títulos y Cambios con los mercados electrónicos, de manera que se integra con las plataformas de MAE, Rofex y ByMA y cuenta con una aplicación mobile para consultas y autorizaciones. <br>Esta solución sistematiza la generación de la planificación financiera de corto plazo con gran flexibilidad y facilidad de uso.</p>
								<a data-text="Más Información" href="<?=url('mercap-trading')?>" class="btn btn-redondeado"><span>Más Información</span></a>
							</div>
							<div class="col-sm-4 col-sm-offset-1 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="100ms">
								<p class="paragraph-2 color-1">«Mercap acompañó el crecimiento de la operatoria del Banco respondiendo satisfactoriamente a nuestras necesidades de negocio con un muy buen desempeño en la atención al cliente y en a optimización de los tiempos de respuesta.» </p>
								<p class="paragraph-3 color-1">Gerente de Operaciones de uno de los más grandes bancos argentinos		</p>
							</div>
				</div>
			</div>
		</section>	
		<section class="bg-1 banda"></section>	
		<section id="nuestras-soluciones-3" class="animated wow imgzoominsoluctres" data-wow-duration="2500ms" data-wow-delay="0ms">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="nuestras-soluciones-3__head relative">
							<div class="borde-blanco"></div>
							<div class="recuadro-azul absolute">
								<p>Mercap Portfolio</p>
								<small>Gestíon de inversiones</small>
							</div>
							<p class="absolute">03</p>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row nuestras-soluciones-3__detail">
							<div class="col-sm-7 pull-right">
								<p class="paragraph-1">Mercap Portfolio es una solución versátil y flexible de gestión de inversiones financieras, cuya arquitectura le permite adaptarse a distintos tipos de clientes como compañías de seguros, hedge funds, fondos comunes de inversión, pension funds, family offices, corporates y banca de inversión.</p>
								<a data-text="Más Información" href="<?=url('mercap-portfolio')?>" class="btn btn-redondeado"><span>Más Información</span></a>
							</div>
							<div class="col-sm-4 pull-left animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="100ms">
								<p class="paragraph-2">«Mercap Portfolio tiene un valor agregado transaccional que ha sido el factor decisivo para haberlo elegido como nuestra solución de portfolio management a nivel regional.»</p>
								<p class="paragraph-3">Gerente de Finanzas de una compañía perteneciente a uno de los cinco grupos económicos más grandes del mundo</p>
							</div>
				</div>
			</div>
		</section>		
		<section id="home-novedades" class="banda">	
				<div class="container relative">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2 class="text-center">
								<hr> <span>Novedades</span>
							</h2>
							<a href="<?=url('novedad-listado')?>" class="absolute color-5 ver-todas">Ver todas las novedades</a>
						</div>
					</div>
					<div class="row text-center animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="100ms">
									<?php foreach (Novedad::obtener() as $k => $novedad) { ?>
										<?php if ($k == 2) {break;} ?>
									<div class="novedad col-sm-6">
										<div class="novedad__img table-cell"><a href="<?=$novedad->url?>"><img class="img-responsive" alt="novedad" src="<?=$novedad->foto->src('166x166')?>"></a></div>
										<div class="novedad__detalle table-cell">
											<div class="novedad__detalle__fecha">
											<p><?=$novedad->fecha->format('F')?> <?=$novedad->fecha->format('Y')?></p></div>
											<div class="novedad__detalle__titulo">
											<p><a class="color-4" href="<?=$novedad->url?>"><?=$novedad->titulo?></a></p></div>
											<div class="novedad__detalle__detalle paragraph-1">
											<p><?=$novedad->bajada?></p></div>
										</div>
										<div class="clearfix"></div>
										<a href="<?=$novedad->url?>" class="masinfo color-5">Más Información</a>
									</div>
									<?php } ?>	
					</div>
				</div>	
		</section>
		<section id="ceo-cuote" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 animated wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="400ms">
						<div class="text-center"><img src="images/ceo-rounded.png" alt="CEO" class="img-responsive"></div>
						<p class="paragraph-2 color-1 text-center">«El desarrollo tecnológico se encuentra hoy en un momento clave en el mercado financiero, donde el software ya no es más un accesorio sino la esencia misma <br class="visible-lg"> 
						del negocio, marcando el futuro de la industria. En Mercap, nos enfocamos en colaborar<br class="visible-lg"> con nuestros clientes impulsando este cambio de paradigma, lo que permite alcanzar<br class="visible-lg"> 
						el verdadero potencial de cada empresa.»
						<br><small>Alejandro Gabriel | CEO</small></p>
					</div>
				</div>
			</div>
		</section>
		<?php include('templates/marcas-slider.php'); ?>

	</article>

<?php include('footer.php'); ?>