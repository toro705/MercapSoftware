<?php

include_once('includes/config/inicio.php');

	// Configuración de la página
define('SECCION', 'mercap-trading');

$metas = array(
	'titulo' 		=> 'Mercap Trading',
	'descripcion' 	=> '',
	'img' 			=> '',
	'slider' 		=> '<h1 class="color-1 color-4"><span>SOLUCIONES</span></h1>',
	);

include('header.php');

?>

		<article>
			<div class="clearfix"></div>
		<section class="bg-1 banda"></section>	
		<section id="nuestras-soluciones-2" class="bg-5">
			<div class="container relative">
				<div class="absolute franja-blanca bg-1"></div>
				<div class="row">
					<div class="col-sm-12">
						<div class="nuestras-soluciones-2__head relative">
							<div class="soluciones-2__img animated wow imgzoomin hidden-xs" data-wow-duration="2500ms" data-wow-delay="0ms"></div>

							<img src="images/soluciones/02.jpg" alt="02" class="img-responsive visible-xs">
							<div class="recuadro-azul absolute">
								<p>Mercap Trading</p>
								<small>Mercado de Capitales</small>
							</div>
							<p class="absolute">02</p>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row nuestras-soluciones-2__detail animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="100ms">
							<div class="col-sm-7">
								<p class="paragraph-1">Mercap Trading es una Mesa Virtual que consolida la planificación financiera y la gestión de operaciones de Mesas de Dinero, Títulos y Cambios con los mercados electrónicos, de manera que se integra con las plataformas de MAE, Rofex y ByMA y cuenta con una aplicación mobile para consultas y autorizaciones. <br>
								<br><br>Esta solución sistematiza la generación de la planificación financiera de corto plazo con gran flexibilidad y facilidad de uso. Asimismo, tiene como objetivos cubrir una actividad donde el tiempo es una variable crítica, simplificar la carga de operaciones, controlar el riesgo operacional, generar alertas de límites, y brindar información resumida en tiempo real de manera simultánea.

								<br><br>Mercap Trading fue diseñado para incorporarse de manera eficiente a cualquier ecosistema en producción, lo cual incluye sistemas ERP, de Comercio Exterior, de Back de Títulos y de Core bancario, entre otros.</p>
							</div>
							<div class="col-sm-4 col-sm-offset-1 animated wow fadeInRight firma" data-wow-duration="1000ms" data-wow-delay="400ms">
								<p class="paragraph-2 color-1">«Mercap acompañó el crecimiento de la operatoria del Banco respondiendo satisfactoriamente a nuestras necesidades de negocio con un muy buen desempeño en la atención al cliente y en a optimización de los tiempos de respuesta.» </p>
								<p class="paragraph-3 color-1">Gerente de Operaciones de uno de los más grandes bancos argentinos		</p>
							</div>
							
				</div>
			</div>
		</section>	
		<section class="bg-1 banda hidden-xs"></section>	

			<section id="trading-grafico" class="banda bg-4">
				<div class="container text-center">
					<img src="images/trading-grafico.png" alt="Trading" class="img-responsive">
				</div>
			</section>
			<section id="trading-fin" class="banda">
				<div class="container">
							<div class="row">
								<div class="col-sm-10 col-sm-offset-1">
									<h3 class="text-center color-4">MERCAP TRADING <br class="hidden-xs"> AUMENTA LA VISIBILIDAD DE SU NEGOCIO
									<br><hr>
									</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="square-container animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="100ms">
										<div class="square-item relative">
											<div class="square absolute bg-5 hidden-xs"></div>
											<p class="paragraph-1">
												<b class="color-5">OTORGA MAYOR TRANSPARENCIA OPERATIVA</b>
											</p>
											<p class="paragraph-1">Permite monitorear en tiempo real y en forma ex post las sucesivas instancias durante la ejecución de operaciones de la Mesa. Cuenta con límites por operador y límites por contraparte que se sincronizan con mercados y sistemas core.</p>
										</div>
										<div class="square-item relative">
											<div class="square absolute bg-5 hidden-xs"></div>
											<p class="paragraph-1">
												<b class="color-5">AUMENTA LA EFICIENCIA Y CONTROL EN EL CUMPLIMIENTO NORMATIVO</b>
											</p>
											<p class="paragraph-1">La carga de operaciones simplificada e intuitiva elimina datos innecesarios y maximiza la velocidad para los traders y posicionistas, operando así en forma integrada, flexible, segura y con trazabilidad. Su control de límites pre-trade es fácilmente configurable con distintos niveles de autorización por operador y contraparte.</p>
										</div>
									</div>
									<div class="square-container animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
										<div class="square-item relative">
											<div class="square absolute bg-5 hidden-xs"></div>
											<p class="paragraph-1">
												<b class="color-5">MEJORA LA CAPACIDAD DE REACCIÓN</b>
											</p>
											<p class="paragraph-1">Los tableros con actualización automática de las operaciones realizadas y los datos de mercado, muestran en vivo la evolución de las posiciones de caja, títulos y cambios de la entidad financiera, minimizando la intervención manual, y prescindiendo de planillas ad-hoc.</p>
										</div>
										<div class="square-item relative">
											<div class="square absolute bg-5 hidden-xs"></div>
											<p class="paragraph-1">
												<b class="color-5">VIRTUALIZACIÓN DE LA MESA</b>
											</p>
											<p class="paragraph-1">Además de ser una plataforma web, cuenta con una aplicación para iPhone y Android que permite consultar posiciones y operaciones diarias, autorizar operaciones con límites excedidos, recibir alertas, y visualizar detalle de Cashflow y posición BCRA.</p>
										</div>
									</div>
								</div>
							</div>
				</div>
			</section>

		</article>

		<?php include('footer.php'); ?>