<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'rrhh');

 	$metas = array(
		'titulo' 		=> 'RRHH',
		'descripcion' 	=> '',
		'img' 			=> '',
		'slider' 		=> '<h1 class="color-1 color-4"><span>RRHH</span></h1>',
	);

	include('header.php');

?>

	<article>
		<section id="servicios-detalle" class="banda">
			<div class="container animated wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">
						<div class="row">	
							<div class="col-sm-12">
								<h3 class="text-center">
									INTEGRATE A NUESTRO EQUIPO
									<br><hr>
								</h3>
								<p class="paragraph-1 text-center">Si querés formar parte de Mercap, envianos tu CV utilizando el siguiente formulario</p>
							</div>
						</div>

						<div class="row">	
							<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-8">
								<?php include('forms/rrhh.php'); ?>
								<?= $form_rrhh->mensaje_estado ?>
								<?php if ($form_rrhh->estado != 'ok') { ?>

								<form id="contacto-form" role="form" method="post" enctype="multipart/form-data">
								 <div class="form-group text-left">
									    <input type="text" class="form-control" id="nombre" placeholder="Nombre y apellido" name="nombre" value="<?= (isset($_POST['nombre'])) ? $_POST['nombre'] : ''; ?>">
									</div>
									<fieldset class="form-group js-adjunto">
									  <div class="col-xs-12">
										  <div class="row">
										  	<label class="adjunto" for="adjunto">
										  		<span class="boton"><i class="icn icn-folder">	</i></span>
										  		&nbsp;&nbsp;
										  		<span class="js-adjunto-texto form-control">Adjuntar CV</span>
										  	</label>
										    <input class="js-adjunto-input form-control" type="file" id="adjunto" name="adjunto" />
										  </div>
										  	
									  </div>
									</fieldset>
									<div class="form-group text-left">
									    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" <?= (isset($_POST['telefono'])) ? $_POST['telefono'] : ''; ?>">
									</div>
									<div class="form-group text-left">
										<input type="email" class="form-control" id="email" name="email"  placeholder="E-mail" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''; ?>">
									</div>
									
									<div class="form-group text-left">
										<textarea name="observaciones" id="observaciones" cols="1" rows="1" placeholder="Observaciones" class="form-control"><?= (isset($_POST['observaciones'])) ? $_POST['observaciones'] : ''; ?></textarea>
									</div>
									<div class="form-group text-left">
									    <div class="col-xs-12">
											<?php foreach($form_rrhh->campos AS $c){
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
										  <button data-text="ENVIAR" type="submit" class="btn btn-redondeado" name="enviar_rrhh"><span>ENVIAR</span></button>
										</div>
										<div class="clearfix"></div>
									</div>
								</form>	
								<?php  } ?>									
							</div>
						</div>
			</div>
		</section>
		
	</article>

<?php include('footer.php'); ?>