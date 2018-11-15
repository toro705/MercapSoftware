<?php

    include_once('includes/config/inicio.php');


  //////////////////////////////////
 /// Configuración de la página ///
//////////////////////////////////

    define('SECCION', 'novedad-nota');

    if(! isset($_GET['id'])){
        error_404();
    }

    $novedad = Novedad::obtener('id', $_GET['id']);

    if(! $novedad){
        error_404();
    }

    define('URL_SECCION', $novedad->url);

    $metas = array(
        'titulo'        => $novedad->titulo,
        'descripcion'   => $novedad->bajada,
        'img'           => $novedad->foto->src,
        'slider' 		=> '<h1 class="color-1 color-4"><span>Novedades</span></h1>',
    );

/// Fin Configuración de la página ///

	include('header.php');

?>

	<article>
		<section id="mercap-detalle" class="banda">
			<div class="container">
				<div class="row">	
					<div class="col-sm-5 text-center novedad-img">
						<img src="<?=$novedad->foto->src('310xauto')?>" alt="J" class="img-responsive">
					</div>
					<div class="col-sm-7 novedad-nota relative">
						<a href="<?=url('novedad-listado')?>" class="absolute novedad-nota__volver color-5">VOLVER AL LISTADO</a>
						<p class="novedad-nota__fecha"><?=$novedad->fecha->format('F')?> <?=$novedad->fecha->format('Y')?></p>
						<h3 class="text-left color-4">
							<?=$novedad->titulo?>
							<br><hr>
						</h3>
						<?=$novedad->cuerpo?>

					</div>
				</div>
			</div>
		</section>
	

	</article>

<?php include('footer.php'); ?>