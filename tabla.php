<script src="sweetalert2@10.js"></script>
<?php

include 'conexion2.php';
$query = "SELECT  nombre,c_postal,localidad,pcia,dir_calle,dir_numero,dir_piso_depto
 FROM `contactos` where nombre like '%$nombre%' and dir_calle like '%$calle%'";
$hacer = mysqli_query($link,$query);
$num4 = mysqli_num_rows($hacer);

if (($num4>0)&&($num4<50)) {

	$salida.="<table border=1 class='tabla_datos'>
<thead>
<tr id='titulo'>
	<td>NOMBRE</td>
	<td>CALLE</td>
	<td>NUMERO</td>
	<td>FICHAS</td>
</tr>
</thead>
<tbody>";

$btnmodal = 0;
while ($fila = mysqli_fetch_assoc($hacer)) {

$btnmodal ++;
$btnname = 'b';
$btnname .=$btnmodal;

	$salida.="<tr>
<td>".$fila['nombre']."</td>
<td>".$fila['dir_calle']."</td>
<td>".$fila['dir_numero']."</td>
<td>

<center><!-- Button trigger modal -->
<button type='button' id='".$btnname."' class='btn btn-primary'>
  INFO
</button></center>

</td>
</tr>

<script >
	$(document).ready(function () {
		$('#".$btnname."').click(function(){
      Swal.fire({
        html: `<h1>FICHA DE DATOS</h1><br>
        <center>
       <table>
      
       <tr>
       <td>NOMBRE :</td>
       <td>";
       $salida .= $fila['nombre'];
       $salida .="          
       </td>
       </tr>
       <tr>
       <td>DIRECCION :</td>
       <td>";
       $salida .=$fila['dir_calle'];
       $salida .= ' '; 
       $salida .=$fila['dir_numero'];
       $salida .="
       </td>
       </tr>";
       
        if ($fila['dir_piso_depto']!=''){
       
       $salida .="   
       <tr>
       <td>PISO / DEPTO</td>
       <td>";
       $salida .= $fila['dir_piso_depto'];
       $salida .="</td>
       </tr>";
        }
      
       $salida .=" 
       <td>LOCALIDAD</td><td> ";
       $salida .= $fila['localidad'];
       $salida .="
       </td>
       </tr>
       <tr>
       <td>PROVINCIA :</td>
       <td>";
       $salida .= $fila['pcia'];
       $salida .="
       </td>
       <tr>
       <td>CODIGO POSTAL :</td>
       <td>";
       $salida .= $fila['c_postal'];
       $salida .="
       </td>
       </tr>
       <tr>
       </tr>
       </table>
       <br>

       <a href='";
       $cadena =  'https://www.google.com/maps/search/';
       $cadena .= $fila['dir_calle'];
       $cadena .= ' ';
       $cadena .= $fila['dir_numero'];
       $cadena .= '+';
       $cadena .= $fila['localidad'];
       $cadena .= '/@-38.0032629,-57.5810273,17z/data=!3m1!4b1';


       $salida .= $cadena;

      // $salida .= $cadena;
       $salida .="' target=blanc>Localizar en Google Maps</a>

       </center>
    
        `,
    });
    
		});
	});

</script>
";
$btnname = 'b';
}
$salida.="</tbody></table>";
}
if($num4>50){
$salida.="LA BUSQUEDA DEVUELVE MAS DE 50 RESULTADOS, INGRESE MAS PISTAS POR FAVOR";
}
if($num4==0)
{
$salida.="NO HAY DATOS :(";
}

echo $salida;
$close = mysqli_close($link);

?>
