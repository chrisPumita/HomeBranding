<?php
	echo "<script>alert('Recibiendo datos: ".$_POST['nombre']." );</script>";

	
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

    //==Para enviar correos==

      require("includes/class.phpmailer.php");
      $mail = new PHPMailer();


      $contacto = "contacto@mecanismo.com.mx";
      $pass_contacto = "mecanismO.1";

      //$contacto = "web@mecanismo.com.mx";

       

	  
	  $mail->From     = $contacto;    // Correo Electronico para SMTP 
      $mail->FromName = $nombre; 
      $mail->AddAddress("christian.floppy@gmail.com"); // Dirección a la que llegaran los mensajes
	
	  // Aquí van los datos que apareceran en el correo que reciba
	  
	  $mail->WordWrap = 50; 
      $mail->IsHTML(true);     
      $mail->Subject  =  "Comentario recibido a traves del Sitio Web";
      $mail->Body     =  "<b>Este mensaje fue enviado por:</b> $nombre \n<br /><br />".
      "<b>Su e-mail es:</b> $email \n<br />".
      "<b>Su teléfono es:</b> $tel \n<br/>".
      "<b>Requiere:</b> $comentario \n<br /><br />";
	  
      // Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "mecanismo.com.mx";  // mail. o solo dominio - Servidor de Salida. (recomiendo sin mail.)
    $mail->SMTPAuth = true; 
    $mail->Username = $contacto;  // Correo Electrónico para SMTP correo@dominio.tld
    $mail->Password = $pass_contacto; // Contraseña para SMTP

    if ($mail->Send())
    echo "<script>alert('Tu información fue recibida de forma correcta, muchas gracias, pronto recibirás una respuesta');location.href ='http://www.irritinsa.com';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";



/**
 * /
			 require('path-of-extracted-folder/PHPMailerAutoload.php'); // ORIGINAL
				  
			 $mail = new PHPMailer();
			 //Quien ENVIA
	         $mail->From  = "web@mecanismo.com.mx"; 
             $mail->FromName = $nombre;
             //CORREO DESTINO:
             $mail->AddAddress("christian.floppy@gmail.com"); 
	  
			 $mail->WordWrap = 50; 
             $mail->IsHTML(true);     
             $mail->Subject  =  "PRUEBA LOCAL: Contacto desde el formulario del Sitio Web";
             $mail->Body     =  "<h1>PRUEBA LOCAL</H1> <br><b>Este mensaje fue enviado por:</b> $nombre \n<br /><br />".
								"DEMO 1.2 Su correo es: $correo \n".
								"Su telefono es: $tel \n".
								"Su comentario es: $comentario ";
						
			$mail->IsSMTP(); 
            $mail->Host = "mecanismo.com.mx";  // Servidor de Salida.
            $mail->SMTPAuth = true; 
            $mail->Username = "contacto@mecanismo.com.mx";  // Correo Electrónico
            $mail->Password = "mecanismO.1"; // Contraseña
			
			 if ($mail->Send())
		      	echo "<script>alert('Su información se envio con éxito');location.href ='index.html';</script>";
		      else
		      	echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
 */
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
			
	//}

?>