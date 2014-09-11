<!Doctype HTML>
<html lang="es">
	<head>
		<title>Colectivos R&iacute;o Cuarto</title>
		<meta charset="YTF-8">
		<meta name="description" content="Colectivos de Río Cuarto Se trata de una aplicación sencilla y fácil de usar la cual contiene todos los horarios y recorridos de todas las lineas urbanas e interurbanas de la Ciudad de Río Cuarto, Córdoba, Argentina.">
		<meta name="keywords" contenct="HTML5, CSS3, Javascript, PHP">
		<link rel="stylesheet" href="css/acercaDe.css">	
	</head>	
	<body>
		<div id="agrupar">
		<nav id="menu">
			<ul>
				<li><figure><img src="imagenes/logo.png"></figure></li>
				<li><a href="home.html">inicio</a></li>
				<li><a href="horario.html">Horarios</a></li>
				<li><a href="recorrido.html">Recorridos</a></li>
				<li>Acerca de</li>
				<li><a href="contacto.html">Contacto</a></li>
			</ul>
		</nav>
		<section id="texto">
<?php
function recogerDato($campo){
	return isset($_REQUEST[$campo])?$_REQUEST[$campo]:' ';
}
	$email = recogerDato('email');
	$message = recogerDato('message');
	$nombre = recogerDato('nombre');
	$asunto = recogerDato('asunto');
	$para="softwaretecpro@gmail.com";
	$mensaje="Datos del formulario de contacto\n". "nombre: ".$nombre." \n"."email: ".$email." \n"."Mensaje ".$message;
	mail($para,$asunto,$mensaje);
	echo "<p>mensaje enviado correctamente</p>";
?>
</section>		
		</div>	
	</body>
</html>