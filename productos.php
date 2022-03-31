<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'productos'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ascensores Della Bitta S.R.L. Contamos con un departamento de desarrollos especiales para cubrir las necesidades de todos los proyectos.">
	<title>Cabinas de Ascensores - Ascensores Dellabitta</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Header -->
	<?php include_once("./includes/header.php"); ?>

	<!-- Contenido PRODUCTOS -->
	<section class="transition productos">

		<!-- Header -->
		<section data-aos="fade-up" class="header">
		  <div class="container-fluid p-0 h-100">
		  	<div class="container h-100">
			  	<div class="row h-100">
				  	<div class="col-md-12">
			        <h1>Un producto para<br><span>cada necesidad</span></h1>
				  	</div>
			  	</div>
		  	</div>
		  </div>
		</section>
		<!-- Header end -->

		<!-- Modelos -->
		<section data-aos="fade-up" class="modelos">
		  <div class="container">
		  	<div class="row">

		  		<div data-aos="fade-up" class="col-md-6 ascensor">
		        <div class="content">
		        	<h2>. INOXHABIT</h2>
		        	<div class="recuadro_gris mark_left">
		        		<img 
		        			class="img-fluid" 
		        			src="./img/productos/cabina-ascensor-inoxhabit.png" 
		        			alt="cabina de ascensor inoxhabit">
		        	</div>
		        	<div class="footer">
		        		<h3>Simpleza, estilo, calidad y confort.</h3>
		        		<p>
		        			<span>InoxHabit</span> es un modelo pensado para 
		        			su comodidad y placer. Desarrollado completamente en acero inoxidable esmerilado, es acompañado por un gran panel de espejo y una columna central, la cual envuelve toda la cabina, generando la botonera. <br>
		        			Su alta calidad constructiva es lograda por su desarrollo en sistemas CAD y la última tecnología en Guillotinado y Plegado CNC. Satisfaciendo los más altos estándares de insonorización y terminación.
		        		</p>
		        		<a href="contacto.php" class="btn btn-primary transition">COTIZAR</a>
		        	</div>
		        </div>
			  	</div>

			  	<div data-aos="fade-up" class="col-md-6 ascensor">
		        <div class="content">
		        	<h2>. ELISSE</h2>
		        	<div class="recuadro_gris mark_right">
		        		<img 
		        			class="img-fluid" 
		        			src="./img/productos/cabina-ascensor-elisse.png" 
		        			alt="cabina de ascensor elisse">
		        	</div>
		        	<div class="footer">
		        		<h3>Simpleza y comodidad.</h3>
		        		<p>
		        			<span>Elisse</span> combina simpleza y comodidad. Vistiendo paneles y componentes de acero inoxidable de la más alta calidad. Dotado de un amplio espejo, el cual recubre todo el paño trasero, otorga una amplia sensación de espacialidad, e incluye un barral lateral que hace de esta cabina un espacio sencillo y personal. <br>
		        			Techo portador de una iluminación incomparable. Al igual que el piso, construido en mármol. Si busca comodidad y simpleza Elisse es la opción adecuada para usted.
		        		</p>
		        		<a href="contacto.php" class="btn btn-primary transition">COTIZAR</a>
		        	</div>
		        </div>
			  	</div>

			  	<div data-aos="fade-up" class="col-md-6 ascensor">
		        <div class="content">
		        	<h2>. ABRIL</h2>
		        	<div class="recuadro_gris mark_left">
		        		<img 
		        			class="img-fluid" 
		        			src="./img/productos/cabina-ascensor-abril.png" 
		        			alt="cabina de ascensor abril">
		        	</div>
		        	<div class="footer">
		        		<h3>Relax, comodidad y estilo.</h3>
		        		<p>
		        			<span>Abril</span> fue diseñada para brindar las mejores sensaciones al viajar. El relax, la comodidad y el estilo se combinan en una cabina singular, donde el espacio se amplia y multiplica tras estar dotada de tres  paneles espejos continuos. <br>
		        			Cuenta con bastones, botonera y zócalos de acero inoxidable a lo largo de toda la cabina, y un magnífico techo de acrílico.  La cabina abril es un espacio donde la comodidad, el relax y el estilo se combinan para brindar el más placentero de los viajes.
		        		</p>
		        		<a href="contacto.php" class="btn btn-primary transition">COTIZAR</a>
		        	</div>
		        </div>
			  	</div>

			  	<div data-aos="fade-up" class="col-md-6 ascensor montavehiculos">
		        <div class="content">
		        	<h2>. MONTAVEHICULOS</h2>
		        	<div class="recuadro_gris mark_right">
		        		<img 
		        			class="img-fluid" 
		        			src="./img/productos/montavehiculos.png" 
		        			alt="montavehiculos">
		        	</div>
		        	<div class="footer">
		        		<h3>Simpleza y practicidad.</h3>
		        		<p>
		        			<span>Montavehículos</span> Su practicidad los convierten en una solución ideal para obtener un mayor espacio útil asignado al estacionamiento. <br>Los montavehículos permiten el acceso a diferentes niveles con mucha simplicidad.
		        		</p>
		        		<a href="contacto.php" class="btn btn-primary transition">COTIZAR</a>
		        	</div>
		        </div>
			  	</div>

		  	</div>
		  </div>
		</section>
		<!-- Modelos end -->

	</section>
	<!-- Contenido PRODUCTOS end -->

	<!-- Contenido PRODUCTOS -->
	<section class="transition productos">

		<!-- Faja Desarrollos Especiales -->
		<section data-aos="fade-up" class="container-fluid desarrollos_especiales">
	  	<div class="container h-100">
		  	<div class="row h-100">
			  	<div class="col-md-8 offset-md-2">
		        <h5>Desarrollos Especiales</h5>
		        <p>
		        	Además contamos con un departamento de desarrollos especiales para cubrir las necesidades de todos los proyectos.
		        </p>
		        <a href="contacto.php" class="btn btn-primary transition">CONTACTO</a>
			  	</div>
		  	</div>
	  	</div>
		</section>
		<!-- Faja Desarrollos Especiales end -->

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>

</body>

</html>