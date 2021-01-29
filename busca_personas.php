<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<?php
session_start();


$_SESSION['s_nombre']='';
$_SESSION['s_calle']='';

?>


<!DOCTYPE html>

<html>
<head>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script tyoe="text/javascritp" src="js/main2.js"></script>


	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<title>Busqueda de personas</title>
</head>
<body>

<section class="principal">
    <center>
	<h1>BUSQUEDA DE PERSONAS</h1>
    </center>
	<div class="formulario">
		<label for="caja_busqueda">Nombre</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda" placeholder ="todos"></input>

		<label for="caja_busqueda2">Calle</label>
		<input type="text" name="caja_busqueda2" id ="caja_busqueda2" placeholder ="todos"></input>
	</div>

	<div id="datos"></div>
		
</section>





</body>
</html>