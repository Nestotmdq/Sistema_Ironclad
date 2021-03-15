<?php
session_start();
if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>

<html lang="es">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src = 'js/engine4.js'></script>
<link rel="shortcut icon" href="./pics/logo.png">
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Sistema Ironclad Consultas inicia sesion ahora">

	<title>Ironclad Consultas</title>
</head>
<body>
<?php
include './php/menubar.php';
?>
	<h1>BUSQUEDA DE PERSONAS POR CALLE</h1>

<table  width = 70%>
<tr>
<td width =50%>
<div class="formulario">
        <br>
		<label for="caja_busqueda">NOMBRE DE CALLE</label>
		<input type="text" name="caja_calle" id="caja_calle" placeholder ="Ejemplo : San Juan">
		<br><br>
</div>	 
</td>	
<td>
	<div id="datos"><button type="button" id="btnhelp" class='btn btn-primary btn-sm'>AYUDA</button></div>
</td>
</tr>
</table>
<div id="informe"></div>
</body>
</html>

<?php

}
else{
header('Location:index.php');}
?>