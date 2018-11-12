$(function(){

	console.log("cargando javascritp con exito");

});

function crear_evento(){

	var titulo = $("#titulo").val().trim();
	var contenido = $("#contenido").val().trim();
	
	var imagen = document.getElementById('imagen');
    var file = imagen.files[0];

    var data = new FormData();
    data.append('imagen',file);
    data.append('titulo',titulo);
    data.append('contenido',contenido);

    $(".has-error").removeClass("has-error");
    $(".control-label").removeClass("control-label");

    if (titulo <= 0) 
    {
    	$("#error_div_titulo").addClass("has-error");
    	$("#error_label_titulo_1").addClass("control-label");
    	alerta_mensaje("danger", "Ingresar titulo", $("#crear_error_alert")).show();
    	return false;
    }

    if (contenido <= 0) 
    {
    	$("#error_div_contenido").addClass("has-error");
    	$("#error_label_contenido").addClass("control-label");
    	alerta_mensaje("danger", "Ingresar contenido", $("#crear_error_alert")).show();
    	return false;
    }

    

 
 
    
    
    /*if (imagen == "")
    {
        //$("#estilo").addClass("incorrecto");
        alerta_mensaje("danger", "¡Por Favor! Debe elegir una imagen", $("#crear_error_alert")).show();
        return false;
    }*/

    
    var settings = {
    	"type": "POST",
        "dataType": "json",
        "url": "../../controllers/eventoControllers.php",
        "data": data,
        "beforeSend" : function() {
        	showLoader();        
        },
        "cache": false,
        "contentType": false,
        "processData": false,

    };
    console.log(settings);

    $.ajax(settings)
    .done(function() {
    	console.log("success");
    })
    .fail(function() {
    	console.log("error");
    })
    .always(function() {
    	console.log("complete");
    });
    hideLoader();
    

}