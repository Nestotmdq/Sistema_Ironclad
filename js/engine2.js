
function buscar_datos(valor1,valor2,valor3){
  var params ={
			  "var1" : valor1,
			  "var2" : valor2,
			  "var3" : valor3
               };
//console.log('Datos enviados a ajax');
//console.log(params.var1);//nombre
//console.log(params.var2);//calle
//console.log(params.var3);//localidad

  $.ajax({
	data:  params, //datos que se envian a traves de ajax
	url:   'buscador.php', //archivo que recibe la peticion
	type:  'post', //método de envio
	beforeSend: function () {
			$("#datos").html("Procesando, espere por favor...");
	},
	success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
			$("#datos").html(response);
	}
});

}
$(document).on('keyup','.cajab', function(){
	var valor1 = $('#caja_busqueda').val();
	var valor2 = $('#caja_busqueda2').val();
	var valor3 = $('#caja_busqueda3').val();
//	console.log('escuchando cambios');
	console.log(valor3);
	console.log(valor2);
	console.log(valor1);
    buscar_datos(valor1,valor2,valor3);
});