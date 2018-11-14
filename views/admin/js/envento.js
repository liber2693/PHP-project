$(function(){

	console.log("cargando javascritp con exito");

    $("#imagen").on('change', function(){ 
        //cargar_imagen_producto();
        imagen_previa();
    });
    $("#imagen").on('change', function(){
        var inputfile = $("#imagen").val();
        //console.log(inputfile.split(/(\\|\/)/g).pop());
        $("#filename").html("<br>"+inputfile.split(/(\\|\/)/g).pop());
    });

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
var Validator = {};

Validator.imageType = /image\/(.+)$/i;
Validator.imageExt = /\.(jpg|png|jpeg)$/i;

Validator.textType = /text\/plain$/i;
Validator.textExt = /\.txt$/i;

var ruta = "../../img/no_file.jpg";
/** vista previa, mostar la imagen antes de subir al servidor **/
function imagen_previa(){

	var file = document.getElementById("imagen").files[0];
    var preview = $("#imagen_previa");
	//verificar tamaño
	console.log(file.size);
    
    var reader = new FileReader();

    reader.onloadend = function (){

        if(!Validator.imageType.test(file.type))
        {
            $("#imagen").val("");
            alerta_mensaje("danger", "¡Por Favor! la imagen debe ser de tipo .jpg / .png / .jpeg", $("#crear_error_alert")).show();
            preview.attr("src",ruta);
        }else{
            preview.attr("src",reader.result);
            
        }
    }

    if(file){
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }

}

/*function imagen_previa(){
    var x = document.getElementById("imagen");
    var txt = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            //txt = "Select one or more files.";
            console.log("Select one or more files.");
        } else {
            for (var i = 0; i < x.files.length; i++) {
                //txt += "<br><strong>" + (i+1) + ". file</strong><br>";
                console.log("<br><strong>" + (i+1) + ". file</strong><br>")
                var file = x.files[i];
                if ('name' in file) {
                    txt += "name: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "size: " + file.size + " bytes <br>";
                }
            }
        }
    } 
    else {
        if (x.value == "") {
            txt += "Select one or more files.";
        } else {
            txt += "The files property is not supported by your browser!";
            txt  += "<br>The path of the selected file: " + x.value; // If the browser does not support the files property, it will return the path of the selected file instead. 
        }
    }
    document.getElementById("demo").innerHTML = txt;
}*/
