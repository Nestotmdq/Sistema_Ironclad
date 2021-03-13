
<?php
$cuadro = $_POST['valor'];

if($cuadro ==1){
?>
<table class ="stream tabla_fondo pl-3"   width='720px'>
   <thead>
   <tr id='titulo'>
<td>INFO</td>
   </tr>
   </thead>
   <td class="p-3">
   Para consultar este ranking debe ingresar las alturas entre las cuales se hará el conteo de los domicilios registrados. 
   Para esto dispone de  indicadores de rango <img src="./pics/range.jpg" width="194px" height ="25px"> y de campos de texto
   <img src="./pics/campo.jpg" width="172px" height ="33px">.
  Luego debe presionar el botón <img src="./pics/purple.jpg" width="65px" height ="23px"> para visualizar la tabla de resultados.<br>
  <BR>
  Una vez visualizada la tabla, la exportación a excel se hace  presionando el botón
  <img src="./pics/excel_button2.jpg" width ="200px" height ="30px">.<br>Los botones <img src="./pics/boton_ficha.jpg" width="65px" height ="23px"> le permiten acceder a los listados de contribuyentes por calle entre las alturas especificadas.
  <br>
  NOTA: Se registran en el ranking solo las calles con domicilios registrados entre las alturas especificadas. El ranking puede estar compuesto hasta por 50 calles, dependiendo de la condición anterior.
   </td>
   </table>
 <?php
};
if($cuadro==2){
?>  
 <table  class ="stream tabla_fondo pl-3" width="900px" >
	<thead>
	<tr id ='titulo' ><td>INFO</td></tr>
    </thead>
     <tr><td class="p-3">
 
  Para buscar los datos de un contribuyente  deberá ingresar la información disponible en los campos de texto <img src="./pics/calle.jpg" width ="225px" height ="25px">.Cuanta más información ingrese mas preciso será el resultado. Si la busqueda arroja más de 50 registros deberá ingresar más datos a fin de reformular la misma.<br><br>
  
  Para visualizar las fichas personales de los contribuyentes use el botón <img src="./pics/boton_ficha.jpg" width="65px" height ="25px"> de cada uno.
  El botón <img src="./pics/excel_button2.jpg" width ="200px" height ="30px"> le permitirá exportar el listado en formato Excel.
  </td>
  </tr>
  </table>
<?php
};
if($cuadro==3){
?> 

<table  class ="stream tabla_fondo pl-3" width="900px" >
	<thead>
	<tr id ='titulo' ><td>INFO</td></tr>
    </thead>
     <tr><td class="p-3">
 
  Para buscar informaciòn de un contribuyente a partir de la calle en donde este reside y su altura deberá primero ingresar el nombre de la misma en el campo de texto <img src="./pics/calle.jpg" width ="225px" height ="25px">.<br>
  Cuando las letras ingresadas sean suficientes para estimar una calle con precisión , el sistema calculará la altura máxima en esa calle. Llegado este paso debe indicar el rango de búsqueda utilizando los reguladores  <img src="./pics/range.jpg" width="194px" height ="25px"> o bien el cuadro de texto <img src="./pics/campo.jpg" width="172px" height ="33px">.
  A continuación presione <img src="./pics/boton_ficha.jpg" width="65px" height ="25px"> para visualizar el listado de contribuyentes filtrado según calle y alturas.
  <br>
  <br>
  Los botones  <img src="./pics/boton_ficha.jpg" width="65px" height ="25px"> en la columna "FICHAS" le permiten acceder a la ficha de información de cada contribuyente en particular.
  </td>
  </tr>
  </table>



<?php   
};
?>