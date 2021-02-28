
<?php
session_start();
if(isset($_SESSION['status'])){
?>

<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="shortcut icon" href="./pics/logo.png">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src ='js/engine2.js'></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
 
<title>Sistema Ironclad Consultas</title>
</head>
<body>
<?php
include './php/menubar.php';

?>
 
	<h1>BUSQUEDA DE PERSONAS CON INFORMACION PARCIAL</h1>
	<div class="formulario">
		<label for="caja_busqueda">Nombre</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda" placeholder ="Ej: Juan Perez" class ='cajab'>
		<label for="caja_busqueda2">Calle</label>
		<input type="text" name="caja_busqueda2" id ="caja_busqueda2" placeholder ="Ej: San Martin" class ='cajab'>
        <label form="caja_busqueda3">Localidad</label>
		<input type="text" name="caja_busqueda3" id ="caja_busqueda3" placeholder ="Ej: Mar del Plata" class = 'cajab'>    
	</div>
	<div id="datos">
	<br>

    <table  class ="stream tabla_fondo" width="900px" >
	<thead>
	<tr id ='titulo' ><td>INFO</td></tr>
    </thead>
     <tr><td>
  Para buscar los datos de un contribuyente  deberá ingresar la información disponible en las casillas (NOMBRE/CALLE/LOCALIDAD).Cuanta mas informacion ingrese mas preciso será el resultado. Si la busqueda arroja mas de 50 registros deberá ingresar mas datos a fin de reformular la misma.<BR><br>
 
  
  Los resultados mostrados puede exportarlos a excel presionando el botón
  
  <img src="./pics/excel_button.jpg" width ="200px" height ="30px">.<br>
  Puede tener acceso a las fichas de los contribuyentes a a través de sus botones <img src="./pics/boton_ficha.jpg" width="65px" height ="25px">
  
  </td>
  </tr>
  </table>
</td></tr>
    </table>


	</div>
		
</body>
</html>
<?php

}
else{
header('Location:index.php');}
?>



