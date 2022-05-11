<?php require ('includes/config.inc.php'); ?>

<?php 
	$current = 'contacto'; 

	if (isset($_GET['name'])) {
    $name = $_GET['name'];
  } else {
    $name = '';
  }

  if (isset($_GET['email'])) {
    $email = $_GET['email'];
  } else {
    $email = '';
  }

  if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
  } else {
    $phone = '';
  }

  if (isset($_GET['comments'])) {
    $comments = $_GET['comments'];
  } else {
    $comments = '';
  }

  if (isset($_GET['errors'])) {

    $errors = unserialize( urldecode( $_GET['errors'] ) );
  } else {
    $errors = '';
  }

  if (isset($_GET['msg_contacto'])) {
    $msg_contacto = urldecode( $_GET['msg_contacto'] );
  } 

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Ascensores Della Bitta S.R.L. Contamos con un departamento de desarrollos especiales para cubrir las necesidades de todos los proyectos. Contactenos">
	<title>Contacto - Ascensores Dellabitta</title>

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

	<!-- Contenido CONTACTO -->
	<section class="transition contacto">

		<!-- Header -->
		<section data-aos="fade-up" class="header">
		  <div class="container-fluid p-0 h-100">
		  	<div class="container h-100">
			  	<div class="row h-100">
				  	<div class="col-md-12">
			        <h1><span>Contacto</span></h1>
				  	</div>
			  	</div>
		  	</div>
		  </div>
		</section>
		<!-- Header end -->

		<!-- Información -->
		<section data-aos="fade-up" class="container-fluid info">
	  	<div class="row h-100">

	  		<div class="container h-100">
	  			<div class="row grey h-100">

			  		<div class="col-md-4 offset-md-2 datos h-100">

			  			<div class="content">
				  			<h3>Dirección</h3>
			  				<a href="https://goo.gl/maps/2dtvMU1ctmxiMMoy5" rel="noopener" target="_blank">
			  					Héroes de Malvinas 3789 (1826) <br>Remedios de Escalada Pcia. de Buenos Aires . Argentina.
			  				</a>
			  			</div>

			  			<div class="content">
								<h3>Teléfono</h3>
								<a href="tel:1142423920" rel="noopener" target="_blank">
									+54 11 42423920
								</a><br>
								<a href="tel:1142423920" rel="noopener" target="_blank">
									Fax. +54 11 42482162
								</a>
							</div>

			  			<div class="content">
								<h3>Mail</h3>
								<a href="mailto:info@dellabitta.com.ar" rel="noopener" target="_blank">
									info@dellabitta.com.ar
								</a>
							</div>

			  		</div>

			  		<div data-aos="fade-up" class="col-md-6 mapa">
			  			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.810735352489!2d-58.38627688435635!3d-34.73516478042571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccd59ccb3a485%3A0x8629b685d5100c68!2sDella%20Bitta%20SRL!5e0!3m2!1ses-419!2sar!4v1649084994511!5m2!1ses-419!2sar" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			  		</div>

	  			</div>
	  		</div>

	  	</div>
		</section>
		<!-- Información end -->

		<!-- Formulario -->
		<section class="container content_form">

			<div class="row">

	  		<div data-aos="fade-up" class="col-md-6 formulario">
	  			
	  			<h4>¿Tenés una consulta? <br><span>contactate con nosotros</span></h4>

	  			<!-- Mensaje Exito -->
		      <?php if ( isset($msg_contacto) ): ?>
		        <div id="msg_contacto" class="alert alert-success alert-dismissible fade show" role="alert">
		          <strong>¡Datos recibidos!</strong>
		          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		          <ul style="padding: 0;">
		              <li>- <?php echo $msg_contacto; ?></li>
		          </ul>
		        </div>
		      <?php endif ?>
		      <!-- Mensaje Exito end -->

		      <!-- Errores Formulario -->
		      <?php if ( is_array($errors) && isset($errors) ): ?>

		        <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert">
		          <strong>¡Por favor verificá los datos!</strong>
		          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		          <ul style="padding: 0;">
		            <?php foreach ($errors as $error) { ?>
		              <li>- <?php echo $error; ?></li>
		            <?php } ?>
		          </ul>
		        </div>

		      <?php endif ?>
		      <!-- Errores Formulario end -->

		      <form id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

		        <input name="origin" type="hidden" value="Formulario de Contacto">
		        <input type="hidden" name="section" value="contacto">

		        <!-- Nombre -->
		        <div data-aos="fade-up" class="mb-3">
		          <label for="name" class="form-label">Nombre *</label>
		          <input required type="text" class="form-control" value="<?= $name ?>" name="name">
		          <div class="invalid-feedback">
		            Ingresá tu nombre
		          </div>
		        </div>

		        <!-- Email -->
		        <div data-aos="fade-up" class="mb-3">
		          <label for="email" class="form-label">Email *</label>
		          <input required type="email" class="form-control" value="<?= $email ?>" name="email">
		          <div class="invalid-feedback">
		            Ingresá tu email
		          </div>
		        </div>

		        <!-- Telefono -->
		        <div data-aos="fade-up" class="mb-3">
		          <label for="phone" class="form-label">Teléfono</label>
		          <input type="tel" class="form-control" value="<?= $phone ?>" name="phone">
		        </div>

		        <!-- Comentarios -->
		        <div data-aos="fade-up" class="mb-3">
		          <label for="comments" class="form-label">Comentarios *</label>
		          <textarea required class="form-control" rows="3" name="comments"><?= $comments ?></textarea>
		          <div class="invalid-feedback">
		            Ingresá tu comentario
		          </div>
		        </div>

		        <div data-aos="fade-up" class="text-end">
	         		<button type="button" id="send" class="btn btn-primary">ENVIAR
	         			<div id="wait" class="spinner-border spinner-border-sm text-warning" role="status">
								  <span class="visually-hidden">Loading...</span>
								</div>
	         		</button>
		        </div>

		      </form>
	  		</div>

	  		<div data-aos="fade-up" class="col-md-6 imagenes">
	  			<img class="img-fluid" src="./img/contacto/cabinas-ascensores.jpg" alt="cabinas de asensor">
	  		</div>

			</div>

		</section>
		<!-- Formulario end -->

	</section>
	<!-- Contenido CONTACTO end -->

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>
	<script src="./js/formsContact.js"></script>

</body>

</html>