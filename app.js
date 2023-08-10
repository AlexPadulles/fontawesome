
$(document).ready(function () {

 var span = $('#span');
  $("#miBoton").click(function (event) {
    event.preventDefault();  

    var comentario = $("#comentario").val();  

    $.ajax({
      url: 'getUrIcons.php', 
      type: 'POST', 
      data: { comentario: comentario },  
      dataType: 'json',  
      success: function (response) {
        let v = JSON.stringify(response, null, 2);
        // var jsonObject = JSON.parse(v);
        console.log('Respuesta JSON recibida y procesada:', v);
      },
      error: function (error) {
        console.error('Error:', error);
      }
    });
  });

  $("#miBoton2").click(function (event) {
    event.preventDefault();  

    var comentario = $("#comentario").val();  

    $.ajax({
      url: 'contarArray.php', 
      type: 'POST', 
      data: { comentario: comentario },  
      dataType: 'json',  
      success: function (response) {
        var count = response.conteo.length;
        span.text('Total íconos: '+count);
      },
      error: function (error) {
        console.error('Error:', error);
      }
    });
  });
});
