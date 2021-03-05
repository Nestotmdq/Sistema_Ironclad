function buscar_datos(valor1,valor2,valor3){
  var params ={
			  "var1" : valor1,
			  "var2" : valor2,
			  "var3" : valor3
               };

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

};

function ayudar2(valor){
	console.log("pediste ayuda");
	
	$.ajax({
	  data:  {valor,valor}, //datos que se envian a traves de ajax
	  url:   'ayudas.php', //archivo que recibe la peticion
	  type:  'post', //método de envio
	  beforeSend: function () {
			  $("#datos").html("..");
	  },
	  success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
			  $("#datos").html(response);
	  }
  });
  
  };





$(document).on('keyup','.cajab', function(){
	var valor1 = $('#caja_busqueda').val();
	var valor2 = $('#caja_busqueda2').val();
	var valor3 = $('#caja_busqueda3').val();
    buscar_datos(valor1,valor2,valor3);
});

$(document).on('click','#btnsearch', function(){
	//console.log("ahora anda");
	var valor = 2;
	ayudar2(valor);

	
});