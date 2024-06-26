<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>ECOTELECOM</title>
	<link rel="icon" href="img/eco_icon.ico">
	<link rel="stylesheet" type="text/css" href="Formulario.css">
</head>

<body>

	<header>
		<div class="contenedor">
			<!--<p class="logo">ecoTELECOM</p>-->
			<img src="img/ecotel_white_menu.png">
			<!--Barra superior para mostrar opciones como menú-->
			<nav>
				<a href="Index.html">Inicio</a><br>
				<a href="Formulario.html">Solicita Información</a><br>
			</nav>
		</div>
	</header>
	<section id="hero">
		<div class="form">
			<form action="correo.php" method="post">
				<h2>¡Gracias por confiar en ecoTELECOM!</h2>
				<p>Uno de nuestros asesores se estará comunicando contigo.</p>
				<input type="text" name="nombre" placeholder="Escriba su nombre" required>
				<input type="text" name="empresa" placeholder="Escriba el nombre de la empresa" required>
				<input type="email" name="correo" placeholder="Escriba su correo electrónico" required>
				<input type="text" name="asunto" placeholder="Escriba su asunto" required>
				<textarea placeholder="Escriba aquí su mensaje..." name="mensaje" required></textarea><br>
				<button type="submit" name="send">Enviar</button>
			</form>
		</div>
	</section>

	<footer>
		<div class=contenedor>
			<p>&copy; Copyright ©2024 - ECOTELECOM - All rights Reserved.</p>
		</div>
	</footer>

</body>

</html>