<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'soluciones');

 	$metas = array(
		'titulo' 		=> 'Soluciones',
		'descripcion' 	=> '',
		'img' 			=> '',
		'slider' 		=> '<h1 class="color-1 color-4"><span>SOLUCIONES</span></h1>',
	);

	include('header.php');

?>

	<article>
		<section id="mercap-detalle" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center row">	
							<div class="solucion relative wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="100ms">
								<a href="<?=url('mercap-unitrade')?>">
									<div class="solucion__img"><img class="img-responsive anim-suave" src="images/soluciones/01.jpg" alt="01"></div>
									<p class="absolute solucion__numero color-1">01</p>
									<div class="recuadro-azul relative anim-suave">
										<p>Mercap Unitrade</p>
										<small>Custodia y Tesorería</small>
									</div>
									<div class="clearfix">	</div>
									<div class="solucion__detalle">
										<p class="paragraph-1 text-center">Canales | Front Office | Middle Office | Back Office</p>
									</div>
									<a data-text="Más Información" href="<?=url('mercap-unitrade')?>" class="btn btn-redondeado"><span>Más Información</span></a>
									
								</a>
							</div>
							<div class="solucion relative wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="400ms">
								<a href="<?=url('mercap-trading')?>">
									<div class="solucion__img"><img class="img-responsive anim-suave" src="images/soluciones/02.jpg" alt="02"></div>
									<p class="absolute solucion__numero color-1">02</p>
									<div class="recuadro-azul relative anim-suave">
										<p>Mercap Trading</p>
										<small>Mercado de capitales</small>
									</div>
									<div class="clearfix">	</div>
									<div class="solucion__detalle">
										<p class="paragraph-1 text-center">Operaciones / Dashboards | Planificación Financiera | Operaciones Online | Gestión de Riesgos</p>
									</div>
									<a data-text="Más Información" href="<?=url('mercap-trading')?>" class="btn btn-redondeado"><span>Más Información</span></a>
								</a>
							</div>
							<div class="solucion relative wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="700ms">
								<a href="<?=url('mercap-portfolio')?>">
									<div class="solucion__img"><img class="img-responsive anim-suave" src="images/soluciones/03.jpg" alt="03"></div>
									<p class="absolute solucion__numero color-1">03</p>
									<div class="recuadro-azul relative anim-suave">
										<p>Mercap Portfolio</p>
										<small>Gestión de inversiones</small>
									</div>
									<div class="clearfix">	</div>
									<div class="solucion__detalle">
										<p class="paragraph-1 text-center">Front Office | Gestión de Riesgos | Rentabilidad y Performance | Custodia y Contabilidad</p>
									</div>
									<a data-text="Más Información" href="<?=url('mercap-portfolio')?>" class="btn btn-redondeado"><span>Más Información</span></a>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>

<?php include('footer.php'); ?>