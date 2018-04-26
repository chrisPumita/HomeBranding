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
		  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- LOCAL SYLES  -->
		  <link rel="stylesheet" type="text/css" href="styles/style.css">
		  <link rel="stylesheet" type="text/css" href="styles/w3.css">
		  <link rel="stylesheet" type="text/css" href="styles/cssF.css">
		  <link rel="stylesheet" type="text/css" href="styles/effects.css">
		  <link rel="stylesheet" type="text/css" href="styles/cssS.css">
		
	<!--    ESTILOS DE PRUEBA	-->
		<style>
		/*NO REMOVE*/
        #imagen{
	        background-image: url('img/banQuienes.jpg');
	        background-repeat: repeat;
	        height:100%;
	        width:100%;
	        -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        #imagen{
		    animation-name: mov-izq;
		    animation-duration: 15s;
		    animation-iteration-count: infinite;
		    animation-timing-function: linear;
		    animation-delay: 1s;
	         
	        -moz-animation-name: mov-izq;
	        -moz-animation-duration: 15s;
	        -moz-animation-iteration-count: infinite;
	        -moz-animation-timing-function: linear;
	        -moz-animation-delay: 1s; 
	          
	        -webkit-animation-name: mov-izq;
	        -webkit-animation-duration: 15s;
	        -webkit-animation-iteration-count: infinite;
	        -webkit-animation-timing-function: linear;
	        -webkit-animation-delay: 1s;
        }
	    @keyframes mov-izq{
          100%{background-position:-940px 0px}
        }
        @-webkit-keyframes mov-izq{
            100%{background-position:-940px 0px}
        }
        /*NO REMOVE*/
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
						<h3 class="secondColor alingDer tittleDiv">Siguenos!</h3>
						<a class="redes" href="https://www.facebook.com/HomeBranding/" target="_blank"><img class="redesIcons" src="img/icon-face.png"></a>
						<img class="redesIcons" src="img/icon-tw.png">
					</div>
			
				<div class="vl2"></div>
			</li>



				<ul id="menu" class="navegacion">
					<li><a class="txt-menu" href="#" onclick="return false" ;="" style="font-size:  25px;">
						<strong class="primaryColor">☰</strong><strong>MENU</strong>
					</a>
						<ul id="submenu" hidden="" style="display: none;">
							
							<li class="submenu"><a href="#exitos">CASOS DE ÉXITO</a></li>
							<li class="submenu"><a href="#servicios">SERVICIOS</a></li>
							<li class="submenu"><a href="#nosotros">¿QUIÈNES SOMOS?</a></li>
							<li class="submenu"><a href="#cuentas">CUENTAS</a></li>
							<li class="submenu"><a href="#mensaje">HOME BRANDING</a></li>
							<li class="submenu"><a href="#contacto">CONTACTO</a></li>
						</ul>

					</li>
				</ul>
		</ul>
	</header>
	<!--  	 			SECCION DE CODIGO PHP PARA DATOS A MOSTRAR -->
	<?php 
	/*
			Optimizacion de la informacion de las imagenes, con ayuda de php se imprimen solo los valores de cada imagen y si se desea cambiarlas, solamente se efita el valor.
	 */
			$img1_name = "BURGER KING";
			$img1_peo = "4548";
			$img1_reg = "342";
			$img1_pre = "10";

			$img2_name = "Domino`s Pizza";
			$img2_peo = "3,500";
			$img2_reg = "320";
			$img2_pre = "93";

			$img3_name = "Cerveceria Modelo";
			$img3_peo = "1,500";
			$img3_reg = "810";
			$img3_pre = "32";

			$img4_name = "Cerveceria Modelo";
			$img4_peo = "1,500";
			$img4_reg = "810";
			$img4_pre = "32";

			$img5_name = "Cerveceria Modelo";
			$img5_peo = "1,500";
			$img5_reg = "810";
			$img5_pre = "32";

			$img6_name = "Cerveceria Modelo";
			$img6_peo = "1,500";
			$img6_reg = "810";
			$img6_pre = "32";

			$img7_name = "Cerveceria Modelo";
			$img7_peo = "1,500";
			$img7_reg = "810";
			$img7_pre = "32";

			$img8_name = "Cerveceria Modelo";
			$img8_peo = "1,500";
			$img8_reg = "810";
			$img8_pre = "32";

			$img9_name = "Cerveceria Modelo";
			$img9_peo = "1,500";
			$img9_reg = "810";
			$img9_pre = "32";

			$img10_name = "Cerveceria Modelo";
			$img10_peo = "1,500";
			$img10_reg = "810";
			$img10_pre = "32";

			$img11_name = "Cerveceria Modelo";
			$img11_peo = "1,500";
			$img11_reg = "810";
			$img11_pre = "32";
	?>

	<SECTION id="section">
		<div id="exitos" class="container-fluid">
	  		<h2 class="secondColor alingDer tittleDiv">CASOS DE ÉXITO</h2>
			<div class="w3-row" id="myGrid">
<!--  	PRIMER PANEL IZQ IMAGENES 123  -->
				<div class="w3-third gale-legth">
<!--1.1 imagen estatica-->
					<div class="containerData zoom box1">
						<img class="imagenAjustada img_container" src="img/photos/1.1.JPG" alt="foto1">
						    <div id="alpha">
						    	<p>
						    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
									<?php echo "$img1_peo"; ?> 
									<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
									<?php echo "$img1_reg"; ?>
									<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
									<?php echo "$img1_pre"; ?>
						    	</p>
						    </div>
						<div class="overlay">
						    <div class="texto">
						    	<p>
						    		<strong><ins>Activación</ins></strong><br>
						    		<?php echo "$img1_name"; ?> <br>
									<img class="iconImageDesple" src="img/icons/people-icon.png">
									<?php echo "$img1_peo"; ?> Personas <br>
									<img class="iconImageDesple" src="img/icons/speech-bubble.png">
									<?php echo "$img1_reg"; ?> Registros <br>
									<img class="iconImageDesple" src="img/icons/premios-icon.png">
									<?php echo "$img1_pre"; ?> Premios<br>
						    	</p>
						    </div>
						</div>
					</div>
<!--1.2 imagen estatica-->
					<div class="containerData zoom box2">
					  <img class="imagenAjustada img_container" src="img/photos/1.2.JPG" alt="foto1">
						    <div id="alpha">
						    	<p>
						    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
									<?php echo "$img2_peo"; ?> 
									<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
									<?php echo "$img2_reg"; ?>
									<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
									<?php echo "$img2_pre"; ?>
						    	</p>
						    </div>
						<div class="overlay">
					    <div class="texto">
					    	<p>
					    		<strong><ins>Activación</ins></strong><br>
					    		<?php echo "$img2_name"; ?> <br>
								<img class="iconImageDesple" src="img/icons/people-icon.png">
								<?php echo "$img2_peo"; ?> Personas <br>
								<img class="iconImageDesple" src="img/icons/speech-bubble.png">
								<?php echo "$img2_reg"; ?> Registros <br>
								<img class="iconImageDesple" src="img/icons/premios-icon.png">
								<?php echo "$img2_pre"; ?> Premios<br>
					    	</p>
					    </div>
					  </div>
					</div>
<!-- 1.3 imagen estatica-->
					<div class="containerData zoom box3">
					  	<img class="imagenAjustada img_container" src="img/photos/1.3.JPG" alt="foto1">
						    <div id="alpha">
						    	<p>
						    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
									<?php echo "$img3_peo"; ?> 
									<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
									<?php echo "$img3_reg"; ?>
									<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
									<?php echo "$img3_pre"; ?>
						    	</p>
						    </div>
					  	<div class="overlay">
					    <div class="texto">
					    	<p>
					    		<strong><ins>Activación</ins></strong><br>
					    		<?php echo "$img3_name"; ?> <br>
								<img class="iconImageDesple" src="img/icons/people-icon.png">
								<?php echo "$img3_peo"; ?> Personas <br>
								<img class="iconImageDesple" src="img/icons/speech-bubble.png">
								<?php echo "$img3_reg"; ?> Registros <br>
								<img class="iconImageDesple" src="img/icons/premios-icon.png">
								<?php echo "$img3_pre"; ?> Premios<br>
					    	</p>
					    </div>
					  </div>
					</div>
				</div>


<!--	SEGUNDO PANEL SE COMPONE DE 4 IMAGENES	IMG 4,5,6,7		-->

				<div class="w3-third gale-center">
				    <!--1.1 imagen estatica-->
					<div class="containerData zoom box4">
						<img class="imagenAjustada img_container" src="img/photos/2.1.JPG" alt="foto1">
						    <div id="alpha">
						    	<p>
						    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
									<?php echo "$img4_peo"; ?> 
									<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
									<?php echo "$img4_reg"; ?>
									<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
									<?php echo "$img4_pre"; ?>
						    	</p>
						    </div>
						<div class="overlay">
						    <div class="texto">
						    	<p>
						    		<strong><ins>Activación</ins></strong><br>
						    		<?php echo "$img4_name"; ?> <br>
									<img class="iconImageDesple" src="img/icons/people-icon.png">
									<?php echo "$img4_peo"; ?> Personas <br>
									<img class="iconImageDesple" src="img/icons/speech-bubble.png">
									<?php echo "$img4_reg"; ?> Registros <br>
									<img class="iconImageDesple" src="img/icons/premios-icon.png">
									<?php echo "$img4_pre"; ?> Premios<br>
						    	</p>
						    </div>
						</div>
					</div>
<!-- 2.2 imagen estatica-->
					<div class="containerData zoom box5">
					  	<img class="imagenAjustada img_container" src="img/photos/2.2.JPG" alt="foto1">
						    <div id="alpha">
						    	<p>
						    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
									<?php echo "$img5_peo"; ?> 
									<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
									<?php echo "$img5_reg"; ?>
									<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
									<?php echo "$img5_pre"; ?>
						    	</p>
						    </div>
					  	<div class="overlay">
					    <div class="texto">
					    	<p>
					    		<strong><ins>Activación</ins></strong><br>
					    		<?php echo "$img5_name"; ?> <br>
								<img class="iconImageDesple" src="img/icons/people-icon.png">
								<?php echo "$img5_peo"; ?> Personas <br>
								<img class="iconImageDesple" src="img/icons/speech-bubble.png">
								<?php echo "$img5_reg"; ?> Registros <br>
								<img class="iconImageDesple" src="img/icons/premios-icon.png">
								<?php echo "$img5_pre"; ?> Premios<br>
					    	</p>
					    </div>
					  </div>
					</div>
<!-- 2.3 imagen estatica-->
					<div class="containerData zoom box5">
					  	<img class="imagenAjustada img_container" src="img/photos/2.3.JPG" alt="foto1">
						    <div id="alpha">
						    	<p>
						    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
									<?php echo "$img6_peo"; ?> 
									<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
									<?php echo "$img6_reg"; ?>
									<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
									<?php echo "$img6_pre"; ?>
						    	</p>
						    </div>
					  	<div class="overlay">
					    <div class="texto">
					    	<p>
					    		<strong><ins>Activación</ins></strong><br>
					    		<?php echo "$img6_name"; ?> <br>
								<img class="iconImageDesple" src="img/icons/people-icon.png">
								<?php echo "$img6_peo"; ?> Personas <br>
								<img class="iconImageDesple" src="img/icons/speech-bubble.png">
								<?php echo "$img6_reg"; ?> Registros <br>
								<img class="iconImageDesple" src="img/icons/premios-icon.png">
								<?php echo "$img6_pre"; ?> Premios<br>
					    	</p>
					    </div>
					  </div>
					</div>
<!-- 2.4 imagen estatica-->
					<div class="containerData zoom box7">
					  	<img class="imagenAjustada img_container" src="img/photos/2.4.JPG" alt="foto1">
						    <div id="alpha">
						    	<p>
						    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
									<?php echo "$img7_peo"; ?> 
									<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
									<?php echo "$img7_reg"; ?>
									<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
									<?php echo "$img7_pre"; ?>
						    	</p>
						    </div>
					  	<div class="overlay">
					    <div class="texto">
					    	<p>
					    		<strong><ins>Activación</ins></strong><br>
					    		<?php echo "$img7_name"; ?> <br>
								<img class="iconImageDesple" src="img/icons/people-icon.png">
								<?php echo "$img7_peo"; ?> Personas <br>
								<img class="iconImageDesple" src="img/icons/speech-bubble.png">
								<?php echo "$img7_reg"; ?> Registros <br>
								<img class="iconImageDesple" src="img/icons/premios-icon.png">
								<?php echo "$img7_pre"; ?> Premios<br>
					    	</p>
					    </div>
					  </div>
					</div>
				</div>

					  <!--	TERCER PANEL SE COMPONE DE 4 IMAGENES	IMG 8,9,10,11		-->

				<div class="w3-third gale-rigth">
<!--3.1 imagen estatica-->
					<div class="containerData zoom box8" style="width:  380px;">
						<img class="imagenAjustada img_container" src="img/photos/3.1.JPG" alt="foto1">
						    <div id="alpha" style="width:  380px;">
						    	<p>
						    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
									<?php echo "$img8_peo"; ?> 
									<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
									<?php echo "$img8_reg"; ?>
									<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
									<?php echo "$img8_pre"; ?>
						    	</p>
						    </div>
						<div class="overlay">
						    <div class="texto">
						    	<p>
						    		<strong><ins>Activación</ins></strong><br>
						    		<?php echo "$img8_name"; ?> <br>
									<img class="iconImageDesple" src="img/icons/people-icon.png">
									<?php echo "$img8_peo"; ?> Personas <br>
									<img class="iconImageDesple" src="img/icons/speech-bubble.png">
									<?php echo "$img8_reg"; ?> Registros <br>
									<img class="iconImageDesple" src="img/icons/premios-icon.png">
									<?php echo "$img8_pre"; ?> Premios<br>
						    	</p>
						    </div>
						</div>
					</div>
					<!-- 3.2.1 imagen estatica   PAR DE IMAGENES -->
					<div class="w3-row" id="myGrid">
						<div class="w3-third" style="width:  50%;">
										<div class="containerData zoom box9">
										  	<img class="imagenAjustada img_container" src="img/photos/3.2.1.JPG" alt="foto1">
											    <div id="alpha">
											    	<p>
											    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
														<?php echo "$img9_peo"; ?> 
														<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
														<?php echo "$img9_reg"; ?>
														<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
														<?php echo "$img9_pre"; ?>
											    	</p>
											    </div>
										  	<div class="overlay">
										    <div class="texto">
										    	<p>
										    		<strong><ins>Activación</ins></strong><br>
										    		<?php echo "$img9_name"; ?> <br>
													<img class="iconImageDesple" src="img/icons/people-icon.png">
													<?php echo "$img9_peo"; ?> Personas <br>
													<img class="iconImageDesple" src="img/icons/speech-bubble.png">
													<?php echo "$img9_reg"; ?> Registros <br>
													<img class="iconImageDesple" src="img/icons/premios-icon.png">
													<?php echo "$img9_pre"; ?> Premios<br>
										    	</p>
										    </div>
										  </div>
										</div>
						</div>
						<div class="w3-third" style="width:  50%;">
					<!-- 3.2.2 imagen estatica-->
										<div class="containerData zoom box10">
										  	<img class="imagenAjustada img_container" src="img/photos/3.2.2.JPG" alt="foto1">
											    <div id="alpha">
											    	<p>
											    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
														<?php echo "$img10_peo"; ?> 
														<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
														<?php echo "$img10_reg"; ?>
														<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
														<?php echo "$img10_pre"; ?>
											    	</p>
											    </div>
										  	<div class="overlay">
										    <div class="texto">
										    	<p>
										    		<strong><ins>Activación</ins></strong><br>
										    		<?php echo "$img10_name"; ?> <br>
													<img class="iconImageDesple" src="img/icons/people-icon.png">
													<?php echo "$img10_peo"; ?> Personas <br>
													<img class="iconImageDesple" src="img/icons/speech-bubble.png">
													<?php echo "$img10_reg"; ?> Registros <br>
													<img class="iconImageDesple" src="img/icons/premios-icon.png">
													<?php echo "$img10_pre"; ?> Premios<br>
										    	</p>
										    </div>
										  </div>
										</div>
						</div>
					</div>
<!-- 3.3 imagen estatica-->
					<div class="containerData zoom box11" style="width:  350px;">
					  	<img class="imagenAjustada img_container" src="img/photos/3.3.JPG" alt="foto1">
						    <div id="alpha" style="width:  350px;">
						    	<p>
						    		<img class="iconImageDesple" src="img/icons/people-iconBN.png">
									<?php echo "$img11_peo"; ?> 
									<img class="iconImageDesple" src="img/icons/speech-bubbleB.png">
									<?php echo "$img11_reg"; ?>
									<img class="iconImageDesple" src="img/icons/premios-iconBN.png">
									<?php echo "$img11_pre"; ?>
						    	</p>
						    </div>
					  	<div class="overlay">
					    <div class="texto">
					    	<p>
					    		<strong><ins>Activación</ins></strong><br>
					    		<?php echo "$img11_name"; ?> <br>
								<img class="iconImageDesple" src="img/icons/people-icon.png">
								<?php echo "$img11_peo"; ?> Personas <br>
								<img class="iconImageDesple" src="img/icons/speech-bubble.png">
								<?php echo "$img11_reg"; ?> Registros <br>
								<img class="iconImageDesple" src="img/icons/premios-icon.png">
								<?php echo "$img11_pre"; ?> Premios<br>
					    	</p>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
				
		<div id="servicios" class="container-fluid" style="padding-bottom: 110px;">
			<div class="contenedorServices" style="margin-right: -60px;">
				<div class="contenPadreServ">
					<h2 class="primaryColor tittleDiv">SERVICIOS</h2>

					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img\hm.png" alt="Entregando Flayer">
					    <h3 class="titleHidden">SALMPLING</h3>
					    <div class="text">
					    	<p>
					    		<h3>SALMPLING</h3>
					    		Compuesto de promotores repartiendo volantes en puntos estratégicos seleccionados.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/flecha.png" alt="Banner de flecha">
					    <h3 class="titleHidden">SIGN HUMAN</h3>
					    <div class="text">
					    	<p>
					    		<h3>SIGN HUMAN</h3>
					    		Servicio con gran visibilidad, atrae clientes por la característica de que señala el punto de venta, conformado por una cedula de 2 a 4 promotores.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/solo.png" alt="Banner de flecha">
					    <h3 class="titleHidden">PUBLIANDANTE</h3>
					    <div class="text">
					    	<p>
					    		<h3>PUBLIANDANTE</h3>
					    		Promotor portando un mini bilboard con publicidad frente y vuelta, volanteando en zonas de gran afluencia, cercanos al punto de venta, cruceros, etc.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/pantalla.png" alt="Banner de flecha">
					    <h3 class="titleHidden">PUBLIPANTALLA</h3>
					    <div class="text">
					    	<p>
					    		<h3>PUBLIPANTALLA</h3>
					    		Promotor portando un mini bilboard con publicidad frente y vuelta, volanteando en zonas de gran afluencia, cercanos al punto de venta, cruceros, etc.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/par.png" alt="Banner de flecha">
					    <h3 class="titleHidden">CROSS WALKER</h3>
					    <div class="text">
					    	<p>
					    		<h3>CROSS WALKER</h3>
					    		Caracterizado por su gran impacto ya que además de la imagen promocional que lleve, puede repartir folleros o cualquier articulo promocional.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/chicas.png" alt="Banner de flecha">
					    <h3 class="titleHidden">CROSS BOARD STREET</h3>
					    <div class="text">
					    	<p>
					    		<h3>CROSS BOARD STREET</h3>
					    		Cédula de 4 promotoras o promotores portando un mini bilboard, recomendado para zonas de alto impacto.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/par2.png" alt="Banner de flecha">
					    <h3 class="titleHidden">ROLL UP</h3>
					    <div class="text">
					    	<p>
					    		<h3>ROLL UP</h3>
					    		Por medio de la exhibición de una lona publicitaria y del volanteo de flayers se logra la combinación perfecta para posicionar si marca en puntos con mayor flujo vehicular.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/bici.png" alt="Banner de flecha">
					    <h3 class="titleHidden">BICI VALLA</h3>
					    <div class="text">
					    	<p>
					    		<h3>BICI VALLA</h3>
					    		Este servicio se caracteriza por tener la flexibilidad de recorrer y distribuir publicidad en puntos de gran afluencia, genera impacto en autos y peatones.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/camion.png" alt="Banner de flecha">
					    <h3 class="titleHidden">CARTELERA MOVIL</h3>
					    <div class="text">
					    	<p>
					    		<h3>CARTELERA MOVIL</h3>
					    		Con un espacio publicitario, se propone al cliente rutas de acuerdo con sus necesidades.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/anuncio.png" alt="Banner de flecha">
					    <h3 class="titleHidden">ESPECTACULARES</h3>
					    <div class="text">
					    	<p>
					    		<h3>ESPECTACULARES</h3>
					    		Contamos con los espectaculares con mayor vista dentro de la Ciudad de México, puntos como son, Santa Fe, Periférico, Viaducto, Ríos Churubusco, etc. 
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/bus.png" alt="Banner de flecha">
					    <h3 class="titleHidden">PUBLICIDAD EN RUTA</h3>
					    <div class="text">
					    	<p>
					    		<h3>PUBLICIDAD EN RUTA</h3>
					    		Publicidad en movimiento, generando a diario grandes impactos ya que contamos con las rutas mas importantes, localizadas dentro de los cruces mas significativos de la CDMX.
					    	</p>
					    </div>
					</div>
					<div class="contenidoService contHijoServ div-imgOver">
						<img class="imgOver iconService" src="img/globos.png" alt="Foto4">
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
					<p class="elementoMmensaje menuTxtFormat zoom">
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
						<h3 class="secondColor" style="right: -45px; padding-left:10px">Home Brandig</h3>
						<div >
							<p class="secondColor" style="position: absolute; bottom: 40px; padding-left:10px">   10 años <b>·</b>
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
							¡Lo + importante de la comunicación <i class="em em-loudspeaker zoom iconsTextMje1"></i><br> no esta en como se dice, sino en como se hace!<br>
							<strong>#TuPublicidadEnBuenas</strong>
							<i class="em em-open_hands zoom iconsTextMje1"></i>
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
<div class="w3-container w3-cell" style="padding-left: 60px;">
				  	<h3 class="tittleDivForm" style="text-align:center;"><ins>ESCRÍBENOS:</ins></h3>
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
					<h3 class="tittleDivForm"><ins style="color:  #FFFFFF;">INFORMES:</ins></h3>
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
				    ▲
				 </a>
				 <br>
				<!-- Implements automatic YEAR -->
				<?php date_default_timezone_set('GMT'); echo date("Y.");?>
				© Todos los Derechos Reservados. HomeBranding S.A. de C.V.
				<br><h3>VERSION DEMO 1.8.2 BUILD 26.4.18</h3>
			</samp>
		</div>
	</FOOTER>
	<!-- 	Script Bootstrap JS Ref Navegator -->
<script>
$(document).ready(function(){$('body').scrollspy({target: ".navbar", offset: 50});$("#homeBranding a").on('click', function(event) {if (this.hash !== "") {event.preventDefault();
       var hash = this.hash;$('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
	<script>
		$("#submenu").hide();
		var flag = 0;
		$("#menu").click(function(){
			flag = (flag + 1)%2;
			
			if (flag==1) {
				$("#submenu").show(1000);
				$(".txt-menu").text("X CERRAR");
			}else {
				$("#submenu").hide(1000);
				$(".txt-menu").text("☰ MENU");
			}
		});
	</script>
</BODY>
</HTML>