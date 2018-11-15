<?php

include_once('includes/config/inicio.php');

	// Configuración de la página
define('SECCION', 'mercap-portfolio');

$metas = array(
	'titulo' 		=> 'Mercap Portfolio',
	'descripcion' 	=> '',
	'img' 			=> '',
	'slider' 		=> '<h1 class="color-1 color-4"><span>SOLUCIONES</span></h1>',
	);

include('header.php');

?>

		<article>
			<div class="clearfix"></div>
		<section class="bg-1 banda hidden-xs"></section>	
		<section id="nuestras-soluciones-3">
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
							<div class="col-sm-7 pull-right animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">
								<p class="paragraph-1">Mercap Portfolio es una solución versátil y flexible de gestión de inversiones financieras, cuya arquitectura le permite adaptarse a distintos tipos de clientes como compañías de seguros, hedge funds, fondos comunes de inversión, pension funds, family offices, corporates y banca de inversión.
								<br><br>Se basa en una plataforma que posibilita que el área de inversiones pueda tomar decisiones a partir de la información analítica online y controles pre-trade de sus portafolios financieros. A su vez, el usuario puede operar de manera integrada con mercados, y administrar todas las actividades de liquidación, custodia, valuación, resultados, contabilidad y cumplimiento regulatorio.

								<br><br>Mercap Portfolio cubre toda la operatoria front-to-back office y se adecúa a nuevos requerimientos funcionales acompañando la evolución del negocio de cada cliente.
								</p>
							</div>
							<div class="col-sm-4 pull-left animated wow fadeInLeft firma" data-wow-duration="1000ms" data-wow-delay="100ms">
								<p class="paragraph-2">«Mercap Portfolio tiene un valor agregado transaccional que ha sido el factor decisivo para haberlo elegido como nuestra solución de portfolio management a nivel regional.»</p>
								<p class="paragraph-3">Gerente de Finanzas de una compañía perteneciente a uno de los cinco grupos económicos más grandes del mundo</p>
							</div>
							
				</div>
			</div>
		</section>
			<section id="portfolio-grafico" class="banda bg-5">
				<div class="container text-center">
					<img src="images/portfolio-grafico.png" alt="Trading" class="img-responsive">
				</div>
			</section>
			<section id="portfolio-detail" class="banda">
				<div class="container">
							<div class="row">
								<div class="col-xs-12 text-center">
									<img src="images/portfolio-circle.png" alt="Mercap Portfolio" class="img-responsive">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<h3 class="text-center color-4">MERCAP PORTFOLIO <br class="hidden-xs"> AGILIZA LA CAPACIDAD ANALÍTICA DE SU NEGOCIO
									<br><hr>
									</h3>
								</div>
							</div>
							<div class="row">
									<div class="square-container animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="100ms">
										<div class="square-item relative">
											<div class="square absolute bg-5 hidden-xs"></div>
											<p class="paragraph-1">
												<b class="color-5">BENEFICIOS EN LA TOMA DE DECISIONES DE INVERSIÓN</b>
											</p>
											<p class="paragraph-1">Provee herramientas de análisis de performance de riesgos de mercado: VaR, Método de simulación Montecarlo, Histórico y Paramétrico. También posee análisis de rentabilidad, valuación por curvas, asset allocation, portfolio selection que colaboran con las decisiones de valuación.</p>
										</div>
										<div class="square-item relative">
											<div class="square absolute bg-5 hidden-xs"></div>
											<p class="paragraph-1">
												<b class="color-5">ADAPTACIÓN, FLEXIBILIDAD Y MAYOR VELOCIDAD OPERATIVA</b>
											</p>
											<p class="paragraph-1">Posee un workflow integrado front-to-back office que posibilita un mejor control y trazabilidad y aumenta la velocidad operativa al poder modificarse los procesos del negocio. Este workflow es editable, lo cual hace que el sistema se adapte fácilmente a las estructuras de distintos tipos de clientes.</p>
										</div>
									</div>
									<div class="square-container animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
										<div class="square-item relative">
											<div class="square absolute bg-5 hidden-xs"></div>
											<p class="paragraph-1">
												<b class="color-5">OPTIMIZACIÓN EN EL USO DE LA INFORMACIÓN Y AUMENTO DE LA PRODUCTIVIDAD</b>
											</p>
											<p class="paragraph-1">Permite al usuario analizar la información generada por el sistema con diferentes niveles de agregación, creando vistas diversas, para facilitar el análisis en la toma de decisiones de inversión.</p>
										</div>
										<div class="square-item relative">
											<div class="square absolute bg-5 hidden-xs"></div>
											<p class="paragraph-1">
												<b class="color-5">REDUCCIÓN DE RIESGOS OPERATIVOS</b>
											</p>
											<p class="paragraph-1">Se observa en su diseño multimoneda basado en un modelo de medidas, gracias al cual las cantidades siempre llevan asociadas su unidad, lo que garantiza la correcta exposición de la información en diferentes monedas. La multicontabilidad es útil en la generación de balances para distintos entes de control, sin necesidad de duplicación de operaciones. Los controles de límites pre-trade y post-trade fortalecen el circuito operativo.</p>
										</div>
									</div>
							</div>
				</div>
			</section>			

		</article>

		<?php include('footer.php'); ?>