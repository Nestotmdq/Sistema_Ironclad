<script src="js/sweetalert2@10.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php
session_start();
include 'conexion2.php';
$valor1 = $_POST['valueone'];//calle
$valor2 = $_POST['valuetwo'];//localidad
$valor3 = $_POST['valuetree'];//altura1
$valor4 = $_POST['valuefour'];//altura2
$sqlquery = "select * from contactos where localidad like '".$valor1."' and dir_calle like '".$valor2."' and dir_numero between '".$valor3."' and '".$valor4."'" ;


$view2 ='';
$view2 .="
<link rel='stylesheet' type='text/css' href='css/estilo.css'> 
<header class='principal'>
<center>
<h1>LISTADO DE CONTRIBUYENTES CALLE 
";
$view2 .=$valor2; 
$view2 .= " ENTRE LAS ALTURAS ";
$view2 .= $valor3;
$view2 .= " ";
$view2 .= "y";
$view2 .= " ";
$view2 .= $valor4;
$view2 .= "</h1></center></header>";
$view2 .="<table class='tabla_fondo'>";
$view2 .= "<tr><td><center><a href ='importoexcell.php?v1=".$valor1."&v2=".$valor2."&v3=".$valor3."&v4=".$valor4."' class= 'btn btn-success btn-sm'>EXPORTAR LISTADO A EXCEL</a></center></td></tr>";
$view2 .= "<tr><td>";
$view2 .="<table border ='1' class='tabla_datos'>
<thead>
<tr id='titulo'>
<td>NOMBRES</td>
<td>FICHAS</td>
</tr>
</thead>
";

$show = mysqli_query($link,$sqlquery);
$btn_alert = 0;

while($row = mysqli_fetch_assoc($show))
{
$btn_alert ++;
$btn_alert_name = 'ab';  
$btn_alert_name .= $btn_alert;

$view2 .=    
"<tr><td>";
$view2 .=$row['nombre'];
$view2 .= "</td>";

$view2 .= "<td>";
$view2 .="<button type='button' id='";
$view2 .= $btn_alert_name;
$view2 .="'class='btn btn-primary btn-sm'>mostrar";
$view2 .="</button>";
$view2 .= "</td>";
$view2 .= "<tr>";
$view2 .="
<script >
	$(document).ready(function () {
		$('#".$btn_alert_name."').click(function(){
      Swal.fire({html: `<h1>FICHA DE DATOS</h1><hr>
        <center>
<table>
<tr>
<td>NOMBRE :</td>
<td>".$row['nombre']."
</td>
</tr>
<tr>
<td>CALLE :</td>
<td>".$row['dir_calle']."</td>
</tr>
<tr>
<td>NUMERO :</td>
<td>".$row['dir_numero']."</td>
</tr>";

if($row['dir_piso_depto']!=''){
$view2 .="
  <tr>
<td>PISO/DEPTO :</td>
<td>".$row['dir_piso_depto']."</td>
</tr>
";
}
$view2 .="
<tr>
<td>LOCALIDAD :</td>
<td>".$row['localidad']."</td>
</tr>
<tr>
<td>PROVINCIA :</td>
<td>".$row['pcia']."</td>
</tr>
<tr>
<td>CODIGO POSTAL</td>
<td>".$row['c_postal']."</td>
</tr>
</table></div>
</center>
<br>
       <input type='button' class='btn btn-primary btn-sm'value='Imprimir' onclick='javascript:window.print()' />
        `, });    
		});
	});
</script>";
};
$view2 .="</table>";

$view2 .="</td></tr>";
$view2 .="</table>";


echo $view2;
?>


