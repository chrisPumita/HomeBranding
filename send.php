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
//			$mail->AddAddress("christian.floppy@gmail.com"); 
//			$mail->AddAddress("christian.floppy@yahoo.com"); 
//			$mail->AddAddress("gorillazN1_kfc@hotmail.com"); 
	  
			 $mail->WordWrap = 50; 
             $mail->IsHTML(true);     
             $mail->Subject  =  "Contacto desde HomeBranding Web Site";

			$mail->Body = " 
					<table style='font-family: arial, sans-serif;width: 250px;'>
							<tr>
								<td>
									<center>
										<img style='width: 80%;' src='http://mecanismo.mx/proyectos/HomeBranding/img/icons/iconHB.jpg' alt='Logo Hombe Branding'>
									</center>
								</td>
							</tr>
							<tr>
								<td style='border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #dddddd;'>
									<center>
										<h2>NOMBRE:</h2>
										$nombre
									</center>
								</td>
							</tr>
							<tr>
								<td style='border: 1px solid #dddddd; text-align: left; padding: 8px;'>
									<center>

										<h3>TELEFONO</h3>$tel
									</center>
								</td>
							</tr>
							<tr>
								<td style='border: 1px solid #dddddd; text-align: left; padding: 8px;  background-color: #dddddd;'>
									<center>
										<h3>Su mensaje:</h3>&quot;
										$comentario
										&quot;
									</center>
								</td>
							</tr>
							<tr>
								<td style='border: 1px solid #dddddd; text-align: left; padding: 8px; background: black; color: white'>
									<center>
										<h3>MAIL:</h3>$correo
									</center>
								</td>
							</tr>
					</table>
					<cite>Mensaje enviado desde el formulario de HomeBranding.com.mx</cite>
			 ";
						
			$mail->IsSMTP(); 
            $mail->Host = "mecanismo.com.mx";  // Servidor de Salida.
            $mail->SMTPAuth = true; 

			
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