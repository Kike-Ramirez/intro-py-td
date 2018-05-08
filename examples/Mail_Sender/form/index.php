<?php
//index.php

$error = '';
$name = '';
$surname = '';
$email = '';
$age = '';
$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
	}
	else
	{
		$name = utf8_decode($_POST["name"]);
//		if(!preg_match("/^[a-zA-Z ]*$/",$name))
//		{
//			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
//		}
	}
	if(empty($_POST["surname"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Surname</label></p>';
	}
	else
	{
		$surname = utf8_decode($_POST["surname"]);
//		if(!preg_match("/^[a-zA-Z ]*$/",$surname))
//		{
//			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
//		}
	}
	if(empty($_POST["email"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
	}
	else
	{
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
		}
	}
	if(empty($_POST["age"]))
	{
		$error .= '<p><label class="text-danger">Age is required</label></p>';
	}
	else
	{
		$age = clean_text($_POST["age"]);
		if(!preg_match("/^[0-9]*$/",$age))
		{
			$error .= '<p><label class="text-danger">Invalid age format</label></p>';
		}
	}
	if(empty($_POST["message"]))
	{
		$error .= '<p><label class="text-danger">Message is required</label></p>';
	}
	else
	{
		$message = utf8_decode($_POST["message"]);
	}

	if($error == '')
	{
		$file_open = fopen("bbdd.xls", "a");
		$no_rows = count(file("bbdd.xls"));
		if($no_rows > 1)
		{
			$no_rows = ($no_rows - 1) + 1;
		}
		$form_data = array(
			'sr_no'		=>	$no_rows,
			'name'		=>	$name,
			'surname'	=>	$surname,
			'email'		=>	$email,
			'age'		=>	$age,
			'message'	=>	$message
		);
		fputcsv($file_open, $form_data);
		$error = '';
		$name = '';
		$surname = '';
		$email = '';
		$age = '';
		$message = '';
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>ABSOLUT EXPERIENCE - SONAR 2018</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" type="image/ico" href="http://www.lightnotes.es/forms/favicon.ico">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body style="background-color:#fff;">
		<br />
		<div class="container">
			<div align="center">
			<img src="Absolut(600x300).png" style="max-width:100%;width:auto;height:auto;">
			</div>
			<br/>
			<br/>
			<h1 align="center" style="font-family:roboto black">ABSOLUT EXPERIENCE</h1>
			<!-- <br /> -->
			<div class="col-md-6" style="margin:0 auto; float:none;" >
				<form method="post" style="font-family:roboto condensed">
					<h2 align="center" style="font-family:roboto black">SONAR 2018</h2>
					<br />
					<?php echo $error; ?>
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" placeholder="Nombre" class="form-control" value="<?php echo $name; ?>" />
					</div>
					<div class="form-group">
						<label>Apellidos</label>
						<input type="text" name="surname" placeholder="Apellidos" class="form-control" value="<?php echo $surname; ?>" />
					</div>
					<div class="form-group">
						<label>Correo electrónico</label>
						<input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" />
					</div>
					<div class="form-group">
						<label>Edad</label>
						<input type="text" name="age" class="form-control" placeholder="Edad" value="<?php echo $age; ?>" />
					</div>
					<div class="form-group">
						<label>Mensaje (máximo 10 caracteres)</label>
						<textarea name="message" class="form-control" placeholder="Mensaje" maxlength="10"><?php echo $message; ?></textarea>
					</div>
					<br />
					
					<!-- ACLARACION DE POLITICA DE PRIVACIDAD -->
					<p>
					<div align="center">
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					    POLITICA DE PRIVACIDAD DE DATOS
					  </button>
					  </div>
					</p>
					<div class="collapse" id="collapseExample" >
					  <div class="card card-body">
					    En cumplimiento de lo establecido en la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, le informamos que, mediante la cumplimentación del presente formulario, sus datos personales quedarán incorporados y serán tratados en un fichero automatizado denominado NOMBRE DEL FICHERO, titularidad de ABSOLUT. con la finalidad de poder gestionar su solicitud, así como para mantenerle informado de futuras promociones, noticias y novedades relacionadas con el sector.

						ABSOLUT se compromete a tratar de forma confidencial los datos de carácter personal facilitados y a no comunicar o ceder dicha información a terceros.

						Usted podrá de forma libre y voluntaria facilitar la información que se le pide en los formularios salvo en los campos que aparecen como obligatorios. La no introducción de la información solicitada como obligatoria podrá tener como consecuencia que no pueda atenderse su solicitud.

						A su vez, y en virtud de lo establecido en la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio electrónico ABSOLUT informa que podrá utilizar las direcciones de correo electrónico facilitadas, para remitirte información acerca de sus productos y servicios, avisos y ofertas y, en general, información de carácter comercial de interés relativa a la actividad de la empresa.

						Asimismo, le informamos de la posibilidad que tiene de ejercer los derechos de acceso, rectificación, cancelación y oposición de sus datos de carácter personal de forma presencial en las oficinas de ABSOLUT. , acompañando copia de DNI, o bien mediante correo postal dirigido a: DIRECCIÓN ABSOLUT.
					  </div>
					</div>
					<!-- ACLARACION DE POLITICA DE PRIVACIDAD -->
					<br />
					<div class="form-group" align="center">
						<input type="submit" name="submit" class="btn btn-default" value="ENVIAR" />
					<br />
					<br />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
