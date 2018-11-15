<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'contacto');

 	$metas = array(
		'titulo' 		=> 'Contacto',
		'descripcion' 	=> '',
		'img' 			=> '',
		'slider' 		=> '<h1 class="color-1 color-4"><span>CONTACTO</span></h1>',
	);

	include('header.php');

?>

	<article>
		<section id="servicios-detalle" class="banda">
			<div class="container">
						<div class="row">	
							<div class="col-sm-12">
								<h3 class="text-center">
									PÓNGASE EN CONTACTO CON NOSOTROS
									<br><hr>
								</h3>
							</div>
						</div>

						<div class="row text-center animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="100ms">	
							<div class="col-md-6 col-md-offset-1">
								<?php include('forms/contacto.php'); ?>
								<?= $form_contacto->mensaje_estado ?>
								<?php if ($form_contacto->estado != 'ok') { ?>

								<form id="contacto-form" role="form" method="post">
								 <div class="form-group text-left">
									    <input type="text" class="form-control" id="nombre" placeholder="Nombre y apellido" name="nombre" value="<?= (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>">
									</div>
									<div class="form-group text-left">
									    <input type="text" class="form-control" id="empresa" placeholder="Empresa" name="empresa" value="<?= (isset($_POST['empresa'])) ? $_POST['empresa'] : ''; ?>">
									</div>
									<div class="form-group text-left">
									    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" <?= (isset($_POST['telefono'])) ? $_POST['telefono'] : ''; ?>">
									</div>
									<div class="form-group text-left">
										<input type="email" class="form-control" id="email" name="email"  placeholder="E-mail" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
									</div>
									
									<div class="form-group text-left">
										<textarea name="consulta" id="consulta" cols="1" rows="1" placeholder="Consulta" class="form-control"><?= (isset($_POST['consulta'])) ? $_POST['consulta'] : ''; ?></textarea>
									</div>
									<div class="form-group text-left">
									    <div class="col-xs-12">
											<?php foreach($form_contacto->campos AS $c){
												if($c->name == 'captcha'){
												?>
												<div class="form-group">
													<div class="col-xs-12 text-center">
									                    <div class="grecaptcha" data-sitekey="<?=$c->site_key; ?>" data-theme="light" data-size="normal" style="overflow: hidden; border-radius: 5px; margin: 0 auto; display: inline-block">
															<noscript>
															  	<div style="width: 100%; height: 500px; margin: 0 auto;">
																	<iframe src="https://www.google.com/recaptcha/api/fallback?k=<?=$c->site_key; ?>"
																	        frameborder="0" scrolling="no"
																	        style="width: 100%; height:422px; border-style: none;">
																	</iframe>
																	<textarea style="width:285px; height:60px;" id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"></textarea>
															  </div>
															</noscript> 
									                    </div>
									                </div>
									            </div> 
									            <?php }
									        } ?>
									    </div>
									</div>
									<div class="form-group">
										<div class="col-xs-12 text-center">
										  <button data-text="ENVIAR" type="submit" class="btn btn-redondeado" name="enviar_contacto"><span>ENVIAR</span></button>
										</div>
										<div class="clearfix"></div>
									</div>
								</form>	
								<?php  } ?>									
							</div>
							<div class="col-md-offset-1 bg-5 orangebox">
								<div class="data-container">
									<p class="paragraph-1 color-1 orangebox__title"><b>MERCAP S.R.L.</b></p>
									<p class="paragraph-1 color-1"><?= Empresa::$direccion ?>, <?= Empresa::$CP ?></p>
									<p class="paragraph-1 color-1"><?= Empresa::$localidad ?>, <?= Empresa::$pais ?></p>
									<a class="paragraph-1 color-1" href="tel:<?= Empresa::$telefono_enlace ?>">Tel <?= Empresa::$telefono ?></a>
									<div class="social">
										<a href="<?= Empresa::$redes['fb']?>" target="_blank" class="paragraph-1 color-1"><i class="fa fa-facebook" aria-hidden="true"></i> /MercapSrl</a>
										<a href="<?= Empresa::$redes['tw']?>" target="_blank" class="paragraph-1 color-1"><i class="fa fa-twitter" aria-hidden="true"></i> /mercapsoftware</a>
										<a href="<?= Empresa::$redes['in']?>" target="_blank" class="paragraph-1 color-1"><i class="fa fa-linkedin" aria-hidden="true"></i> /company/mercap</a>
									</div>
								</div>
							</div>
						</div>
			</div>
		</section>
		<section id="ceo-cuote" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2 animated wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="400ms">
								<div class="text-center"><img src="images/ceo-rounded.png" alt="CEO" class="img-responsive"></div>
								<p class="paragraph-2 color-1 text-center">«El desarrollo tecnológico se encuentra hoy en un momento clave en el mercado financiero, donde el software ya no es más un accesorio sino la esencia misma 
								del negocio, marcando el futuro de la industria. En Mercap, nos enfocamos en colaborar con nuestros clientes impulsando este cambio de paradigma, lo que permite alcanzar 
								el verdadero potencial de cada empresa.»
								<br><small>Alejandro Gabriel | CEO</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
	</article>

<?php include('footer.php'); ?>