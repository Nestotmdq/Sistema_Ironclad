<?php
$name = $_GET['iden1'];//nombre
$street = $_GET['iden2'];




//header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
//header('Content-Disposition: attachment; filename=listado.xls');

include 'conexion2.php';
?>
<table>
<tr>
<td>NOMBRE</td>
<td>CALLE</td>
<td>NUMERO</td>
<td>PISO/DEPTO</td>
<td>LOCALIDAD</td>
<td>PROVINCIA</td>
<td>CODIGO_POSTAL</td>

</tr>
<?php
$sqlquery ="select  nombre,c_postal,localidad,pcia,dir_calle,dir_numero,dir_piso_depto
FROM `contactos` where nombre like '%$name%' and dir_calle like '%$street%'";
echo $sqlquery;
/*
$sqlcall = mysqli_query($link,$sqlquery);
while ($data = mysqli_fetch_assoc($sqlcall)){
    echo "<tr>";
    echo "<td>'".$data['nombre']."'</td>";
    echo "<td>'".$data['dir_calle']."'</td>";
    echo "<td>'".$data['dir_numero']."'</td>";
    echo "<td>'".$data['dir_piso_depto']."'</td>";
    echo "<td>'".$data['localidad']."'</td>";
    echo "<td>'".$data['pcia']."'</td>";
    echo "<td>'".$data['c_postal']."'</td>";
    echo "<tr>";
}
?>
</table>
*/
