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

</html>