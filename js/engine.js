function realizaProceso(valorCaja1, valorCaja2){
    var parametros = {
            "valorCaja1" : valorCaja1,
            "valorCaja2" : valorCaja2
    };
    $.ajax({
            data:  parametros, //datos que se envian a traves de ajax
            url:   'ejemplo_ajax_proceso.php', //archivo que recibe la peticion
            type:  'post', //método de envio
            beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
            },
            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    $("#resultado").html(response);
            }
    });
}

function muestralista(){
        alert(hola);
        };

        $(document).on('click','#botonmuestra', function(){
           console.log("cliqueaste el boton");
                      $('#resultado2').html("");
                    
        });
