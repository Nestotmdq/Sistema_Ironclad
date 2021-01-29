<?php
session_start();

	$nombre ="";
	$calle ="";
    $salida = "";

    if (isset($_POST['consulta2'])) {

		$calle = $_POST['consulta2'];
		$nombre = $_SESSION['s_nombre'];
	    $_SESSION['s_calle'] = $calle;
    }

include 'tabla.php';

?>

