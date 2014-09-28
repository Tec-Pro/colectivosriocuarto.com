<!Doctype HTML>
<html lang="es">
	<head>
		<title>Colectivos R&iacute;o Cuarto</title>
		<link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon"/> 
		<meta charset="UTF-8">
		<meta name="description" content="Colectivos de R&iaCute;o Cuarto se trata de una aplicaci&oacute;n sencilla y f&aacute;cil de usar la cual contiene todos los horarios y recorridos de todas las lineas urbanas E interurbAnas de la CIudad de R&iacute;o Cuarto, C&oacute;rdoba, Argentina.">
		<meta name="keywords" contenct="HTML5, CSS3, Javascript, PHP">
		<link rel="stylesheet" href="css/enviarEmail.css">	
	</head>	
	<body>
		<div id="agrupar">
		<nav id="menu">
			<ul>
				<li><figure><img src="imagenes/logo.png"></figure></li>
				<li><a href="index.html">inicio</a></li>
				<li><a href="horario.html">Horarios</a></li>
				<li><a href="recorrido.html">Recorridos</a></li>
				<li><a href="acercaDe.html">Acerca de</a></li>
				<li>Contacto</li>
				<li><a href="http://centorbihnos.com/" id="linkPublicidad" target="_blank"><img src="http://www.colectivosriocuarto.com/imagenes/publicidad1.png" id="publi"></a></li>
		</nav>
		<section id="texto">
<?php
function recogerDato($campo){
	return isset($_REQUEST[$campo])?$_REQUEST[$campo]:' ';
}
	$email = recogerDato('email');
	$message = recogerDato('message');
	$nombre = recogerDato('name');
	$asunto = recogerDato('asunto');
	$telefono = recogerDato('telephone');
	$para="softwaretecpro@gmail.com";
	$mensaje="Datos del formulario de contacto\n". "nombre: ".$nombre." \n"."email: ".$email." \n"."telefono: ".$telefono." \n"."Mensaje ".$message;
	mail($para,$asunto,$mensaje) or die("Error!");;
	echo "<p>Gracias por contactarnos</p>";
	echo "<p>Su solicitud ha sido enviada, en breve nos pondremos en contacto con usted.</p>";
?>
</section>		
		</div>	
	</body>
</html>