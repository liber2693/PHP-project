$(function(){
	//console.log("cargando javascritp con exito");
    $("#imagen").on('change', function(){ 
        //cargar_imagen_producto();
        imagen_previa();
    });
    $("#imagen").on('change', function(){
        var inputfile = $("#imagen").val();
        //console.log(inputfile.split(/(\\|\/)/g).pop());
        $("#filename").html("<br>"+inputfile.split(/(\\|\/)/g).pop());
    });
    //accion para ejecutar la funcion para guardar el evento
    $("#enviar_evento").on('click', function(){
        crear_evento();
    });


    listar_evento();


});
var url = '../../controllers/eventoControllers.php';
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

    if (titulo <= 0){
    	$("#error_div_titulo").addClass("has-error");
    	$("#error_label_titulo_1").addClass("control-label");
    	alerta_mensaje("danger", "Ingresar titulo", $("#crear_error_alert")).show();
    	return false;
    }
    if (contenido <= 0){
    	$("#error_div_contenido").addClass("has-error");
    	$("#error_label_contenido").addClass("control-label");
    	alerta_mensaje("danger", "Ingresar contenido", $("#crear_error_alert")).show();
    	return false;
    }
    var vali_imagen = $("#imagen").val();
    if (vali_imagen == ""){
        $("#error_div_imagen").addClass("has-error");
        $("#error_label_imagen").addClass("control-label");
        alerta_mensaje("danger", "Seleccionar una imagen", $("#crear_error_alert")).show();
        return false;
    }
    var settings = {
        "async": true,
        "crossDomain": true,
    	"type": "POST",
        "dataType": "json",
        "url": url,
        "data": data,
        "beforeSend" : function() {
        	showLoader();        
        },
        "cache": false,
        "contentType": false,
        "processData": false,
    };
    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {
    	var result = data;
        
        switch (result) {
            case 0:
                alerta_mensaje("danger", "Ha ocurrido un error con la imagen", $("#crear_error_alert")).show();
            break;

            case 1:
                alerta_mensaje("danger", "La imagen no es del Tipo de archivo que se solicita", $("#crear_error_alert")).show();
            break;

            case 2:
                alerta_mensaje("danger", "La imagen ya existe en el servidor", $("#crear_error_alert")).show();
            break;

            case 3:
                alerta_mensaje("danger", "La imagen no se puede subir al servidor", $("#crear_error_alert")).show();
            break;

            case 4:
                alerta_mensaje("success", "Evento creado con exito", $("#crear_error_alert")).show();
                limpiar();
            break;

            default:
                alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#crear_error_alert")).show();
            break;
        }
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
	//console.log(file.size);
    var reader = new FileReader();
    reader.onloadend = function (){
        if(!Validator.imageType.test(file.type)){
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
/** limpiar campos **/
function limpiar(){
    $(".crear_evento").val("");
    $("#imagen_previa").attr("src","../../img/team-1.jpg");
    $("#imagen").val("");
    $("#filename").empty();
}

/** Listar los eventos **/

function listar_evento(page){

    page = page || 1;


    var settings = {
        "async": true,
        "crossDomain": true,
        "type": "GET",
        "dataType": "json",
        "url": url,
        "cache": false,
        "data": {
            "page": page
        }
    }

    $("#registros").find("tr").remove();
    $("#paginado_lista").find("button").remove();

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {
       
        console.log(data);

        paginator = new Paginator(data.total, page);

        if(data.lista == 0)
        {
            var fila = '';
            fila += '<tr>';
            fila += '<td colspan="5" class="text-center">No existen eventos o noticias</td>';
            fila += '</tr>';
            $("#registros").append(fila);

        }
        else
        {
            data.lista.forEach(function(data, indice, array) {
                console.log(data)

                var tabla = '';
                tabla += '<tr onmousemove="cambia_fondo(this,1)" onmouseout="cambia_fondo(this,0)">';
                tabla += '<td>'+data.id+'</td>';
                tabla += '<td>'+data.titulo+'</td>';
                tabla += '<td>'+data.fecha_cracion+'</td>';
                tabla += '<td><input type="checkbox" '+(data.estatus == 1 ? 'checked' : '')+'></td>';
                tabla += '<td>';
                tabla += '<button type="button" class="btn btn-success" title="Actualizar Evento"><i class="fas fa-sync-alt"></i></button>&nbsp;';
                tabla += '<button type="button" class="btn btn-danger" title="Eliminar Evento"><i class="fas fa-trash-alt"></i></button>';
                tabla += '</td>';
                tabla += '</tr>';
                $("#registros").append(tabla);
            });

        }
        

        if(paginator.getPages() > 1)
        {
            var pag = '';

        

            pag += '<button type="button" class="btn btn-primary" onclick="listar_evento(1);"><i class="fas fa-angle-double-left "></i></button>&nbsp;';
                    
            if(paginator.hasPrev())
            {
                pag += '<button type="button" class="btn btn-primary" onclick="listar_evento('+paginator.getPrevious()+');"><i class="fas fa-angle-left "></i></button>&nbsp;';
                pag += '<button type="button" class="btn btn-primary" onclick="listar_evento('+paginator.getPrevious()+');">'+paginator.getPrevious()+'</i></button>&nbsp;';
            }
            
            pag += '<button type="button" class="btn btn-primary" onclick="listar_evento('+ paginator.getPage() +');">'+ paginator.getPage() +'</button>&nbsp;';
        
            if(paginator.hasNext())
            {
                pag += '<button type="button" class="btn btn-primary" onclick="listar_evento('+ paginator.getNext() +');">'+ paginator.getNext() +'</button>&nbsp;';
                pag += '<button type="button" class="btn btn-primary" onclick="listar_evento('+ paginator.getNext() +');"><i class="fas fa-angle-right "></i></button>&nbsp;';
            }
            
            pag += '<button type="button" class="btn btn-primary" onclick="listar_evento('+ paginator.getPages() +');"><i class="fas fa-angle-double-right "></i></button>&nbsp;';


            $("#paginado_lista").append(pag);   
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("ERROR");
    });
}

function cambia_fondo(fila,status){
    if(status == 1){
        fila.style.backgroundColor = "#5f5f5f29";
    }
    else{
        fila.style.backgroundColor = "#ffffff";   
    }
}
