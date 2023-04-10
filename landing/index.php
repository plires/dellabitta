<?php
	include_once('includes/config.inc.php');
	include_once('includes/funciones_validar.php');
	require_once("clases/repositorioSQL.php");
	require_once("clases/app.php");

	$db = new RepositorioSQL();
	$errors = [];
	$name = '';
	$email = '';
	$phone = '';
	$comments = '';
	$origin = 'Consulta desde Google Ads';

	// Envio del formulario de contacto
	if (isset($_POST["send"])) {
			  
	  if(isset($_POST['g-recaptcha-response'])){$captcha=$_POST['g-recaptcha-response'];}
	  $secretKey = RECAPTCHA_SECRET_KEY;
	  $ip = $_SERVER['REMOTE_ADDR'];
	  $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	  $responseKeys = json_decode($response,true);

	  if ($responseKeys['success']) {
	  
	    // Verificamos si hay errores en el formulario
	    if (campoVacio($_POST['name'])){
	      $errors['name']='Ingresa tu nombre';
	    } else {
	      $name = $_POST['name'];
	    }

	    if (!comprobar_email($_POST['email'])){
	      $errors['email']='Ingresa el mail :(';
	    } else {
	      $email = $_POST['email'];
	    }

	    if (campoVacio($_POST['phone'])){
	      $errors['phone']='Ingresa un Telefono de contacto';
	    } else {
	      $phone = $_POST['phone'];
	    }

	    if (campoVacio($_POST['comments'])){
	      $errors['comments']='Ingresa tus comentarios';
	    } else {
	      $comments = $_POST['comments'];
	    }

	  } else {
	    $errors['recaptcha'] = 'Error al validar el recaptcha';
	  }

	  if (!$errors) {

	  	//grabamos en la base de datos
	    $save = $db->getRepositorioContacts()->saveInBDD($_POST);

	    //Enviamos los mails al cliente y usuario
	    $app = new App;

	    // Registramos en Perfit el contacto
	    $app->registerEmailContactsInPerfit(PERFIT_APY_KEY, PERFIT_LIST, $_POST);

	    $sendClient = $app->sendEmail('Cliente', 'Contacto Cliente', $_POST);
	    $sendUser = $app->sendEmail('Usuario', 'Contacto Usuario', $_POST);

	    if ($sendClient) {
	      // Redirigimos a la pagina de gracias
	      ?>
	      <script type="text/javascript">
	      window.location= 'gracias.php';
	      </script>
	      <?php
	    } else {
	      exit('Error al enviar la consulta, por favor intente nuevamente');
	    }
	    
	  }

	}
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="ascensores dellabitta. 70 años de experiencia en el rubro. Ascensores electromecanicos e hidráulicos.">
	<meta name="author" content="Librecomunicacion">
    <!-- Favicons -->
    <?php include('includes/favicon.inc.php'); ?>

	<title>Instalación de ascensores y montacargas</title>
	<link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="node_modules/slick-carousel/slick/slick-theme.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/app.css">
	<?php include('includes/analytics.inc') ?>
</head>
<body>

	<div class="banda"></div>
	<header>
		<div class="container">
			<img class="img-fluid wow fadeInLeft" src="img/logo-della-bitta.gif" alt="logo dellabitta">
			<span class="wow fadeInRight">+54 11 4242.3920</span>
		</div>
	</header>

	<section class="container-fluid contacto p-0">
		<div class="overlay"></div>
		<div class="container h-100">
			<div class="row h-100">

				<div class="col-md-6 h-100 wow fadeInLeft">
					<h1>Venta e<br> Instalación<br> de Ascensores<br> y Montacargas</h1>
					<p>
						Atención personalizada a arquitectos y constructoras. Desarrollamos según los requerimientos para dar flexibilidad al diseño de cada proyecto.<br>Nos avalan 70 años de trayectoria. Cumplimos estrictamente con todas las normas de seguridad.
					</p>
				</div>

				<div class="col-md-6 h-100 wow fadeInUp">

					<form id="formulario" method="post" class="needs-validation" novalidate>
						<input type="hidden" name="origin" value="<?= $origin ?>">

						<!-- Errores Formulario -->
						<?php if ($errors): ?>
							<div id="error" class="alert alert-danger alert-dismissible fade show fadeInLeft" role="alert">
							  <strong>¡Por favor verificá los datos!</strong>
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							  <ul style="padding: 0;">
							    <?php foreach ($errors as $error) { ?>
							      <li>- <?php echo $error; ?></li>
							    <?php } ?>
							  </ul>
							</div>
						<?php endif ?>
						<!-- Errores Formulario end -->

						<span>Presupuestá Ahora!</span>
						
						<!-- Name -->
						<div class="form-group">
							<input required type="text" class="form-control" name="name" placeholder="Nombre" value="<?= $name ?>">
							<div class="invalid-feedback">
			                	Por favor ingresá tu nombre
			              	</div>
						</div>
						
						<!-- Email -->
						<div class="form-group">
							<input required type="email" class="form-control" name="email" placeholder="Email" value="<?= $email ?>">
							<div class="invalid-feedback">
			                	Por favor ingresá tu email
			              	</div>
						</div>
						
						<!-- Phone -->
						<div class="form-group">
							<input required type="text" class="form-control" name="phone" placeholder="Teléfono" value="<?= $phone ?>">
							<div class="invalid-feedback">
			                	Por favor ingresá un teléfono de contacto
			              	</div>
						</div>

						<!-- Comments -->
						<div class="form-group">
							<textarea required class="form-control" name="comments" rows="3" placeholder="Consulta"><?= $comments ?></textarea>
							<div class="invalid-feedback">
			                	Tu comentario es importante
			              	</div>
						</div>

						<!-- reCAPTCHA  -->
						<div class="form-group">
							<div id="recaptcha" class="g-recaptcha" data-sitekey="<?= RECAPTCHA_PUBLIC_KEY ?>"></div>
						</div>

						<!-- Newsletter -->
						<div class="form-group form-check">
							<input type="checkbox" checked class="form-check-input" name="newsletter">
							<label class="form-check-label" for="newsletter">suscribe newsletter</label>
						</div>

					  <button type="submit" id="send" name="send" class="btn btn-primary">ENVIAR</button>

					</form>
				</div>

			</div>
		</div>
		<div class="banda_inferior"></div>
	</section>
	
	<!-- CABINAS MODELOS -->
	<section class="cabinas">

		<div class="cta container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="wow fadeInUp">CABINAS DE ASCENSORES</h2>
					</div>
				</div>
			</div>
		</div>

		<!-- INOXHABIT -->
		<!-- Titulo -->
		<div class="container-fluid p-0">
			<div class="titulo">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3 class="wow fadeInLeft">CABINA DE ASCENSOR INOXHABIT</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Titulo end -->

		<!-- Descripcion -->
		<div class="container descripcion">
			<div class="row">

				<div data-wow-delay="0.3s" class="col-md-6 text-center wow fadeInUp">
					<img class="img-fluid imagen_principal" src="img/cabina-ascensor-inoxhabit.jpg" alt="cabina ascensor inoxhabit">
				</div>

				<div class="col-md-6 datos wow fadeInUp">
					<h3>Simpleza y estilo. Calidad y Confort.</h3>
					<p>
						InoxHabit es un modelo pensado para su comodidad y placer. Desarrollado completamente en acero inoxidable esmerilado, es acompañado por un gran panel de espejo y una columna central, la cual envuelve toda la cabina, generando la botonera.
					</p>
					<p>
						Su alta calidad constructiva es lograda por su desarrollo en sistemas CAD y la última tecnología en Guillotinado y Plegado CNC. Satisfaciendo los más altos estándares de insonorización y terminación.
					</p>

					<div class="row">
						<div class="col-md-6">
							<img class="img-fluid" src="img/cabina-ascensor-inoxhabit-a.jpg" alt="cabina ascensor inoxhabit a">
						</div>
						<div class="col-md-6">
							<img class="img-fluid" src="img/cabina-ascensor-inoxhabit-b.jpg" blt="cabina ascensor inoxhabit a">
						</div>
					</div>

				</div>

			</div>
		</div>
		<!-- Descripcion end -->
		<!-- INOXHABIT end -->

		<!-- ELISEE -->
		<!-- Titulo -->
		<div class="container-fluid p-0">
			<div class="titulo">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3 class="wow fadeInLeft">CABINA DE ASCENSOR ELISEE</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Titulo end -->

		<!-- Descripcion -->
		<div class="container descripcion">
			<div class="row">

				<div class="col-md-6 datos wow fadeInUp">
					<h3>Simpleza y comodidad.</h3>
					<p>
						Elisse combina simpleza y comodidad. Vistiendo paneles y componentes de acero inoxidable de la más alta calidad. Dotado de un amplio espejo, el cual recubre todo el paño trasero, otorga una amplia sensación de espacialidad, e incluye un barral lateral que hace de esta cabina un espacio sencillo y personal.
					</p>
					<p>
						Techo portador de una iluminación incomparable. Al igual que el piso, construido en mármol. Si busca comodidad y simpleza Elisse es la opción adecuada para usted.
					</p>

					<div class="row">
						<div class="col-md-6">
							<img class="img-fluid" src="img/cabina-ascensor-elisee-a.jpg" alt="cabina ascensor elisee a">
						</div>
						<div class="col-md-6">
							<img class="img-fluid" src="img/cabina-ascensor-elisee-b.jpg" blt="cabina ascensor elisee a">
						</div>
					</div>

				</div>

				<div data-wow-delay="0.3s" class="col-md-6 text-center elisee wow fadeInUp">
					<img class="img-fluid imagen_principal" src="img/cabina-ascensor-elisee.jpg" alt="cabina ascensor elisee">
				</div>

			</div>
		</div>
		<!-- Descripcion end -->
		<!-- ELISEE end -->

		<!-- ABRIL -->
		<!-- Titulo -->
		<div class="container-fluid p-0">
			<div class="titulo">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3 class="wow fadeInLeft">CABINA DE ASCENSOR ABRIL</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Titulo end -->

		<!-- Descripcion -->
		<div class="container descripcion">
			<div class="row">

				<div data-wow-delay="0.3s" class="col-md-6 text-center wow fadeInUp">
					<img class="img-fluid imagen_principal" src="img/cabina-ascensor-abril.jpg" alt="cabina ascensor abril">
				</div>

				<div class="col-md-6 datos wow fadeInUp">
					<h3>relax, comodidad y estilo.</h3>
					<p>
						ABRIL fue diseñada para brindar las mejores sensaciones al viajar. El relax, la comodidad y el estilo se combinan en una cabina singular, donde el espacio se amplia y multiplica tras estar dotada de tres paneles de espejos continuos.
					</p>
					<p>
						Cuenta con bastones, botonera y zócalos de acero inoxidable a lo largo de toda la cabina, y un magnífico techo de acrílico.  La cabina Abril es un espacio donde la comodidad, el relax y el estilo se combinan para brindar el más placentero de los viajes.
					</p>

					<div class="row">
						<div class="col-md-6">
							<img class="img-fluid" src="img/cabina-ascensor-abril-a.jpg" alt="cabina ascensor abril a">
						</div>
						<div class="col-md-6">
							<img class="img-fluid" src="img/cabina-ascensor-abril-b.jpg" blt="cabina ascensor abril a">
						</div>
					</div>

				</div>

			</div>
		</div>
		<!-- Descripcion end -->
		<!-- ABRIL end -->

	</section>
	<!-- CABINAS MODELOS end -->

	<!-- CABINAS CUSTOM -->
	<section class="cabinas_custom">

		<div class="cta container-fluid wow fadeInUp">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2>CUSTOMIZÁ TU CABINA</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">

				<div class="col-md-6 text-center wow fadeInLeft">
					<img class="img-fluid imagen_principal" src="img/cabina-ascensores.jpg" alt="cabina ascensor custom">
				</div>

				<div class="col-md-6">

					<div data-wow-delay="0.1s" class="wow fadeInRight">
						<h3>Trabajos a Medida</h3>
						<p>
							En Della Bitta contamos con un departamento propio de diseño. Desde ahí proyectamos la evolución de nuestros productos. Debido a esto usted podrá combinar los elementos diseñados para lograr llegar al producto deseado. Un trabajo hecho a medida de sus necesidades contempla la modificación de las cabinas, techos, botoneras o colores de terminación y accesorios hasta alcanzar el diseño ideal para su proyecto.
						</p>
					</div>

					<div data-wow-delay="0.3s" class="wow fadeInRight">
						<h3>Normas de Seguridad</h3>
						<p>
							Cumplimos con las más exigentes normas de seguridad y accesibilidad tales como EN 81-1 EN 81-2 Europea, Ley 962 GCBA (accesibilidad), Mercosur NM207, Argentina IRAM 3681-1.
						</p>
					</div>

					<div data-wow-delay="0.5s" class="wow fadeInRight">
						<h3>Experiencia y Trayectoria</h3>
						<p>
							Della Bitta SRL es una empresa familiar con 70 años de trayectoria conformada por la tercer generación de trabajadores enfocados en flexibilizar las posibilidades del diseño para llevar a cabo los proyectos más diversos requeridos por sus clientes.
						</p>
					</div>

				</div>

			</div>
		</div>

	</section>
	<!-- CABINAS CUSTOM end -->

	<!-- CTA FINALES -->
	<section class="cta_final">
		
		<!-- Faja -->
		<div class="container-fluid faja wow fadeInUp">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2">
						Ascensores Residenciales<br>
						Ascensores Hidráulicos<br>
						Ascensores Mecánicos
					</div>
				</div>
			</div>
		</div>
		<!-- Faja end -->

		<!-- Galeria -->
		<?php include('includes/galeria.inc.php') ?>
		<!-- Galeria end -->

		<!-- Cta -->
		<div class="cta_btn container wow fadeInUp">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="#formulario" class="btn_to_form btn btn-primary transition">MÁS INFORMACIÓN</a>
				</div>
			</div>
		</div>
		<!-- Cta end -->

	</section>
	<!-- CTA FINALES end -->

	<footer>
		<div class="container">

			<div class="row">

				<div class="col-md-6">
					<img class="img-fluid" src="img/logo-della-bitta-footer.png" alt="logo dellabitta footer">
					<div class="datos">
						<h4>Ascensores Della Bitta S.R.L.</h4>
						<p>
							Héroes de Malvinas 3789<br>
							(1826) Remedios de Escalada<br>
							Pcia. de Buenos Aires. Argentina
						</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row h-100">

						<div class="col-md-6 contactos">
							<a href="tel:541142423920">11 4242.3920</a><br>
							<a href="tel:541142482161">11 4248.2161</a><br>
							<a class="btn_to_form" href="#formulario">info@dellabitta.com.ar</a><br>
							<p>www.dellabitta.com.ar</p>
						</div>

						<div class="col-md-6 logos">
							<img class="img-fluid" src="img/codipis.png" alt="codipis">
							<span>|</span>
							<img class="img-fluid" src="img/caba.png" alt="caba">
							<span>|</span>
							<img class="img-fluid" src="img/iram.png" alt="iram">
						</div>

					</div>				
				</div>
				
			</div>

		</div>
	</footer>
	<div class="banda"></div>

	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="node_modules/wow.js/dist/wow.min.js"></script>
	<script src="node_modules/jquery.easing/jquery.easing.min.js"></script>
	<script src="node_modules/slick-carousel/slick/slick.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script src="js/app.js" ></script>

</body>
</html>