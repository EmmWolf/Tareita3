<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>ECOTELECOM</title>
	<link rel="stylesheet" type="text/css" href="Formulario.css">
	<link rel="stylesheet" href="whats.css">
</head>

<body>

	<header>
		<div class="contenedor">
			<img src="Img/eco/menu_ecotel_white.png">
			<nav>
				<a href="index.html">Inicio</a>
				<a href="nosotros.html">Nosotros</a>
				<a href="servicios.html">Servicios</a>
				<a href="Formulario.php">Conócenos</a>
			</nav>
		</div>
	</header>

	<section id="hero">
		<div class="form">
			<form action="correo.php" method="post">
				<h2>¡Gracias por confiar en ecoTELECOM!</h2>
				<p>¡Envíanos un mensaje y nos pondremos en contacto contigo!</p>
				<input type="text" name="nombre" placeholder="Escriba su nombre" required>
				<input type="text" name="empresa" placeholder="Escriba el nombre de la empresa" required>
				<input type="email" name="correo" placeholder="Escriba su correo electrónico" required>
				<input type="text" name="asunto" placeholder="Escriba su asunto" required>
				<textarea placeholder="Escriba aquí su mensaje..." name="mensaje" required></textarea><br>
				<button type="submit" name="send">Enviar</button>
				<h2>Nos encontramos en:</h2>  <p class="text">Calle Mariano Escobedo 46, Planta Baja, Tlalnepantla Centro, 54000 Tlalnepantla, Estado de México.</p>
			</form>
		</div>
		</div>
		<div class="ubicacion">
			
				<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.0137627207048!2d-99.19777653037302!3d19.5392499627344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d5bb4afe53d%3A0x9497512076c96e2b!2sCalle%20Mariano%20Escobedo%2046%2C%20Tlalnepantla%20Centro%2C%2054000%20Tlalnepantla%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1709306460653!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			
		</div>
	</section>

	<footer>
		<div class=foot>
			<p>&copy; Copyright ©2024 - ECOTELECOM - All rights Reserved.</p>
		</div>
	</footer>

	<div class="whatsapp-button" id="whatsapp-button">
    	<a href="https://wa.me/5565439217/?text=¡Hola!%20Quisiera%20más%20informacion%20sobre%20los%20servicios%20que%20ofrecen%20en%20ecoTELECOM" target="_blank" rel="noopener noreferrer">
    		<img src="Img/whats.png" alt="WhatsApp">
    	</a>
	</div>

</body>

</html>