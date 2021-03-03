<?php
session_start();
if(isset($_SESSION['status'])){
?>

<?php
//session_start();
//$_SESSION['str']= "ninguna";
include 'conexion2.php';

$sql = "SELECT dir_numero from contactos  order by dir_numero DESC limit 1";
$sql_exec = mysqli_query($link,$sql);
$sql_exec_datos = mysqli_fetch_assoc($sql_exec);
$altura_maxima = $sql_exec_datos['dir_numero'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="./pics/logo.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/engine.js"></script>
<link rel="stylesheet" type="text/css" href="css/estilo.css"> 

  <title>Ironclad Consultas</title>
</head>
<body>
<?php
include './php/menubar.php';

?>
<section class="principal">

<table>
<tr>
<td valign ="top" width ='60%'> 

	<h1>RANKING  DE 50 CALLES MAS POBLADAS</h1>
	<div class="formulario">
    
    
    <?php
         echo "<table>";
         echo "<tr>";
         echo "<td>";
         echo '<label for="caja_busqueda"  class ="texto">Altura A</label>';
         echo "<input type='range' name='max_range_input' step='100' min='0' max='".$altura_maxima."' onchange='updTextmax(this.value);'>
         ";
         echo "<input type='text' id='max_text_input' value='".$altura_maxima."'>";
         echo "<br>";
         echo "<label for='caja_busqueda2' class ='texto'>Altura B</label>";
         echo "<input type='range' name='min_range_input' step='100' min='0' max='".$altura_maxima."' onchange='updTextmin(this.value);'>";
         echo "<input type='text' id='min_text_input' value='".$altura_maxima."'>";
         echo "</td>";
         echo "<td>";
         ?>
        <input type="button" class ="btn btn-primary btn-sm" href="javascript:;" onclick="realizaProceso($('#max_text_input').val(), $('#min_text_input').val());return false;" value="mostrar" id ="botonmuestra"/> 
         <?php
         echo "</td>";
         echo "</tr>";
         echo "</table>";
    ?>

        <br>

   <span id="resultado">
<br>
   <table class ="stream tabla_fondo pl-3"   width='720px'>
   <thead>
   <tr id='titulo'>
<td>INFO</td>
   </tr>
   </thead>
   <td class="p-3">
   Para consultar este rankig debe primero ingresar las alturas entre las cuales se hará el conteo de los domicilios registrados. Luego debe presionar el botón mostrar.
   
   
   
   
   </td>
   </table>
   

   
   

   
   </span>
</td>
<td><td valign ="top" td width ="40%">

<span id="resultado2"></span>
</td>
</tr>
</table>
  </div>
  




</section>
<script>
function updTextmax(val) {
        document.getElementById('max_text_input').value=val; 
      }

function updTextmin(val) {
        document.getElementById('min_text_input').value=val; 
      }
</script>

</body>
</html>

<?php

}
else{
header('Location:index.php');}
?>
