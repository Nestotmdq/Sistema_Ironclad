function busqueda(valor){

  console.log('Datos enviados a ajax');
  console.log (valor);
  
    $.ajax({
      data:  {valor,valor}, //datos que se envian a traves de ajax
      url:   'number_search_rev.php', //archivo que recibe la peticion
      type:  'post', //método de envio
      beforeSend: function () {
              $("#datos").html("Procesando, espere por favor...");
      },
      success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
              $("#datos").html(response);
      }
  });
  }

  function ayudar3(valor){
        
        $.ajax({
          data:  {valor,valor}, //datos que se envian a traves de ajax
          url:   'ayudas.php', //archivo que recibe la peticion
          type:  'post', //método de envio
          beforeSend: function () {
                  $("#informe").html("..");
          },
          success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                  $("#informe").html(response);
          }
      });
      
      }  

  $(document).on('keyup','#caja_calle', function(){
      var valor = $(this).val();
      busqueda(valor);
  });

  $(document).on('click','#btnhelp', function(){
        var value = 3;
        ayudar3(value);
});


