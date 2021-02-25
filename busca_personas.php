<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!DOCTYPE html>

<html>
<head>
<link rel="shortcut icon" href="./pics/logo.png">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src ='js/engine2.js'></script>'
<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
<title>Ironclad Consultas</title>
</head>
<body>

<table  width = 100% height =15%  class='tabla_menu'>
<tr>
<td width ="3%"></td>
<td width ="17%">
<button type="button" class="btn btn-info" btn-sm>Comparador de calles</button>
</td>
<td width ="28%">
<button type="button" class="btn btn-info" btn-sm>Busca personas con informacion parcial</button>
</td>
<td>
<button type="button" class="btn btn-info" btn-sm>Busca personas por calle</button><br>
</td>
<td width="10%"></td>
<td>
<button type="button" class="btn btn-warning" btn-sm>SALIR</button><br>
</td>

<td><img src="./pics/logosistema.jpg" width="150px" height ="80px">

</td>
<tr>
</table>

    <center>
	<h1>BUSQUEDA DE PERSONAS</h1>
    </center>
	<div class="formulario">
		<label for="caja_busqueda">Nombre</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda" placeholder ="Juan Perez" class ='cajab'>
		<label for="caja_busqueda2">Calle</label>
		<input type="text" name="caja_busqueda2" id ="caja_busqueda2" placeholder ="San Martin" class ='cajab'>
        <label form="caja_busqueda3">Localidad</label>
		<input type="text" name="caja_busqueda3" id ="caja_busqueda3" placeholder ="Mar del Plata" class = 'cajab'>    
	</div>

	<div id="datos"></div>
		


</body>
</html>