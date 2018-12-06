$(function(){
	console.log(url_pagina);

	listar_eventos();

	$("#text_evento").on("keypress", function(e) {

		tecla = (document.all) ? e.keyCode : e.which;

		if(tecla == 13)
		{
			listar_eventos();
		}
	});

	$("#buscar_evento").on("click", function(e) {
		listar_eventos();
	});

});

function listar_eventos(page){

	page = page || 1;

	var text = $("#text_evento").val().trim();
	console.log(page);

		

	var settings = {
        "async": true,
        "crossDomain": true,
        "type": "GET",
        "dataType": "json",
        "url": url_pagina+'eventoControllers.php',
        "cache": false,
        "data": {
            "page": page,
            "text": text,
        }
    }

    $("#eventos_lista").find("div").remove();
    $("#paginador_event").find("i").remove();

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {
    	paginator = new Paginator(data.total, page, 6);

    	data.lista.forEach(function(data, indice, array) {
	
    		var div_lista = '';
		    
				div_lista += '<div class="col-md-6 col-sm-12">';
			        div_lista += '<div class="media wow fadeInUp" data-wow-delay="0.6s">';
			          	div_lista += '<div class="media-object pull-left">';
				            div_lista += '<img src="'+url_imagen+data.nombre_imagen+'" class="img-responsive" alt="Food Menu">';
				            div_lista += '<span class="menu-price" onclick="noti_evento(\''+url_imagen+data.nombre_imagen+'\',\''+data.titulo+'\',\''+data.fecha_creacion+'\',\''+parrafo(data.contenido)+'\')">Ver mas +</span>';
			          	div_lista += '</div>';
			          	div_lista += '<div class="media-body">';
				            div_lista += '<h3 class="media-heading">'+data.titulo+'</h3>';
				            div_lista += '<p>'+data.fecha_creacion+'</p>';
				        div_lista += '</div>';
			        div_lista += '</div>';
				div_lista += '</div>';
			
			$("#eventos_lista").append(div_lista);


    	})
    	console.log(data.total)

    	if(paginator.getPages() > 1)
        {
            var pag = '';

         
            if(paginator.hasPrev())
            {
                pag += '<i class="fa fa-chevron-left" aria-hidden="true" onclick="listar_eventos('+paginator.getPrevious()+');">&nbsp;</i>';
                pag += '<i class="fa fa-circle-o" aria-hidden="true" onclick="listar_eventos('+paginator.getPrevious()+');">&nbsp;</i>';
            }
           
            pag += ' <i class="fa fa-circle" aria-hidden="true" onclick="listar_eventos('+ paginator.getPage() +');">&nbsp;</i>';
        
            if(paginator.hasNext())
            {
                pag += '<i class="fa fa-circle-o" aria-hidden="true" onclick="listar_eventos('+paginator.getNext()+');">&nbsp;</i>';
                pag += '<i class="fa fa-chevron-right" aria-hidden="true" onclick="listar_eventos('+ paginator.getNext() +');"></i>';
            }
            

            $("#paginador_event").append(pag);   
        }

    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("ERROR");
    });


}
/** funcion para ver el detalle del evento**/
function noti_evento(imagen,titulo,fecha,contenido){

	console.log("evento completo");

	$("#eventos_lista").find("div").remove();
    $("#paginador_event").find("i").remove();
	$("#noticia").find("div").remove();

	var noti = "";

	noti += '<div id="about" class="about-area area-padding">';
	noti += '<div class="container">';
		noti += '<div class="row">';
    		/*<!-- single-well start-->*/
			noti += '<div class="col-md-6 col-sm-6 col-xs-12">';
	          	noti += '<div class="well-left">';
					noti += '<div class="single-well">';
	              		noti += '<a>';
							noti += '<img src="'+imagen+'" alt="webpage_bell">';
						noti += '</a>';
	            	noti += '</div>';
	          	noti += '</div>';
	        noti += '</div>';
    		/*<!-- single-well end-->*/
	        noti += '<div class="col-md-6 col-sm-6 col-xs-12">';
				noti += '<div class="well-middle">';
	            	noti += '<div class="single-well">';
						noti += '<a>';
	                		noti += '<h4 class="sec-head">'+titulo+'</h4>';
	              		noti += '</a>';
	              		noti += '<p>'+fecha+'</p>';
	              		noti += '<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+contenido+'</p>';
	              	noti += '</div>';
	          	noti += '</div>';
	        noti += '</div>';
	        /*<!-- End col-->*/
  		noti += '</div>';
  		noti += '<button type="button" id="volver" onclick="volver()" class="btn btn-boton"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button>';
	noti += '</div>';
	noti += '</div>';

	$("#noticia").append(noti);

}

/** volver a la lista de eventos **/
function volver(){
	console.log("volver");

	$("#noticia").find("div").remove();
	listar_eventos();


}