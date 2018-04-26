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

		/*
			 require("includes/class.phpmailer.php"); // ORIGINAL
				  
			 $mail = new PHPMailer();
			 //Quien ENVIA
	         $mail->From  = "conacto@elements.com.mx"; 
             $mail->FromName = $nombre;
             //CORREO DESTINO:
             $mail->AddAddress("israel@desarrolladora.net"); 
	  
			 $mail->WordWrap = 50; 
             $mail->IsHTML(true);     
             $mail->Subject  =  "PRUEBA LOCAL: Contacto desde el formulario del Sitio Web";
             $mail->Body     =  "<h1>PRUEBA LOCAL</H1> <br><b>Este mensaje fue enviado por:</b> $nombre \n<br /><br />".
								"DEMO 1.2 Su correo es: $correo \n".
								"Su telefono es: $tel \n".
								"Se enteró por: $conocimiento \n".
								"Su comentario es: $comentario ";
						
			$mail->IsSMTP(); 
            $mail->Host = "mecanismo.com.mx";  // Servidor de Salida.
            $mail->SMTPAuth = true; 
            $mail->Username = "contacto@mecanismo.com.mx";  // Correo Electrónico
            $mail->Password = "mecanismO.1"; // Contraseña
			
			 if ($mail->Send())
		      	echo "<script>alert('Formulario enviado');location.href ='http://elements.com.mx/index.html';</script>";
		      else
		      	echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
		 */

		
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
			echo "				<!-- The Modal -->
										<div id='myModal' class='modal'>

										  <!-- Modal content -->
										  <div class='modal-content'>
										    <div class='modal-header'>
										      <span class='close'>&times;</span>
										      <h2>Modal Header</h2>
										    </div>
										    <div class='modal-body'>
										      <p>Some text in the Modal Body</p>
										      <p>Some other text...</p>
										    </div>
										    <div class='modal-footer'>
										      <h3>Modal Footer</h3>
										    </div>
										  </div>

										</div>";
		}	
		else {
			echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";
		}
			
	//}

?>