	</main>
	<footer class="pie relative bg-5">
		<div class="container">
			<div class="row text-left">
				<div class="col-sm-12">
						<a class="pie__logo" href="<?=url('home')?>">
							<img class="img-responsive" src="images/logo_nav-principal-pie.png" alt="<?=Empresa::$nombre?>">
						</a>
					<div class="empresa">
						<p><?= Empresa::$direccion ?> | <?= Empresa::$CP ?> <?= Empresa::$localidad ?> | <?= Empresa::$pais ?> | <br class="visible-xs"> Tel<a href="tel:<?= Empresa::$telefono_enlace ?>"> <?= Empresa::$telefono ?></a></p>
					</div>
					<div class="text-right social">
						<a href="<?= Empresa::$redes['fb']?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="<?= Empresa::$redes['tw']?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="<?= Empresa::$redes['in']?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<div class="copyright bg-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<hr>
					<div class="text-left copyright__links hidden-xs">
							<ul class="list-unstyled list-inline">
			                      <li><a href="<?=url('home')?>"><i class="fa fa-home" aria-hidden="true"></i>  </a><span>/</span></li>
			                      <li><a href="<?=url('mercap')?>">Mercap  </a><span>/</span></li>
			                      <li><a href="<?=url('soluciones')?>">Soluciones  </a><span>/</span></li>
			                      <li><a href="<?=url('clientesypartners')?>">Clientes y Partners  </a><span>/</span></li>
			                      <li><a href="<?=url('servicios')?>">Servicios  </a><span>/</span></li>
			                      <li><a href="<?=url('rrhh')?>">RRHH  </a><span>/</span></li>
			                      <li><a href="<?=url('contacto')?>">Contacto</a></li>
							</ul>
					</div>
					<div class="text-right copyright__synapsis">
						<a class="synapsis" href="http://synapsis.com.ar/" target="_blank">Diseño web</a>
					</div>
				</div>
			</div>		
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
	<script>
			new WOW().init();
	</script>
   <!-- Imágenes responsive -->
    <script>
	<?php 
		if (SECCION == 'home') 
	{ ?>

		    function imageWidth () {
			   	//Defino el nuevo ancho de las imágenes
			      	var anchoVentana = $(window).width();
			      	var anchos = [1920,1200,990,768,490];
			      	var nuevoAncho = 1920;
			      	for (var i=0; i<anchos.length; i++) {
			      		if( anchoVentana<anchos[i] ){
				      		nuevoAncho = anchos[i];
				      	}
			      	}
			      	//Cambio el src de las imágenes
			      	var imagenes = ['.slider-principal__imagen'];
			      	for (var i=0; i<imagenes.length; i++) {
			      		$(imagenes[i]).each(function(){
			       			var src = $(this).attr('src');
			       			$(this).attr('src',src.replace('1920',nuevoAncho));
			      		});
			      	}

		       			var src = $('.mascara').css('background');
						var regExp = /(?:([0-9]{3,})){1}/gi;
		       			$('.mascara').css('background', src.replace(regExp, nuevoAncho));
		       			console.log('imageWidth');
		    }


		      	$(window).resize(function(){
	  				imageWidth();

		      	});
    
	<?php } ?>	
    </script>
    <!-- Fin Imágenes responsive -->
    <!-- Scroll en cabecera -->
	<script>
		//Anima el menú cuando hay scroll
		$( window ).scroll(function(){
			var $cabecera = $('.cabecera');
			if( $(window).scrollTop() > 20){
				$cabecera.addClass('scroll');
			}else{
				$cabecera.removeClass('scroll');
			}
		});

		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('.navbar').outerHeight();

		var didScroll;
		// // muestra si el usuario scrolleo
		// $(window).scroll(function(event){
		//   didScroll = true;
		// });
		// setInterval(function() {
		//   if (didScroll) {
		//     hasScrolled();
		//     didScroll = false;
		//   }
		// }, 250);
		// function hasScrolled() {
		// 	   var st = $(this).scrollTop();
		// 	   if(Math.abs(lastScrollTop - st) <= delta)
		// 	  return;
		// 	if (st > lastScrollTop && st > navbarHeight){
		// 	  // Scroll abajo
		// 	  $('.cabecera').addClass('ocultar');
		// 	} else {
		// 	  // Scroll Arriba
		// 	  if(st + $(window).height() < $(document).height()) { 
		// 	    $('.cabecera').removeClass('ocultar');
		// 	  }
		// 	}
		// 	lastScrollTop = st;
		// }
		
	</script>
	<!-- Fin Scroll en cabecera -->
	<!--Animación de enlaces internos--> 
		<script> 
			$(function() { 
				$('a[href*=#]:not([href=#])').filter(':not([data-toggle])').click(function() { 
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) { 
					var target = $(this.hash); 
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); 
					if (target.length) { 
						$('html,body').animate({ 
							scrollTop: target.offset().top - 0 
							}, 1000); 
							location.hash = this.hash; 
							return false; 
						} 
					} 
				}); 
			}); 
		</script> 	
	<!--Fin Animación de enlaces internos--> 
    <!-- Hamburguesa  -->
    <script>
		$(document).ready(function(){
			$('.hamburger').click(function(){
				$(this).toggleClass('is-active');
			});
		});
    </script>
	<!-- Fin hamburguesa -->
	<?php if(in_array('slider-principal', $js)){ ?>
	<!-- Owl Carousel -->
	<!-- http://owlcarousel2.github.io/OwlCarousel2/ -->
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
<!--     <link rel="stylesheet" href="js/jquery.owl.carousel/owl.transitions.css" /> -->


	<?php }

	if(in_array('slider-principal', $js)){ ?>
	<!-- Owl Carousel -->

    <script>
    	function sliderHeight () {
	    	if ($(window).width() > 769) {
				var navHeight = $(window).height();
				$(document).ready(function(){
					$('.slider-principal > .owl-carousel').css('height', navHeight);
					$('.video-background').css('height', navHeight);
					$('.slider-principal > .owl-carousel').owlCarousel({
					    items: 1,
		 				autoplay: true,
		            	singleItem: true,
					    loop: true,
					    animateIn: 'fadeIn',
					    animateOut: 'fadeOut',
						slideSpeed: 3000,
					});
			
					$('.slider-principal .owl-stage-outer').css('height', navHeight);
					$('.slider-principal .owl-item').css('height', navHeight);

				});
	    		
	    	} else {
				var navHeight = $(window).height() - 45;
				$(document).ready(function(){
					$('.slider-principal > .owl-carousel').css('height', navHeight);
					$('.video-background').css('height', navHeight);
					$('.slider-principal > .owl-carousel').owlCarousel({
					    items: 1,
		 				autoplay: true,
		            	singleItem: true,
					    loop: true,
					    animateIn: 'fadeIn',
					    animateOut: 'fadeOut',
						slideSpeed: 3000,
					});
			
					$('.slider-principal  .owl-stage-outer').css('height', navHeight);
					$('.slider-principal  .owl-item').css('height', navHeight);

				});
	    		
	    	}
    		
    	}
      	$(window).resize(function(){
			sliderHeight();

      	});

    </script>

  	<script>	
			$('.maquinas-usadas__carousel_carousel').owlCarousel({
			    items: 1,
 				autoplay: false,
            	singleItem: true,
			    loop: true,
			    autoheight: true,
			    nav: true,
			      navText: ["<a class='btn prev absolute'><i class='fa fa-chevron-left'></i></a>","<a class='btn next absolute'><i class='fa fa-chevron-right'></i></a>"]

			});


	</script>


	<?php } ?>	
	<?php 
		if (SECCION == 'home') 
	{ ?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
	<script src="js/vide/jquery.vide.min.js"></script>
	<script>
		$('.video-background').vide({
			mp4: 'images/home.mp4',
			poster: './images/slider-principal/backup.jpg'
		}, {
			resizing: true
		});
				
	</script>

	<?php
		}
	?>		
	<?php 
		if (SECCION == 'rrhh') 
	{ ?>
<!-- JS Nombre de adjunto -->
	<script>
		$('.js-adjunto-input').change(function(){
			var archivo = $(this).val().replace(/\\/g, '/').replace(/.*\//, '');
			$(this).parents('.js-adjunto').find('.js-adjunto-texto').html(archivo);
		});
	</script>
<!-- JS Fin Nombre de adjunto -->
	<?php
		}
	?>		

	<?php 
	if (defined('SLIDERMARCAS')) {
	?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
	<script>
		$(document).ready(function(){
		    function owlCarWidth(carousel) {

				    var
				        totalWidth = 0;

				    carousel.find('.owl-item').each(function() {
				        totalWidth += $(this).width();
				    });

				    carousel.find('.owl-stage').width(totalWidth+1);

				}
				owlCarWidth( $('#marcas-carousel') );

				    $('#marcas-carousel').on('refreshed.owl.carousel', function(event) {
				             owlCarWidth( $('#marcas-carousel') );
				});

				$(window).trigger('resize');

			  var owl2 = $("#marcas-carousel");
			 
			  owl2.owlCarousel({
			  	  loop: true,
		          autoplay: true,
		          slideBy: 3,
			  	  resonsiveClass: true,
			  	  responsive: {
			  	 	0: {
			  	  		items: 1,
			  	  		autoWidth:false,
 			            slideBy: 1
				    },
				    // breakpoint from 480 up
				    511 : {
			  	  		items: 2,
			  	  		autoWidth:false,
 			            slideBy: 2

				    },
				    // breakpoint from 768 up
				    768 : {
			  	  		items: 2,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    990 : {
			  	  		items: 3,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    1200 : {
			  	  		items: 4,
			  	  		autoWidth:false
				    },		 
				    1300 : {
			  	  		items: 5	
				    }		 
			  	  }
			     });
			});
			 		
	</script>  
	<?php 
		}	
	?>
	<?php 
		if (SECCION == 'quienes-somos') 
	{ ?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.transitions.css" />
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />

	<script>
		$(document).ready(function(){
		    function owlCarWidth(carousel) {

				    var
				        totalWidth = 0;

				    carousel.find('.owl-item').each(function() {
				        totalWidth += $(this).width();
				    });

				    carousel.find('.owl-stage').width(totalWidth+1);

				}
				owlCarWidth( $('#marcas-carousel') );

				    $('#marcas-carousel').on('refreshed.owl.carousel', function(event) {
				             owlCarWidth( $('#marcas-carousel') );
				});

				$(window).trigger('resize');

			  var owl3 = $("#marcas-carousel");
			 
			  owl3.owlCarousel({
			  	  autoWidth:true,
			  	  loop: false,
			  	  resonsiveClass: true,
			  	  responsive: {
			  	 	0: {
			  	  		items: 1,
			  	  		autoWidth:false
				    },
				    // breakpoint from 480 up
				    511 : {
			  	  		items: 2,
			  	  		autoWidth:false
				    },
				    // breakpoint from 768 up
				    768 : {
			  	  		items: 3,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    990 : {
			  	  		items: 4,
			  	  		autoWidth:false
				    },		 
				    // breakpoint from 768 up
				    1200 : {
			  	  		items: 5,
			  	  		autoWidth:false
				    },		 
				    1300 : {
			  	  		items: 5
				    }		 
			  	  }
			     });
			});
			 		
	</script>
	<?php
		}
	?>		

	<?php 
		if (SECCION == 'rrhh' OR SECCION == 'contacto') 
	{ ?>
	    <script src="js/jquery.autosize.js"></script>
		<script>
			console.log('activo');
			$(function(){
				$('textarea').autosize();
			});
		</script>

	<?php } ?>
	<?php 
		if (SECCION == 'ficha') 
	{ ?>
    <script src="js/jquery.owl.carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="js/jquery.owl.carousel/owl.carousel.css" />
    <script>
 		var owl = $('.slider-ficha__carousel');
 			owl.owlCarousel({
			      nav : true, // Show next and prev buttons
			      slideSpeed : 300,
			      paginationSpeed : 400,
			      autoWidth: true,
			      navText: ["<a class='btn prev absolute'><i class='fa fa-chevron-left'></i></a>","<a class='btn next absolute'><i class='fa fa-chevron-right'></i></a>"],
			      items : 1,
			  });

    		var itemCount = owl.length;
 			if ( itemCount == 1 ){
 				$('.slider-ficha .btn').css('display', 'none');
 			}

    </script>			
	<?php
		}
	?>
	<script>
		$('.contenedor-categoria > .categoria-titulo').click(function(event) {
			if(!event.detail || event.detail==1){
				$(this).toggleClass('checked');
				if ($(this).siblings('.categoria-elementos').is(':visible')){
				} else{
						$(this).siblings('.categoria-elementos').slideDown();
				}
				console.log($(this).siblings('.categoria-elementos').find('li > a'));
			  }
			 if ($(this).hasClass('checked')) {
				$(this).siblings('.categoria-elementos').find('li > a > label').addClass('checked');
				console.log('checked');			 	
			 } else{
				$(this).siblings('.categoria-elementos').find('li > a > label').removeClass('checked');
				console.log('not checked');			 	
			 }
			 return false;			
		});
		$('.contenedor-categoria > .categoria-titulo > a').click(function(event) {
			if(!event.detail || event.detail==1){
				$(this).toggleClass('active');
				$(this).parent().siblings('.categoria-elementos').slideToggle();
			    }
			    return false;			
			
		});
		$( '.categoria-elementos li a' ).on( 'click', 'input[type="checkbox"]', function () {
		    $(this).parent('label').toggleClass('checked');
		});		
	</script>
  </body>
</html>