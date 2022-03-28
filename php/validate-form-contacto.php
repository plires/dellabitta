<?php

	include('functions.php');
  include('../includes/config.inc.php');
  include('../clases/app.php');
  
  require_once("../clases/repositorioSQL.php");

  $db = new RepositorioSQL();

	$token = $_POST['token'];
	$action = $_POST['action'];

	$cu = curl_init();
	curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($cu, CURLOPT_POST, 1);
	curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_KEY_SECRET, 'response' => $token)));
	curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($cu);
	curl_close($cu);

	$datos = json_decode($response, true);

	$errors = [];

	if($datos['success'] == 1 && $datos['score'] >= 0.5){

		if (emptyInput($_POST['name'])) {
	    $errors['name'] = 'Ingresá un nombre.';
	    $name = $_POST['name'];
	  } else {
	    $name = $_POST['name'];
	  }

		if (!emailCheck($_POST['email'])) {
	    $errors['email'] = 'Ingresa un email válido.';
	    $email = $_POST['email'];
	  } else {
	    $email = $_POST['email'];
	  }

	  if (emptyInput($_POST['phone'])) {
	    $errors['phone'] = 'Ingresá un teléfono.';
	    $phone = $_POST['phone'];
	  } else {
	    $phone = $_POST['phone'];
	  }

	  if (emptyInput($_POST['comments'])) {
	    $errors['comments'] = 'Falta el mensaje.';
	    $comments = $_POST['comments'];
	  } else {
	    $comments = $_POST['comments'];
	  }

	  // Verificamos si hay errores en el formulario
	  if ( count($errors) == 0 ) {

	  	//grabamos en la base de datos
		  $save = $db->getRepoContacts()->saveContactFormContactInBDD($_POST);

		  $app = new App;

		  // Registramos en Perfit el contacto
		  $app->registerEmailContactsInPerfit(API_KEY_PERFIT, LIST_PERFIT_SEGUROS, $_POST);

	  	//Enviamos los mails al cliente y usuario
		  $sendEmails = $app->prepareEmailFormContacto($_POST);

		  $url = explode("?",$_SERVER['HTTP_REFERER']);

		  if ($sendEmails) {
		    
		    $msg_seguros = 'Gracias por tu consulta, en breve nos contactaremos';
		    header("Location: " . $url[0] ."?msg_seguros=". urlencode($msg_seguros) . "#notifications" );

		  } else {

		    header("Location: " . $url[0] . "?" . http_build_query( array( "errors[send]" => 'La consulta fue registrada, sin embargo no puderon enviarse los correos de agradecimiento. Si tiene alguna duda vuelva a contactarse por favor' ), $email ) . "#notifications" );

		  }

	  } else {

	  	$url = explode("?",$_SERVER['HTTP_REFERER']);

	  	header("Location: " . $url[0] . "?" . http_build_query( array( 
	  		"errors" => $errors, 
	  		"name" => $name,
	  		"email" => $email,
	  		"phone" => $phone,
	  		"comments" => $comments,
	  		"origin" => $_POST['origin'],
		 	) ) . "#notifications" );

	  	exit;

	  }
	  
  } else {

  	$url = explode("?",$_SERVER['HTTP_REFERER']);

  	header("Location: " . $url[0] . "?" . http_build_query( array( "errors[recaptcha]" => 'Error al validar el recaptcha... intente nuevamente por favor' ), $email ) . "#notifications" );

  	exit;

	} 