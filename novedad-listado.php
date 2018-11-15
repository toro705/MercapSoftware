<?php

	include_once('includes/config/inicio.php');

	// Configuración de la página
 	define('SECCION', 'novedad-listado');

 	$metas = array(
		'titulo' 		=> 'Listado de Novedades',
		'descripcion' 	=> '',
		'img' 			=> '',
		'slider' 		=> '<h1 class="color-1 color-4"><span>Novedades</span></h1>',
	);

	include('header.php');

?>

	<article>
		<section id="listado-novedades" class="banda">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">	
							<div class="col-sm-12 listado">
								<h3 class="text-center">
									LISTADO
									<br><hr>
								</h3>
							</div>
						</div>

						<div class="row">	
							<div class="col-xs-12 listado-novedades">
								<div class="row text-center">
									<div class="col-sm-12">
										<p class="listado__año text-center">2016</p>
									</div>
									<?php foreach (Novedad::obtener() as $novedad) { ?>
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
						</div>
					</div>
				</div>
			</div>
		</section>

	</article>

<?php include('footer.php'); ?>