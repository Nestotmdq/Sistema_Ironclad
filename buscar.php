<?php
session_start();

	$nombre ="";
	$calle ="";
    $salida = "";

    if (isset($_POST['consulta'])) {
 
		if(strlen($_POST['consulta'])>2){
		$nombre = $_POST['consulta'];
		$calle = $_SESSION['s_calle'];
		$_SESSION['s_nombre'] = $nombre;
			}
			
			
	}
include 'tabla.php';


?>

