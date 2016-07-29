<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Quilamapu</title>
	 <!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="navbar-fixed">
	<nav>
    <div class="nav-wrapper brown darken-2">
      <a href="#" class="brand-logo"> Quilamapu</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">¿Quiénes somos?</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#">Sass</a></li>
        <li><a href="#">Components</a></li>
        <li><a href="#">Javascript</a></li>
       </ul>
    </div>
  </nav>
 </div>

<!-- inicio del slider de movimiento -->
<div class="slider">
		<ul class="slides">
			<li>
				<img src="images/huevos.jpg"> <!-- imagenes del slider -->
				<div class="caption center-align">
					<h3>Huevos de campo</h3>
					<h5 class="light grey-text text-lighten-4">Biodiversificación</h5>
				</div>
			</li>
			<li>
				<img src="images/agricultura-eco.jpg"> <!-- image local agricultura -->
				<div class="caption right-align">
					<h3>Libre de Pesticidas</h3>
					<h5 class="light grey-text text-lighten-3"><---- Descripción breve ----></h5>
				</div>
			</li>
			 <li>
				<img src="images/abejorro.jpg"> <!-- image local agricultura -->
				<div class="caption left-align">
					<h3>Polinización</h3>
					<h5 class="light grey-text text-lighten-3">---> probando texto descriptivo</h5>
				</div>
			</li>
			 <li>
				<img src="images/negocio.jpg"> <!-- image local agricultura -->
				<div class="caption right-align">
					<h3>Ventas</h3>
					<h5 class="light grey-text text-lighten-3">lo orgánico de la tierra</h5>
				</div>
			</li>
		</ul>
 </div>


 <div class="section">
    <div class="row container">

      <h5 class="header align-center">Conociendo la agricultura orgánica</h5>
      <p class="">De la tierra a su mesa. Los productos que ofrecemos son de nuestro campo cuidando su desarrollo desde la siembra a la cosecha sin pesticidas.</p>
    </div>
  

<div class="container">
<div class="row">
			<div class="col m4">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/abejorro.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Abejorros polinizando<i class="material-icons right">more_vert</i></span>
						<p><a href="abejorros.php">Leer más...</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Huevos de Campo<i class="material-icons right">close</i></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia vitae similique suscipit. Architecto iusto sapiente eligendi omnis neque maiores a libero. Vitae, nostrum. Iusto labore illo, repellendus sed tempora cumque?</p>
					</div>
				</div>
			</div>

			<div class="col m4 l4">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/huevos.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Huevos de Campo<i class="material-icons right">more_vert</i></span>
						<p><a href="#">Leer más...</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Cebollas<i class="material-icons right">close</i></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia vitae similique suscipit. Architecto iusto sapiente eligendi omnis neque maiores a libero. Vitae, nostrum. Iusto labore illo, repellendus sed tempora cumque?</p>
					</div>
				</div>
			</div>

			<div class="col m4">
				<div class="card small">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/zanahorias.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Cebollas<i class="material-icons right">more_vert</i></span>
						<p><a href="#">Leer m</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Huevos de Campo<i class="material-icons right">close</i></span>
						<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia vitae similique suscipit. Architecto iusto sapiente eligendi omnis neque maiores a libero. Vitae, nostrum. Iusto labore illo, repellendus sed tempora cumque?</p>
					</div>
				</div>
			</div>

    </div>
		<!--abajo fin container -->
</div>
<!-- fin de la section -->
</div>



	
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/materialize.min.js"></script>
<script>
	$(document).ready(function(){
		 $(".button-collapse").sideNav();
		$('.parallax').parallax();
		$('.slider').slider({
			indicators: false
		});
	});

</script> 
</body>

<footer class="page-footer brown darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces de interes</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/channel/UCQPWtfgLbaY9a_9f4SMyZKA" target="_blank"><img src="images/youtube.png" alt="">   Suscríbete</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/Quilamapu" target="_blank"><img src="images/facebook.png" alt="">   Comparte</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Design by</a>
            </div>
          </div>
        </footer>

</html>