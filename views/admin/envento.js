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
    
    var vali_imagen = $("#imagen").val();

    if (vali_imagen == "")
    {
        $("#error_div_imagen").addClass("has-error");
        $("#error_label_imagen").addClass("control-label");
        alerta_mensaje("danger", "Seleccionar una imagen", $("#crear_error_alert")).show();
        return false;
    }

    
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
    
    //console.log(settings);

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {
    	console.log(data);
        
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
    	alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#crear_error_alert")).show();
    });
    hideLoader();
}

//validar imagen
/** vista previa, mostar la imagen antes de subir al servidor **/
function imagen_previa(){

    var file = document.getElementById('imagen').imagen.files[0];
    var preview = Inventario.Producto.product_image_preview;

    //console.log(file);

    var reader = new FileReader();

    reader.onloadend = function (){

        if(!Validator.imageType.test(file.type) )
        {
            showAlert("danger", "¡Por Favor! la imagen debe ser de tipo .jpg / .png / .jpeg", Inventario.Producto.mensaje_producto_imagen).show();
            preview.attr("src",product_image_folder +'no_image.jpg');
        }else{
            preview.attr("src",reader.result);
            
        }
    }

    if(file){
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }

}*/