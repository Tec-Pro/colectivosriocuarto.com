<?php
function recogerDato($campo){
    return isset($_REQUEST[$campo])?$_REQUEST[$campo]:' ';
}

    if(isset($_POST['origen'])) {
        $email = recogerDato('email');
        $message = recogerDato('message');
        $nombre = recogerDato('name');
        $asunto = recogerDato('asunto');
        $telefono = recogerDato('telephone');
        $para="softwaretecpro@gmail.com";
        $mensaje="Datos del formulario de contacto\n". "nombre: ".$nombre." \n"."email: ".$email." \n"."telefono: ".$telefono." \n"."Mensaje ".$message;
        mail($para,$asunto,$mensaje) or die("Error!");
        echo '<script src="lib/sweet-alert.min.js"></script>';
        echo '<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">';
        echo '<script>swal("Gracias por contactarnos", "Su solicitud ha sido enviada, en breve nos pondremos en contacto con usted.", "success");</script>';
    }
?>
<!Doctype HTML>
<html lang="es">
	<head>
        <title>Colectivos R&iacute;o Cuarto</title>
        <link rel="shortcut icon" href="imagenes/icon.ico" type="image/x-icon"/> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1.0,minimum-scale=1.0">
        <meta name="title" content="Recorridos - Colectivos R&iacute;o Cuarto" /> 
		<meta name="description" content="Colectivos de R&iacute;o cuarto se trata de una aplicaci&oacute;n sencilla y f&aacute;cil de usar la cual contiene todos los horarios y recorridos de todas las lineas urbanas e interurbanas de la ciudad de R&iacute;o Cuarto, C&oacute;rdoba, Argentina.">
        <script type="text/javascript" src='js/jquery.js'></script>
        <script type="text/javascript" src="js/horario.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">    
    <script type="text/javascript" src='js/bootstrap.min.js'></script>
    <script type="text/javascript" src='js/funcionalidades.js'></script>
        <script type="text/javascript">
        function controlar(){
            if ((document.getElementById("name").value == "") || (document.getElementById("name").value == " ")){
                sweetAlert("Oops...", "Ingrese su nombre por favor", "error");
            } else {
                if ((document.getElementById("email").value == "") || (document.getElementById("email").value == " ")){
                    sweetAlert("Oops...", "Ingrese su email por favor", "error");
                } else {
                    if ((document.getElementById("asunto").value == "") || (document.getElementById("asunto").value == " ")){
                        sweetAlert("Oops...", "Ingrese el asunto por favor", "error");
                    } else {
                         if ((document.getElementById("message").value == "") || (document.getElementById("message").value == " ")){
                            sweetAlert("Oops...", "Ingrese el mensaje por favor", "error");
                        } else{
                            document.getElementById("form-contacto").submit();
                        }
                    }
                }               
            }
        }

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50388654-2', 'auto');
  ga('send', 'pageview');

$(document).ready(function(){
        $('body').height($(window).height());
    });

        </script>
	</head>
    <style type="text/css">
body{
background: #CCCCCC;
    background: -webkit-linear-gradient(30deg,#8fca90,#058907); 
    background: -moz-linear-gradient(30deg,#8fca90,#058907); 
    background-repeat: no-repeat;
    }

.marginTop{
        margin-top: 1%;
        float: bottom;
    }
    </style>
	<body class='container-fluid'>
		<div id="agrupar">
<div id="navbar">
        <header id="navbar">
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class='navbar-header'>
                        <a class="navbar-brand" href="#">
                            <img  alt="Colectivos R&iacute;o Cuarto" src="imagenes/logo.png">
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                            <span class='sr-only'></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>                        
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav pull-right">
                             <li><a href="index.html">Inicio</a></li>
                             <li><a href="horario.html">Horarios</a></li>
                             <li><a href="recorrido.html">Recorridos</a></li>
                             <li><a href="acercaDe.html">Acerca de</a></li>                             
                             <li><a target="_blank" href="https://www.facebook.com/profile.php?id=673196096031342"><img class='img-responsive' src="imagenes/facebook.png"></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>   
    </div><br>
    <section class='row col-xs-12'>
        <article>
            <h1 class='text-center'> Contacto</h1>
            <form class='form-horizontal' id="form-contacto" method="post" action="">
                <div class='form-group'>
                <label class='control-label col-xs-1'for='name'>Nombre:</label>
                <div class='col-xs-11'>
                    <input class='form-control col-xs-11' type='text' name="name" id='name' placeholder='Nombre:' required='true'> 
                </div>
                </div>

                <div class='form-group'>
                <label class='control-label col-xs-1' for='telephone'>Telefono:</label>
                <div class='col-xs-11'>
                    <input class='form-control col-xs-11' type='text' id='telephone' name='telephone' placeholder='Numero de telefono:'> 
                </div>
                </div>

                <div class='form-group'>
                <label class='control-label col-xs-1' for='email'>E-mail:</label>
                <div class='col-xs-11'>
                    <input class='form-control col-xs-11' type='email'  name="email" id='email' placeholder='E-mail:' required='true'> 
                </div>
                </div>

                <div class='form-group'>
                <label class='control-label col-xs-1' for='asunto'>Asunto:</label>
                <div class='col-xs-11'>
                    <input class='form-control col-xs-11' type='text'  name="asunto" id='asunto' placeholder='Asunto:' required='true'> 
                </div>
                </div>

                <div class='form-group'>
                <label class='control-label col-xs-1' for='message'>Mensaje:</label>
                <div class='col-xs-11'>
                        <textarea class='form-control' id='message' name='message' placeholder='Mensaje:'></textarea>
                </div>
                </div>
                <button class='btn col-xs-offset-1 btn-default' name="submit" value="Enviar !" onclick="controlar()">Enviar</button>
            </form>
        </article>
        <br>
    <br>
    </section>  
         <footer class="footer container marginTop" id="auspiciantes">
                <a class='col-xs-4 marginTop' href="http://centorbihnos.com/" target="_blank"><img class='img-responsive center-block'src="http://www.colectivosriocuarto.com/imagenes/publicidad1.png"></a>
                <a class='col-xs-4' href="https://www.facebook.com/pages/Alquiler-de-Trajes-HOMBRES/116858305083482" target="_blank"><img class='img-responsive center-block' src="http://www.colectivosriocuarto.com/imagenes/traje.png"></a>          
                <a class='col-xs-4 marginTop' href="https://www.facebook.com/CyLjoyas" target="_blank"><img class='img-responsive center-block' src="imagenes/lcjoyas.png" id="publi3"</a>
            </footer>   
	</body>
</html>