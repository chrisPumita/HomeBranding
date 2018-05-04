<?php
	header("Content-Type: text/html;charset=utf-8");
	$nombre = "";
	if ( $_POST['nombre'] )
		$nombre = $_POST['nombre'];

	$correo = "";
	if ( $_POST['correo'] )
		$correo = $_POST['correo'];

	$tel = "";
	if ( $_POST['tel'] )
		$tel = $_POST['tel'];

	$comentario = "";
	if ( $_POST['comentario'] )
		$comentario = $_POST['comentario'];
/*

	if ( empty($nombre) || empty($correo) || empty($tel) ){
		echo "<script>alert('!Por favor llene todos los campos');location.href ='javascript:history.back()';</script>";
	}
	else {
 */

 // PARTE PARA ENVIAR LOS CORREOS ===================================================================================================================================================== 
	   /*
	   
	    require("includes/class.phpmailer.php");//
	      $mail = new PHPMailer();
	      $mail->IsSMTP(); 

	      $contacto = "web@mecanismo.com.mx";
	      $pass_contacto = "mecaMXweb.2";
	      $para = "christian.floppy@gmail.com" //PRUEBA PARA RECIBIR EL CORREO


	          
	      $mail->From     = $contacto;    // Correo Electronico para SMTP 
	      $mail->FromName = $nombre; 
	      $mail->AddAddress($para); // Dirección a la que llegaran los mensajes

	            // Aquí van los datos que apareceran en el correo que reciba
	          
	      $mail->WordWrap = 50; 
	      $mail->IsHTML(true);     
	      $mail->Subject  =  "Comentario recibido a traves del Sitio Web";

	      $mail->Body = '<div class="body">
						<p>Estimado(a) '.$nombre.',</p>
						<p>CUERPO DEL MENSAJE</p>
						<br><br>
						<p>Correo: '.$correo.',</p>
						<p>Teléfono: '.$tel.',</p>
						<p>Comentario: '.$comentario.',</p>
						<br><br><br>
						<br>
						<cite>ENVIO DE CORREO DE PRUEBA</cite>
						
					</div>

					
			';

			         // Datos del servidor SMTP

	      $mail->Host = "mecanismo.com.mx";  // mail. o solo dominio - Servidor de Salida. (recomiendo sin mail.)
	      $mail->SMTPAuth = true; 
	      $mail->Username = $contacto;  // Correo Electrónico para SMTP correo@dominio.tld
	      $mail->Password = $pass_contacto; // Contraseña para SMTP

	      if ($mail->Send())
			echo "<script>alert('Se envio el correo exitosamente a: $para');location.href ='../index.php';</script>";
	      else
			echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
	    */




			 require("includes/class.phpmailer.php");// ORIGINAL
				  
			 $mail = new PHPMailer();
			 //Quien ENVIA
	         $mail->From  = "web@mecanismo.com.mx"; 
             $mail->FromName = $nombre;
             //CORREO DESTINO:
             $mail->AddAddress("web@mecanismo.com.mx "); 
	  
			 $mail->WordWrap = 50; 
             $mail->IsHTML(true);     
             $mail->Subject  =  "Contacto desde HomeBranding Web Site";

			$mail->Body = " 
				<!DOCTYPE html>
					<html>
					<head>
					<meta charset='utf-8'>
					<meta name='viewport' content='width=device-width, initial-scale=1'>
					<style>
					body{
					  text-align: center;
					  font-family: arial;
					}
					.card {
					  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
					  max-width: 50%;
					  margin: auto;
					}
					.card:hover {
					    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
					}
					.container {
					    padding: 2px 16px;
					}
					.title {
					  color: #787872;
					  font-size: 18px;
					}
					img{
					  width: 50%;
					  padding: 10%;
					}
					button {
					  border: none;
					  outline: 0;
					  display: inline-block;
					  padding: 8px;
					  color: white;
					  background-color: #9FC74D;
					  text-align: center;
					  cursor: pointer;
					  width: 100%;
					  font-size: 18px;
					}
					a {
					  text-decoration: none;
					  font-size: 22px;
					  color: #787872;
					}
					button:hover, a:hover {
					  opacity: 0.7;
					}anuncio.png
					</style>
					</head>
					  <body>
					    <h2 style='text-align:center'>Informacion de Registro:</h2>
					    <div class='card'>
					      <img src='http://mecanismo.mx/proyectos/HomeBranding/img/homebranding-logo-circle.png' alt='Icon'>
					      <div class='container'>
					      <h1>$nombre</h1>
					      <p class='title'>$tel</p>
					      <p>SU MENSAJE:</p>
					      <strong><cite>' $comentario.'</cite></strong>
					      </div>
					       <p><button><a href='mailto:$correo?subject=Respuesta de contacto' 'email me'>Correo Electronico: <br>$correo 
					      </a></button></p>
					    </div>
					  </body>
					</html> 
			 ";
						
			$mail->IsSMTP(); 
            $mail->Host = "mecanismo.com.mx";  // Servidor de Salida.
            $mail->SMTPAuth = true; 
            $mail->Username = "web@mecanismo.com.mx";  // Correo Electrónico
            $mail->Password = "mecaMXweb.2"; // Contraseña
			
			 if ($mail->Send())
		      	echo "<script>alert('Gracias, nos pondremos en contacto con usted $nombre');location.href ='index.php';</script>";
		      else
		      	echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

/*
		$your_email = 'christian.floppy@gmail.com';
		//$your_email = "web@mecanismo.com.mx";
		//$your_email = "israel@elements.com.mx";
		$email_subject = "Home Branding - Web site";
		$email_content = "Este mensaje fue enviado por: $nombre \n".
		"Su correo es: $correo \n".
		"Su telefono es: $tel \n".
		"Su comentario es: $comentario ";


		if( @mail( $your_email,$email_subject,$email_content ) ) {
			echo "<script>alert('Se envio el correo exitosamente');</script>";
			echo "<script>location.href ='index.php';</script>";
		}	
		else {
			echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
		}
*/

?>