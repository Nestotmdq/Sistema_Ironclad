$(buscar_datos2());

function buscar_datos2(consulta2){
	$.ajax({
		url: 'buscar2.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta2: consulta2},
	})
	.done(function(respuesta2){
		$("#datos").html(respuesta2);
	})
	.fail(function(){
		console.log("error");
	});
}


$(document).on('keyup','#caja_busqueda2', function(){
	var valor = $(this).val();
	console.log(valor);
	if (valor != "") {
		buscar_datos2(valor);
	}else{
		buscar_datos2();
	}
});