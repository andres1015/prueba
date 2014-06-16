
  $.ajax({
 // type: "POST",
  url: "../traerUsuario.php",
  datatype: "json",
  }).done(function( resultado ){
     var objetos = {"Personas":[resultado]};
    $.each( resultado, function( key, val ) {
      //alert( "<li>" + val + "</li>" );
    });
    for(var i=0;resultado.length>i;i++){
      $('<h1/>').text(resultado[i].nombre+" Sabeeeee").appendTo('body');
    }
   });

