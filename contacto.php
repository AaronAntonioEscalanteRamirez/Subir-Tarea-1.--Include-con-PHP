<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CareU Spa - Contacto</title>
	<link rel="stylesheet" href="estilo.css">
</head>

<body>

	<?php
	include "logo.php";
	?>

	<div id="menu_wrapper">
		<div id="menu" class="estructura">
			<a href="index.php">INICIO</a>
			<a href="servicios.php">SERVICIOS</a>
			<a href="contacto.php" class="activo">CONTACTO</a>
		</div>
	</div>

	<!-- CONTENIDO DEL SITIO WEB -->

	<div id="contenido">
		
		<!-- BANNER CONTACTO -->
		<div id="banner_contacto">
			<h1>Request now</h1>
		</div>

		<div class="centrar_seccion estructura">
			<h2 class="titulo_verde">Beautifully designed, print-ready massage gift certificate</h2>
			<p class="subtitulo_gris">Leave your personal data, phone, select the desirable service and suitable time. Leave a request and check the email.</p>
		</div>

		<!-- FORMULARIO CONTACTO 2x2 PERFECTO -->
		<div id="caja_formulario_wrapper">
			<div id="caja_formulario" class="estructura">
				<form action="recibir.php" method="post" name="form_contacto">
					<div class="bloque_input col_izquierda">
						<input type="email" name="email" placeholder="Enter your email:" required>
					</div>
					<div class="bloque_input col_derecha">
						<input type="text" name="phone" placeholder="Enter your phone:">
					</div>
					<div class="limpiar"></div>

					<div class="bloque_input col_izquierda">
						<input type="text" name="service" placeholder="Select services:">
					</div>
					<div class="bloque_input col_derecha">
						<input type="text" name="time" placeholder="Select time:">
					</div>
					<div class="limpiar"></div>

					<div class="bloque_boton">
						<button type="submit" id="btn_request">Leave a Request</button>
					</div>
				</form>
			</div>
		</div>

	</div>

	<!-- FIN DEL CONTENIDO -->

	<?php
	include "abajo.php";
	?>

</body>

</html>
