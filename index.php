<!DOCTYPE html>
<HTML lang="es">
<HEAD>
	<TITLE>Home Branding - Inicio</TITLE>
	<!--  INICIO METAS 	-->
	<meta charset="utf-8">
	<!--   FIN METAS 	-->
	
	<!--   INICIO ESTILOS		-->
		<!-- FORMS -->
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


		  <link rel="stylesheet" type="text/css" href="styles/style.css">
		  <link rel="stylesheet" type="text/css" href="styles/w3.css">
		  <link rel="stylesheet" type="text/css" href="styles/cssF.css">
		  <link rel="stylesheet" type="text/css" href="styles/effects.css">
		  <link rel="stylesheet" type="text/css" href="styles/cssS.css">

	<style type="text/css" media="screen">
		#section {
		    margin-left: -20px;
		    margin-right: -20px;
		}
		#contenido{
		    border-bottom: 15px solid var(--principal-txt-color);
		    margin-bottom: 0px;
		    margin-left: -10px;
		    margin-right: -10px;
		}

		.imgFotoGalery{
			margin-top: 5px;
			margin-bottom: 5px;
			margin-left: 5px;
			margin-right: 5px
		}

		.gale-legth{
    		margin-top: -60px;
    		padding-left: 70px;
		}
		.gale-center{
		    padding-left: 20px;
			padding-right: 20px;
		}
		.gale-rigth{
    		padding-right: 70px;
    		margin-top: 100px;
		}

		            /*       EEFCTOS DE IMAGENES        */
        #imagen{
        background-image: url('img/f4dfa017-0c27-411f-87b2-1d406f74704b.JPG');
        background-repeat: repeat-x;
        height:410px;
        width:100%;
        }

        #imagen{
	      animation-name: mov-izq;
	      animation-duration: 10s;
	      animation-iteration-count: infinite;
	      animation-timing-function: linear;
	      animation-delay: 3s;
         
        -moz-animation-name: mov-izq;
        -moz-animation-duration: 10s;
        -moz-animation-iteration-count: infinite;
        -moz-animation-timing-function: linear;
        -moz-animation-delay: 3s; 
          
        -webkit-animation-name: mov-izq;
        -webkit-animation-duration: 10s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
        -webkit-animation-delay: 3s;
        }
	    @keyframes mov-izq{
          100%{background-position:-940px 0px}
        }

        @-webkit-keyframes mov-izq{
            100%{background-position:-940px 0px}
        }

	</style>						
	<!--    FIN ESTILOS			-->

	<style>
			.containerData {
			  position: relative;
			  width: 100%;
			}

			.imageInfo {
			  width: 100%;
			}

			.overlay {
			  position: absolute;
			  bottom: 0;
			  left: 0;
			  right: 0;
			  background-color: var(--second-txt-color);
			  overflow: hidden;
			  width: 100%;
			  height: 0;
			  transition: .5s ease;
			}

			.containerData:hover .overlay {
			  height: 100%;
			  opacity: 0.7;
			}

			.texto {
			opacity: 1;
			white-space: nowrap; 
			color: var(--principal-txt-color);
			font-size: 20px;
			position: absolute;
			overflow: hidden;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			}
	</style>
	
		<!--Colocamos la barra de menu estatica-->


</HEAD>
<BODY id="homeBranding" style="overflow-x: hidden" data-spy="scroll" data-target=".navbar" data-offset="60">
	<header id="header">
		<ul id="contenido">
			<li>
				<div class="logo contenido">
					<img class="iconHome animation" src="img/homebranding-logo.png">
				</div>
			</li>
			<li style="float:right">
				<div style="text-align:  center;">
						<h2 class="secondColor alingDer tittleDiv">Siguenos!</h2>
						<a class="redes" href="https://www.facebook.com/HomeBranding/"><img class="redesIcons" src="img/icon-face.png"></a>
						<img class="redesIcons" src="img/icon-tw.png">
					</div>
			
				<div class="vl2"></div>
			</li>
			<li style="float:right; margin-top:  20px;">
				<div class="dropdown">
				  <button class="dropbtn"> <strong class="primaryColor">☰</strong> MENU</button>
				  <div class="dropdown-content" hidden> 
							<a class="class_a_href menuTxtFormatMenu secondColor menuLink" href="#exitos">CASOS DE ÉXITO</a>
							<a class="class_a_href menuTxtFormatMenu secondColor menuLink" href="#servicios">SERVICIOS</a>
							<a class="class_a_href menuTxtFormatMenu secondColor menuLink" href="#nosotros">¿QUIÈNES SOMOS?</a>
							<a class="class_a_href menuTxtFormatMenu secondColor menuLink" href="#cuentas">CUENTAS</a>
							<a class="class_a_href menuTxtFormatMenu secondColor menuLink" href="#mensaje">HOME BRANDING</a>
							<a class="class_a_href menuTxtFormatMenu secondColor menuLink" href="#contacto">CONTACTO</a>
				  </div>
				</div>
			</li>
		</ul>
	</header>
	

	<SECTION id="section">
		<div id="exitos" class="container-fluid">
	  			<h2 class="secondColor alingDer tittleDiv">CASOS DE ÉXITO</h2>


				  <div class="w3-row" id="myGrid">
					  <div class="w3-third gale-legth">

						<div class="containerData zoom">
						  <img src="img/8c2216a4-52f6-493a-9954-b6825e1a5f66.JPG" alt="Avatar" class="imageInfo imgFotoGalery">
						  <div class="overlay">
						    <div class="texto">Hello World</div>
						  </div>
						</div>

					    <img class="imgFotoGalery zoom" src="img/8c2216a4-52f6-493a-9954-b6825e1a5f66.JPG" style="width:100%">
					    <img class="imgFotoGalery zoom" src="img/1b7cd9d5-4dc6-4879-b262-fbd5aca7c58d.JPG" style="width:100%">
					    <img class="imgFotoGalery zoom" src="img/31ce0481-50b8-4cc0-92f2-5efaac2f067f.JPG" style="width:100%">
					  </div>

					  <div class="w3-third gale-center">
					    <img class="imgFotoGalery zoom" src="img/94c2edf9-fc29-4d2c-ad6f-e0f1a5674102.JPG" style="width:100%">
					    <img class="imgFotoGalery zoom" src="img/592f07f9-e885-4c2a-ad47-9ad736a4388a.JPG" style="width:100%">
					    <img class="imgFotoGalery zoom" src="img/100_9291.jpg" style="width:100%">
					  </div>

					  <div class="w3-third gale-rigth">
					    <img class="imgFotoGalery zoom" src="img/e3c4547a-60c2-4396-b61c-5a8f37364603.JPG" style="width:100%">
					    <img class="imgFotoGalery zoom" src="img/63cecbd6-536c-4352-8615-c584a0bb63cc.JPG" style="width:100%">
					    <img class="imgFotoGalery zoom" src="img/e207edbc-663b-4891-8822-d991542290ee.JPG" style="width:100%">
					  </div>
					</div>
		</div>
				
		<div id="servicios" class="container-fluid">
			<div class="contenedorServices" style="margin-right: -60px;">
				<div class="contenPadreServ">
					<h2 class="primaryColor tittleDiv">SERVICIOS</h2>
					<div class="contenidoService contHijoServ ">
						<img src="img/iconService.png" class="iconService logo">
						<h3>SALMPLING</h3>
						<p>Compuesto de promotores repartiendo volantes en puntos estratégicos seleccionados.<br></p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>SIGN HUMAN</h3>
						<p>Servicio con gran visibilidad, atrae clientes por la característica de que señala el punto de venta, conformado por una cedula de 2 a 4 promotores.<br></p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>PUBLIANDANTE</h3>
						<p>Promotor portando un mini bilboard con publicidad frente y vuelta, volanteando en zonas de gran afluencia, cercanos al punto de venta, cruceros, etc.</p>
					</div>

					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>PUBLIPANTALLA</h3>
						<p>Promotor portando un mini bilboard con publicidad frente y vuelta, volanteando en zonas de gran afluencia, cercanos al punto de venta, cruceros, etc.</p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>CROSS WALKER</h3>
						<p>Caracterizado por su gran impacto ya que además de la imagen promocional que lleve, puede repartir folleros o cualquier articulo promocional.</p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>CROSS BOARD STREET</h3>
						<p>Cédula de 4 promotoras o promotores portando un mini bilboard, recomendado para zonas de alto impacto.				    </p>
						<p> </p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>ROLL UP</h3>
						<p>Por medio de la exhibición de una lona publicitaria y del volanteo de flayers se logra la combinación perfecta para posicionar si marca en puntos con mayor flujo vehicular.</p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>BICI VALLA</h3>
						<p>Este servicio se caracteriza por tener la flexibilidad de recorrer y distribuir publicidad en puntos de gran afluencia, genera impacto en autos y peatones.</p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>CARTELERA MOVIL</h3>
						<p>Con un espacio publicitario, se propone al cliente rutas de acuerdo con sus necesidades.</p>
						<p> </p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>ESPECTACULARES</h3>
						<p>Contamos con los espectaculares con mayor vista dentro de la Ciudad de México, puntos como son, Santa Fe, Periférico, Viaducto, Ríos Churubusco, etc. </p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>PUBLICIDAD EN RUTA</h3>
						<p>Publicidad en movimiento, generando a diario grandes impactos ya que contamos con las rutas mas importantes, localizadas dentro de los cruces mas significativos de la CDMX.</p>
					</div>
					<div class="contenidoService contHijoServ">
						<img src="img/iconService.png" class="iconService">
						<h3>MATERIAL PUBLICITARIO</h3>
						<p>Material publicitario para punto de venta, elaborados con creatividad y solidas estructuras, listas para destacar la marca.</p>
					</div>

					<div class="contenidoService contHijoServ div-imgOver" >
						<img class="imgOver iconService" src="img/iconTemplate.png" title="Foto4" alt="Foto4">
					    <h3 class="titleHidden">MATERIAL PUBLICITARIO</h3>
					    <div class="text">
					    	<p>
					    		<h3>MATERIAL PUBLICITARIO</h3>
					    		Material publicitario para punto de venta, elaborados con creatividad y solidas estructuras, listas para destacar la marca.
					    	</p>
					    </div>
					</div>

				</div>
			</div>
		</div>

		<div id="nosotros" class="container-fluid">
			<div class="contenedorGaleria">
				<div>
					<h2 class="secondColor alingDer tittleDiv">QUIENES SOMOS</h2>
				</div>
				<div id="imagen" class="portada">
					<p class="elementoMmensaje menuTxtFormat">
						Tu Equipo de expertos en: Street Marketing, actividades BTL, Guerrilla en Semáforos; para lograr que su marca, su producto o empresa logre los resultados esperados a través de tácticas de mercadotecnia directa, aprovechando las oportunidades del mercado actual y futuro.
					</p>
				</div>
			</div>
		</div>

		<div id="cuentas" class="container-fluid">
			<div>
				<h2 class="tittleDiv primaryColor">CUENTAS</h2>
				<div>
						<img class="clientesLogos" src="img/logos1.jpg">
						<img class="clientesLogos" src="img/logos1.jpg">
				</div>
			</div>
		</div>
					<!--   	MENSAJE IMPORTANTE			 -->
		<div id="mensaje" class="container-fluid">
			<div class="footerMje">
				<div class="contenedorMje" style="position: relative;">
					<div class="iconLogoC">
						<img class="logoCircle" src="img/homebranding-logo-circle.png" alt="Home Branding Logo" style=" padding-top: 20px;    padding-left:  5px;">
					</div>
					<div>
						<h3 class="secondColor" style="right: -45px;">Home Brandig</h3>
						<div >
							<p style="position: absolute;bottom: 10px;">10 años <b>·</b>
								<img class="iconSocial" src="img/users.ico">
							</p>
						</div>
					</div>
				</div>
				<br><br><br><br>
				<div class="elementoMensajeEmotivo menuTxtFormat mjeText1">
					<p class="">
						<span class="marca secondColor">
							<!-- EMOJIS OBTENIDOS DE https://afeld.github.io/emoji-css/ -->
							<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
							¡Lo + importante de la comunicación <i class="em em-loudspeaker"></i><br> no esta en como se dice, sino en como se hace!<br>
							#TuPublicidadEnBuenas
							<i class="em em-open_hands"></i>
						</span>
					</p>
				</div>
				<div>
					<img class="publishFondo" src="img/handPublis.png" alt="ManosConAnuncios">
				</div>
			</div>
		</div>

		<div id="contacto" class="container-fluid">
			<div class=" w3-cell-row contenedorForm">
				<div class="w3-container w3-cell">
				  	<h3 class="tittleDiv" style="text-align:center;"><ins>ESCRÍBENOS:</ins></h3>
				  	<form class="form-horizontal" style="margin-left:  10px;" action="send.php">
					  	<div class="form-group">
						    <label class="control-label col-sm-2 colorContacto infoFormat" for="nom">Nombre:</label>
						    <div class="col-sm-6">
					        	<input type="text" class="form-control" id="nom" placeholder="Escriba su nombre" name="name" required="Please">
					     	</div>
					    </div>
					    <div class="form-group">
					    	<label class="control-label col-sm-2 colorContacto infoFormat" for="email">Email:</label>
					      	<div class="col-sm-6">
					        	<input type="email" class="form-control" id="email" placeholder="Escriba su email" name="email" required="Please">
					      	</div>
					    </div>
					    <div class="form-group">
					      	<label class="control-label col-sm-2 colorContacto infoFormat" for="tel">Teléfono:</label>
					      	<div class="col-sm-6">          
					        	<input type="tel" class="form-control" id="tel" placeholder="Escriba su número de Teléfono" name="tel" required="Please">
					      	</div>
					    </div>
					    <div class="form-group">
					    	<label class="control-label col-sm-2 colorContacto infoFormat" for="coment">Comentario:</label>
					      	<div class="col-sm-6">  
					      		<textarea class=" form-control" cols="25" rows="5" name="text" placeholder="Escriba su Comentario o mensaje" required="Please"></textarea>
					      	</div>
					    </div>
					    <div class="form-group">        
					    	<div class="col-sm-offset-2 col-sm-6">
					        	<input type="submit" class="btn btn-default"></input>
					      	</div>
					    </div>
				  	</form>
				</div>

				<div class="vl w3-containerw3-cell"></div>
				<div class="w3-container contenedorForm w3-cell" style="text-align:center;">
					<h3 class="tittleDiv"><ins style="color:  #FFFFFF;">INFORMES:</ins></h3>
					<div style="color:  #FFFFFF;" class="infoFormat">
						<p>Cerrada Noche Buena 15, <br>
						Col. Potreros, Deleg. Tlalpan <br>
						C.P. 01780, CDMX, Méx. <br>
						</p>
						<p class="colorContacto">atencionaclientes@homebramding.com.mx</p>
						<p style="color:  #FFFFFF; font-size: 2em; ">
							35-36-32-53 <br>
							35-36-32-54
						</p>
					</div>
				</div>
			</div>
		</div>
	</SECTION>
	<FOOTER>
		<div class="pie">
			<samp>
				<a href="#homeBranding" title="To Top">
				    ARRIBA
				 </a>
				 <br>
				<!-- Implements automatic YEAR -->
				<?php date_default_timezone_set('GMT'); echo date("Y.");?>
				Todos los Derechos Reservados. HomeBranding S.A. de C.V.
			</samp>
		</div>
	</FOOTER>
	<!-- 	Script Bootstrap JS Ref Movimiento en pantalla -->
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#homeBranding a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
</BODY>
</HTML>