<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CareU Spa - Inicio</title>
	<link rel="stylesheet" href="estilo.css">
</head>

<body>

	<?php
	include "logo.php";
	?>

	<?php
	include "menu.php";
	?>

	<!-- CONTENIDO DEL SITIO WEB -->

	<div id="contenido">
		
		<!-- BANNER PRINCIPAL A TODO EL ANCHO -->
		<div id="banner_principal">
			<img src="imagenes/foto_slide.jpg" alt="Relaxation" class="img_banner">
			<div id="texto_banner">
				<h1>Relaxation</h1>
				<p>come to us right now</p>
				<button type="button" class="btn_reserva">Book Now</button>
			</div>
		</div>

		<!-- SECCION TITULO -->
		<div class="centrar_seccion estructura">
			<h2 class="titulo_verde">Plunge into the world of relaxation with us</h2>
			<p class="subtitulo_gris">We invite you to visit the spa paradise and feel the power of relaxation.<br>The unique experts will do their best for you.</p>
		</div>

		<!-- SECCION TRES COLUMNAS (IMAGEN CENTRAL MAS LARGA) -->
		<div id="tres_columnas" class="estructura">
			<div class="columna_item">
				<img src="imagenes/foto1.jpg" alt="High-quality services">
				<h3>High-quality services</h3>
				<p>The best receptionists will put you through the world of politeness, professionalism, deep calmness and high-quality services.</p>
			</div>
			<div class="columna_item columna_central">
				<img src="imagenes/foto2.jpg" alt="Paradise atmosphere">
				<h3>Paradise atmosphere</h3>
				<p>Feel the wonderful atmosphere of beauty, pleasant colors, tasty aromas and feel free to have a relax.</p>
			</div>
			<div class="columna_item">
				<img src="imagenes/foto3.jpg" alt="Massage to any taste">
				<h3>Massage to any taste</h3>
				<p>Get the qualified treatment in a most preferable way. Trust our experts and experience the best massage.</p>
			</div>
		</div>

	</div>

	<!-- FIN DEL CONTENIDO -->

	<?php
	include "abajo.php";
	?>

</body>

</html>
