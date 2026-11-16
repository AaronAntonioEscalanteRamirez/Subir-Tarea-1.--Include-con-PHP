<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CareU Spa - Servicios</title>
	<link rel="stylesheet" href="estilo.css">
</head>

<body>

	<?php
	include "logo.php";
	?>

	<div id="menu_wrapper">
		<div id="menu" class="estructura">
			<a href="index.php">INICIO</a>
			<a href="servicios.php" class="activo">SERVICIOS</a>
			<a href="contacto.php">CONTACTO</a>
		</div>
	</div>

	<!-- CONTENIDO DEL SITIO WEB -->

	<div id="contenido">
		
		<!-- CABECERA VERDE SERVICIOS -->
		<div id="banner_servicios">
			<h1>We bring the best massages to You</h1>
		</div>

		<!-- TEXTO EXPLICATIVO -->
		<div class="seccion_texto_servicios estructura">
			<h2>Easy online bookings and redemption</h2>
			<p>If you don't have any time to book the service on the phone, then use out marvelous online booking. All you need is just pick the available and appropriate service, the free time and a therapist. Then fill the contact form and that's all.</p>
			<p>The redemption is pretty simple, you can call off the service or adjourn it in a 1 day before the procedure. Use it for your comfort.</p>
			<br><br>
			<h2>Beautifully designed, print-ready massage gift certificate</h2>
			<p>Are you bored of the usual gifts and something brand-new? Check-out our stunning gift certificates that are designed in a few variations and can fit any needs. The certificates are oriented on the various prices and services. Enjoy the opportunities.</p>
		</div>

		<!-- LLAMADA A LA ACCION -->
		<div class="centrar_seccion estructura">
			<h2 class="titulo_verde_grande">Are You a Qualified Massage Therapist?</h2>
			<p class="subtitulo_gris">Become a high-quality therapist with SpaNiol</p>
			<br>
			<button type="button" class="btn_reserva">Book Now</button>
		</div>

	</div>

	<!-- FIN DEL CONTENIDO -->

	<?php
	include "abajo.php";
	?>

</body>

</html>
