<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'mercap');

 	$metas = array(
		'titulo' 		=> 'Mercap',
		'descripcion' 	=> '',
		'img' 			=> '',
		'slider' 		=> '<h1 class="color-1 color-4"><span>MERCAP</span></h1>',
	);

	include('header.php');

?>

	<article>
		<section id="mercap-detalle" class="banda">
			<div class="container">
				<div class="row">
							<div class="col-sm-4 animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="100ms">
								<h3 class="text-left">
									INNOVACIÓN PARA
									<br>EL PRESENTE Y FUTURO
									<br>DEL MERCADO FINANCIERO
									<br><hr>
								</h3>
							</div>
							<div class="col-sm-7 animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
								<p class="paragraph-1">En Mercap nos especializamos en el diseño, el desarrollo y la implementación de sistemas para el mercado financiero. Más de dos décadas de trayectoria de la mano de las principales compañías del sector respaldan nuestra experiencia en el mercado local y regional.

								<br><br>Nuestro enfoque es diferente y sus resultados también. Brindamos soluciones que reducen el time to market, aumentan la productividad de nuestros clientes, y facilitan la gestión de la información. Además, la innovadora arquitectura de nuestros productos permite encarar con éxito los aumentos de demanda transaccional y cambios funcionales requeridos por la evolución del negocio de nuestros clientes.

								<br><br>Nuestras soluciones están dirigidas a los siguientes segmentos:</p>

									<div class="mercap-detalle__listado">
										<p class="color-5 paragraph-4">Instituciones financieras</p>
										<ul class="unstyled-list">
											<li><p class="paragraph-1">— Tesorería y Custodia</p></li>
											<li><p class="paragraph-1">— Banca Privada</p></li>
										</ul>
									</div>
									<div class="clearfix"></div>
									<div class="mercap-detalle__listado">
										<p class="color-5 paragraph-4">Gestión de Activos</p>
										<ul class="unstyled-list">
											<li><p class="paragraph-1">— Administración de Portafolios a Medida</p></li>
											<li><p class="paragraph-1">— Fondos Comunes de Inversión</p></li>
											<li><p class="paragraph-1">— Compañías de Seguros</p></li>
											<li><p class="paragraph-1">— Fondos de Pensión</p></li>
										</ul>
									</div>
									<div class="clearfix"></div>

									<div class="mercap-detalle__listado">
										<p class="color-5 paragraph-4">Empresas</p>
										<ul class="unstyled-list">
											<li><p class="paragraph-1">— Tesorería</p></li>
											<li><p class="paragraph-1">— Inversiones Financieras</p></li>
										</ul>
									</div>

							</div>
				</div>
			</div>
		</section>
		<section class="quote-diagonal">
			<div class="quote-diagonal__diagonal">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="100ms">
							<i class="icn icn-quote"></i>
							<div class="clearfix"></div>
							<div class="diagonal-quote__quote col-sm-9 col-md-6 col-lg-4">
								<div class="row">
									<p class="paragraph-2 color-1">«Mercap nos ha acompañado en <br class="visible-lg">
									todo el proceso de crecimiento de nuestras
									múltiples adquisiciones y fusiones, superando eficientemente desafíos de performance que se debían a la gran cantidad de cuentas custodia, complejas
									migraciones de datos y consolidación de información.»
									</p>
								<p class="paragraph-3 color-1"><small>Gerente de Sistemas de uno de los cinco principales bancos de Argentina</small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="el-equipo" class="banda">
			<div class="container">
				<div class="row">
							<div class="col-sm-4">
								<h3 class="text-left">
									EL EQUIPO
									<br><hr>
								</h3>
							</div>
							<div class="col-sm-7">
								<p class="paragraph-1">Nuestros equipos de trabajo cuentan con un importante background profesional y académico, con formación en finanzas así como en el desarrollo de sistemas informáticos de alta complejidad. Es precisamente esta singular combinación de conocimientos, lo que permite que logremos identificarnos con nuestros clientes, teniendo una amplia comprensión de sus necesidades que se complementa con la visión renovada de nuestra experiencia. Esto se suma a una firme vocación de servicio mediante la cual nuestro equipo atiende y resuelve cada requerimiento del cliente desde el primer contacto.

								<br><br>Esta equilibrada integración de diseño, know how y cultura de servicio, configuran el perfil de Mercap y la calidad de nuestras soluciones, todo cual nos permite crecer con nuestros clientes, convertirnos en sus socios tecnológicos y agregar valor estratégico a su negocio.
								</p>

							</div>
				</div>
			</div>
		</section>
		<?php include('templates/marcas-slider.php'); ?>

	</article>

<?php include('footer.php'); ?>