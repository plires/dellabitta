const header = document.getElementsByTagName("header")[0]
const body = document.getElementsByTagName("body")[0]
const nav = document.getElementById('menu')
const toggle = document.getElementById('toggleIcon')
const hamburger = document.getElementById('hamburger')
const navigation = document.getElementById('navigation')
const content = document.getElementById('content')
var sending = document.getElementById('sending_form')

const btnCloseSubnavigation = document.getElementsByClassName('close_subnavigation')

const btnProducts = document.getElementById('btn_products')

const subNavigation = document.getElementById('sub_navigation')

function menuToggle() {
	nav.classList.toggle('active')
	toggle.classList.toggle('active')
	
	if (hamburger.classList.contains("fa-bars")) {
		hamburger.classList.remove('fa-bars')
		hamburger.classList.add('fa-times')
	} else {
		hamburger.classList.add('fa-bars')
		hamburger.classList.remove('fa-times')
		navigation.classList.remove('translate')
		subNavigation.classList.remove('translate')
	}
}

function openProducts() {

	if (document.body.getBoundingClientRect().width < 1024) { // chequea el ancho de la pantalla
		navigation.classList.toggle('translate')
		subNavigation.classList.toggle('translate')
		return
	} else {
		subNavigation.classList.add('open')
		return
	}
	
}

body.addEventListener('click', function(){
	subNavigation.classList.remove('open') 
});



// HABILITAR ESTA FUNCION PARA QUE EL HEADER APAREZCA Y DESAPAREZCA EN FUNCION
// DEL SCROLL HACIA ARRIBA O ABAJO
var start = true;
var scrollPos = 80;
window.addEventListener('scroll', function(){

	if ( (document.body.getBoundingClientRect()).top > scrollPos ) {
		// console.log((document.body.getBoundingClientRect()).top)
		// console.log('asdsad')
		showlHeader()
	} else if( start ) {
		showlHeader()
		header.classList.remove('background')
		start = false
	} else {

		if ( window.scrollY > 120 ) {
			hidelHeader()
			start = false
		}
	}

	scrollPos = (document.body.getBoundingClientRect()).top

});

function showlHeader(){
	header.classList.remove('hide')
	header.classList.add('background')
}

function hidelHeader(){
	header.classList.add('hide')
	header.classList.remove('background')
}

toggle.addEventListener('click', function(){
	menuToggle()
});

for (var i = 0; i < btnCloseSubnavigation.length; i++) {

	btnCloseSubnavigation[i].addEventListener('mouseover', function(e) {
		subNavigation.classList.remove('open')
	})

}

AOS.init();

// Validacion del Formulario
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

// Verificar recaptcha de los formularios
function verifyRecaptcha(formName = null, key = null, action = null) {

	var errorsInFieldsFront = false

  // Validacion del Formulario
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var form = document.getElementById(formName);

  // Loop over them and prevent submission
  if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
    errorsInFieldsFront = true
  }

	form.classList.add('was-validated');

  if (!errorsInFieldsFront) {
  	grecaptcha.ready(function() {
      grecaptcha.execute(key , {
        action: action
        }).then(function(token) {
        $('#' + formName).prepend('<input type="hidden" name="token" value="' + token + '" >');
        $('#' + formName).prepend('<input type="hidden" name="action" value="' + action + '" >');
        $('#' + formName).submit();
      });
    });
  }
  
}
