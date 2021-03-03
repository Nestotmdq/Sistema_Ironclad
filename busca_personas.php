
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Sistema Ironclad Consultas inicia sesion ahora">
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

    <table  class ="stream tabla_fondo pl-3" width="900px" >
	<thead>
	<tr id ='titulo' ><td>INFO</td></tr>
    </thead>
     <tr><td class="p-3">
 
  Para buscar los datos de un contribuyente  deberá ingresar la información disponible en las casillas (NOMBRE/CALLE/LOCALIDAD).Cuanta mas información ingrese mas preciso será el resultado. Si la busqueda arroja mas de 50 registros deberá ingresar mas datos a fin de reformular la misma.<br><br>
  
  
  La exportación a excel se hace presionando presionando el botón
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



