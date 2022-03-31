<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'home'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ascensores dellabitta. 70 años de experiencia en el rubro. Ascensores electromecanicos e hidráulicos.">
	<title>Fabricación e instalación de ascensores y montacargas - Dellabitta</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" type="text/css" href="./node_modules/slick-carousel/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="./node_modules/slick-carousel/slick/slick-theme.css"/>
	<link rel="stylesheet" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Header -->
	<?php include_once("./includes/header.php"); ?>

	<!-- Contenido HOME -->
	<section class="transition home">

		<!-- Video -->
		<section class="video">
		  <div class="overlay"></div>
		  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
		    <source src="videos/dellabitta.mp4" type="video/mp4">
		  </video>
		  <div class="container h-100">
		    <div class="row h-100">
		      <div class="col-md-12 content">
		        <h1>Te llevamos <br>siempre <span>más alto</span></h1>
		      </div>
		    </div>
		  </div>
		</section>
		<!-- Video end -->

		<!-- Datos -->
		<section data-aos="fade-up" class="datos">
		  <div class="container">
		  	<div class="row">
			  	<div class="col-md-12">
		        <h2 class="italic light">Soluciones integrales para el transporte vertical de personas y bienes.</h2>
			  	</div>

			  	<div class="col-md-8 offset-md-2">
		        <p class="light">
		        	En Della Bitta, brindamos nuestros servicios basados en años de experiencia en la industria y una atención impecable a los detalles.
		        </p>
			  	</div>
		  	</div>
		  </div>
		</section>
		<!-- Datos end -->

		<!-- Productos -->
		<section class="productos">
		  <div class="container">
		  	<div class="row">
			  	<div class="col-md-12">
		        <h3 data-aos="fade-up">. NUESTROS PRODUCTOS</h3>
		        <p data-aos="fade-up">
		        	Ofrecemos distintas líneas de productos para dar soluciones a todas las necesidades de movilidad vertical porque conocemos el mercado y la singularidad de cada proyecto.
		        </p>
			  	</div>
		  	</div>
		  </div>

		  <div data-aos="fade-up" class="container-fluid">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<!-- Galeria -->
						<?php include_once("./includes/galeria-home.php"); ?>
		  		</div>
		  	</div>
		  </div>
		</section>
		<!-- Productos end -->

		<!-- Sistemas -->
		<section class="sistemas container">
		  <div class="row">
	      <div data-aos="fade-up" class="col-md-12">
	      	<h2>. SISTEMAS DISPONIBLES</h2>
	      	<p>
	      		Ofrecemos dos sistemas principales de accionamiento para nuestra familia de ascensores, teniendo en cuenta su uso, indicaremos cual es el apropiado para cada caso. 
	      	</p>
	      </div>
	      <div data-aos="fade-up" class="col-md-4">
	      	<img class="img-fluid" src="img/home/tipo-ascensor.jpg" alt="sistema ascensor hidraulico">
	      	<h3>ASCENSORES <br>HIDRÁULICOS</h3>
	      	<p>
	      		Este tipo de ascensor es ideal para su instalación en proyectos de pocas paradas. Por sus características este tipo de elevador cubre una amplia gama de necesidades que abarca shoppings, aeropuertos, edificios públicos o de viviendas, hoteles y domicilios particulares.
	      	</p>
	      </div>
	      <div data-aos="fade-up" class="col-md-4">
	      	<img class="img-fluid" src="img/home/tipo-ascensor.jpg" alt="sistema ascensor hidraulico">
	      	<h3>ASCENSORES <br>ELECTROMECÁNICOS</h3>
	      	<p>
	      		Sistema de tracción por adherencia y equipos de tracción directa. Capacidad de carga flexible según las necesidades de cada proyecto. Sin límite de pisos y mayor rango de velocidades. Instalados con variador de frecuencia. Excelente nivelación y gran confort durante traslados. Economía de energía. Mayor vida útil de los componentes del ascensor. Preparados para edificios de gran altura
	      	</p>
	      </div>
	      <div data-aos="fade-up" class="col-md-4">
	      	<img class="img-fluid" src="img/home/tipo-ascensor.jpg" alt="sistema ascensor hidraulico">
	      	<h3>MONTAVEHÍCULOS</h3>
	      	<p>
	      		Su practicidad los convierten en una solución ideal para obtener un mayor espacio útil asignado al estacionamiento. Los montavehículos permiten el acceso a diferentes niveles con mucha simplicidad.
	      	</p>
	      </div>
		  </div>
		</section>
		<!-- Sistemas end -->

		<!-- Faja Trayectoria -->
		<?php include_once("./includes/faja-trayectoria.php"); ?>

		<!-- Faja Presupuesto -->
		<?php include_once("./includes/faja-presupuesto.php"); ?>

	</section>
	<!-- Contenido HOME end -->

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/slick-carousel/slick/slick.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./js/galeria.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>

</body>

</html>