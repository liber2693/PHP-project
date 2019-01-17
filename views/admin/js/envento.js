$(function(){
	console.log("cargando javascritp con exito");
    var URLactual = window.location.pathname;
    console.log(URLactual);

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

   
    //bloque para la pantalla de lista    
    if(URLactual === '/webpage_bell/views/admin/inicAmin.php')
    {
        listar_evento();

        $("#text_evento").on("keypress", function(e) {

            tecla = (document.all) ? e.keyCode : e.which;

            if(tecla == 13)
            {
                listar_evento();
            }
        });

        $("#buscar_evento").on("click", function(e) {
            listar_evento();
        });

        //volver a la lista
        $("#volver_lista").on("click",function(){
            $("#lista_eventos").removeClass("oculto");
            $("#actualizar_evento").addClass("oculto");
        });

    }
    $("#enviar_actualizar_evento").on("click",function(){
        actualizar_evento(id_registro);
    })
    //eliminar registro
    $("#eliminar_evento").on("click",function(){
        eliminar_evento(id_registro_elimanar);
    })
    


});

function crear_evento(){

	var titulo = $("#titulo").val().trim();
	var texto = $("#contenido").val().trim();
    var contenido = parrafo(texto,1);

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
        "url": url_admin,
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

            case 5:
                alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#crear_error_alert")).show();
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

    var text = $("#text_evento").val().trim();


    var settings = {
        "async": true,
        "crossDomain": true,
        "type": "GET",
        "dataType": "json",
        "url": url_admin,
        "cache": false,
        "data": {
            "page": page,
            "text": text,
        }
    }

    $("#registros").find("tr").remove();
    $("#paginado_lista").find("button").remove();

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {
       
        //console.log(data);

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
                //console.log(data.estatus)

                var tabla = '';
                tabla += '<tr onmousemove="cambia_fondo(this,1)" onmouseout="cambia_fondo(this,0)">';
                tabla += '<td>'+data.id+'</td>';
                tabla += '<td>'+data.titulo+'</td>';
                tabla += '<td>'+fn_date_format(data.fecha_creacion)+'</td>';
                //tabla += '<td><input type="checkbox" '+(data.estatus == 1 ? 'checked' : '')+' ></td>';

                tabla += '<td>';
                tabla += '<div class="form-group onoffswitch">';
                tabla += '<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch'+data.id+'" '+(data.estatus == 1 ? 'checked' : '')+' onclick="cambiar_estatus('+data.id+','+data.estatus+')" value="1">';
                tabla += '<label class="onoffswitch-label" for="myonoffswitch'+data.id+'">';
                tabla += '<span class="onoffswitch-inner"></span>';
                tabla += '<span class="onoffswitch-switch"></span>';
                tabla += '</label>';
                tabla += '</div>';
                tabla += '</td>';

                tabla += '<td>';
                tabla += '<button  onclick="pre_actualizar('+data.id+')" type="button" class="btn btn-success" title="Actualizar Evento"><i class="fas fa-sync-alt"></i></button>&nbsp;';
                tabla += '<button type="button" onclick="pre_eliminar('+data.id+',\''+data.titulo+'\',\''+data.fecha_creacion+'\')" data-toggle="modal" data-target="#myModal" class="btn btn-danger" title="Eliminar Evento"><i class="fas fa-trash-alt"></i></button>';
                tabla += '</td>';
                tabla += '</tr>';
                $("#registros").append(tabla);
            });

        }
        

        if(paginator.getPages() > 1)
        {
            var pag = '';

            pag += '<button type="button" class="btn btn-boton" onclick="listar_evento(1);"><i class="fas fa-angle-double-left "></i></button>&nbsp;';
                    
            if(paginator.hasPrev())
            {
                pag += '<button type="button" class="btn btn-boton" onclick="listar_evento('+paginator.getPrevious()+');"><i class="fas fa-angle-left "></i></button>&nbsp;';
                pag += '<button type="button" class="btn btn-boton" onclick="listar_evento('+paginator.getPrevious()+');">'+paginator.getPrevious()+'</i></button>&nbsp;';
            }
            
            pag += '<button type="button" class="btn" style="color: #fff;background-color: #132c31;border-color: #199EB8;" onclick="listar_evento('+ paginator.getPage() +');">'+ paginator.getPage() +'</button>&nbsp;';
        
            if(paginator.hasNext())
            {
                pag += '<button type="button" class="btn btn-boton" onclick="listar_evento('+ paginator.getNext() +');">'+ paginator.getNext() +'</button>&nbsp;';
                pag += '<button type="button" class="btn btn-boton" onclick="listar_evento('+ paginator.getNext() +');"><i class="fas fa-angle-right "></i></button>&nbsp;';
            }
            
            pag += '<button type="button" class="btn btn-boton" onclick="listar_evento('+ paginator.getPages() +');"><i class="fas fa-angle-double-right "></i></button>&nbsp;';


            $("#paginado_lista").append(pag);   
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("ERROR");
    });
}

/** cambiar el estatus de una noticia **/
function cambiar_estatus(id,status){

    //estatus = status ? 1 : 0;
    //console.log(id+' '+status);

     var settings = {
        "async": true,
        "crossDomain": true,
        "type": "POST",
        "dataType": "json",
        "url": url_admin,
        "data": {
            "id" : id,
            "estatus" : status
        },
        "beforeSend" : function() {
            showLoader();        
        },
        "cache": false,
    };

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {
        
        var result = data.result;

        switch (result) {
            case 1:
                if (status == 0) 
                {
                    alerta_mensaje("success", "Evento ACTIVADO", $("#lista_error_alert")).show();
                }
                else if(status == 1)
                {
                    alerta_mensaje("success", "Evento DESACTIVADO", $("#lista_error_alert")).show();
                }
                listar_evento();
            break;

            case 3:
                alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#lista_error_alert")).show();
            break;

            default:
                alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#lista_error_alert")).show();
            break;
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#lista_error_alert")).show();
    });
    hideLoader();
    
}

/** preparar un evento para actualizar **/
function pre_actualizar(id){

    var settings = {
        "async": true,
        "crossDomain": true,
        "type": "GET",
        "dataType": "json",
        "url": url_admin,
        "cache": false,
        "data": {
            "id_evento": id,
        },
        "beforeSend" : function() {
            showLoader();        
        },
    }

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {

        $("#lista_eventos").addClass("oculto");
        $("#actualizar_evento").removeClass("oculto");

        $("#titulo_Actualizar").val(data.titulo);
        $("#contenido_Actualizar").val(parrafo(data.contenido,2));
        $("#imagen_previa").attr('src', '../../img/eventos/'+data.nombre_imagen);

        id_registro = data.id;

    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#lista_error_alert")).show();
    });
    hideLoader();

}

/** actualizar el registro de un evento **/
function actualizar_evento(id){

    var titulo_Actualizar = $("#titulo_Actualizar").val().trim();
    var contenido_Actualizar = $("#contenido_Actualizar").val().trim();

    var imagen = document.getElementById('imagen');
    var file = imagen.files[0];
    
    var data = new FormData();
    data.append('id_registro',id);
    data.append('imagen',file);
    data.append('titulo_Actualizar',titulo_Actualizar);
    data.append('contenido_Actualizar',contenido_Actualizar);

    $(".has-error").removeClass("has-error");
    $(".control-label").removeClass("control-label");

    if (titulo_Actualizar.length <= 0){
        $("#error_div_titulo").addClass("has-error");
        $("#error_label_titulo_1").addClass("control-label");
        alerta_mensaje("danger", "Ingresar titulo", $("#crear_error_alert")).show();
        return false;
    }
    if (contenido_Actualizar.length <= 0){
        $("#error_div_contenido").addClass("has-error");
        $("#error_label_contenido").addClass("control-label");
        alerta_mensaje("danger", "Ingresar contenido", $("#crear_error_alert")).show();
        return false;
    }

    var settings = {
        "async": true,
        "crossDomain": true,
        "type": "POST",
        "dataType": "json",
        "url": url_admin,
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
                alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#crear_error_alert")).show();
            break;

            case 5:
                alerta_mensaje("success", "Evento actualizado con exito", $("#lista_error_alert")).show();
                limpiar();
            break;

            default:
                alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#crear_error_alert")).show();
            break;
        }
        listar_evento();
        limpiar();
        $("#actualizar_evento").addClass("oculto");
        $("#lista_eventos").removeClass("oculto");
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#crear_error_alert")).show();
    });
    hideLoader();

}
/** levantar la modal para anunciar una condicion de eliminar **/
function pre_eliminar(id,titulo,fecha){
    console.log(id+titulo+fecha);

    $("#titulo_evento").html(titulo);
    $("#fecha_evento").html(fecha);

    id_registro_elimanar = id;

}
/** Eliminar registro, evento de la base de datos **/
function eliminar_evento(id) {
    console.log(id);

    var settings = {
        "async": true,
        "crossDomain": true,
        "type": "POST",
        "dataType": "json",
        "url": url_admin,
        "data": {
            "id_registro_eliminar" : id,
        },
        "beforeSend" : function() {
            showLoader();        
        },
        "cache": false,
    };
    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {
        var result = data;

        switch (result) {
            case 1:
                alerta_mensaje("success", "Evento eliminado", $("#lista_error_alert")).show();
                listar_evento();
                $("#myModal").modal('hide');
            break;

            case 3:
                alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#lista_error_alert")).show();
            break;

            default:
                alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#lista_error_alert")).show();
            break;
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        alerta_mensaje("danger", "Ha ocurrido un ERROR", $("#lista_error_alert")).show();
    });
    hideLoader();
}