<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'empresa'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Desde hace ya 70 años, en Ascensores Della Bitta S.R.L. nos hemos dedicado a ofrecer soluciones integrales para el transporte vertical de personas y bienes.">
	<title>Conocé más sobre nosotros - Ascensores Dellabitta</title>

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

	<!-- Contenido EMPRESA -->
	<section class="transition empresa">

		<!-- Header -->
		<section data-aos="fade-up" class="header">
		  <div class="container-fluid p-0 h-100">
		  	<div class="container h-100">
			  	<div class="row h-100">
				  	<div class="col-md-12">
			        <h1>Conocé más <br><span>sobre nosotros</span></h1>
				  	</div>
			  	</div>
		  	</div>
		  </div>
		</section>
		<!-- Header end -->

		<!-- Informacion -->
		<section data-aos="fade-up" class="informacion">
		  <div class="container">
		  	<div class="row">

		  		<div class="col-md-10 offset-md-1 encabezado">
		        <p data-aos="fade-up">
		        	Desde hace ya 70 años, en Ascensores Della Bitta S.R.L. nos hemos dedicado a ofrecer soluciones integrales para el transporte vertical de personas y bienes. La moderna maquinaria, la capacidad de nuestra mano de obra y la constante actualización de productos; son factores fundamentales y determinantes que ubican a nuestra empresa entre las más conocidas del país en la producción de ascensores y componentes.
		        </p>
			  	</div>

			  	<div class="col-md-5 offset-md-1 datos">
		        <p data-aos="fade-up">
		        	Desde el comienzo nuestros esfuerzos estuvieron destinados a producir elementos de óptima calidad, brindar un servicio comercial eficiente y otorgar el asesoramiento técnico adecuado. 
		        </p>

		        <p data-aos="fade-up">
							Esto se ve reflejado en nuestra amplia agenda de clientes, compuesta por importantes empresas e instaladores de todo el país. Somos una de las pocas fábricas integrales de ascensores de la República Argentina, que en su planta producen cada componente del ascensor; desde las grampas hasta la cabina. 
						</p>

						<p data-aos="fade-up">
							Ofrecemos no solo ascensores electromecánicos, sino que también tenemos en disponibilidad ascensores hidráulicos con centrales y pistones MORIS, marca líder Italiana.
		        </p>
			  	</div>

			  	<div data-aos="fade-up" class="col-md-6 img">
		        <img class="img-fluid" src="./img/empresa/cabina-ascensor.jpg" alt="cabina de ascensores">
			  	</div>

		  	</div>
		  </div>
		</section>
		<!-- Informacion end -->

		<!-- Faja Trayectoria -->
		<?php include_once("./includes/faja-trayectoria.php"); ?>

		<!-- Faja Presupuesto -->
		<?php include_once("./includes/faja-presupuesto.php"); ?>

	</section>
	<!-- Contenido EMPRESA end -->

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>

</body>

</html>