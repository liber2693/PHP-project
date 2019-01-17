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
	//console.log(page);

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
    $("#paginador_event").find("ul").remove();
    $("#noticia").find("div").remove();

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {
    	paginator = new Paginator(data.total, page, 6);

    	data.lista.forEach(function(data, indice, array) {
	
    		var div_lista = '';
		    
				div_lista += '<div class="col-md-6 col-sm-12">';
			        div_lista += '<div class="media wow fadeInUp" data-wow-delay="0.6s">';
			          	div_lista += '<div class="media-object pull-left">';
				            div_lista += '<img src="'+url_imagen+data.nombre_imagen+'" class="img-responsive" alt="Food Menu">';
				            div_lista += '<span class="menu-price" onclick="noti_evento('+data.id+')">Ver mas +</span>';
			          	div_lista += '</div>';
			          	div_lista += '<div class="media-body">';
				            div_lista += '<h3 class="media-heading">'+data.titulo+'</h3>';
				            div_lista += '<p>'+fn_date_format(data.fecha_creacion,true)+'</p>';
				        div_lista += '</div>';
			        div_lista += '</div>';
				div_lista += '</div>';
			
			$("#eventos_lista").append(div_lista);


    	})
    	//console.log(data.total)

    	if(paginator.getPages() > 1)
        {
            var pag = '';
            pag += '<ul>';
            	if(paginator.hasPrev())
            	{
					pag += '<li><button class="boton_pag" onclick="listar_eventos('+paginator.getPrevious()+');"><i class="fa fa-chevron-left" aria-hidden="true"></i></button></li>';
					pag += '<li><button class="boton_pag" onclick="listar_eventos('+paginator.getPrevious()+');">'+paginator.getPrevious()+'</button></li>';
				}
				pag += '<li><button class="boton_pag" onclick="listar_eventos('+ paginator.getPage() +');">'+ paginator.getPage() +'</button></li>';
				if(paginator.hasNext())
            	{
					pag += '<li><button class="boton_pag" onclick="listar_eventos('+ paginator.getNext() +');">'+ paginator.getNext() +'</button></li>';
					pag += '<li><button class="boton_pag" onclick="listar_eventos('+ paginator.getNext() +');"><i class="fa fa-chevron-right" aria-hidden="true"></i></button></li>';
				}
			pag += '</ul>';

            $("#paginador_event").append(pag);   
        }

    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("ERROR");
    });


}
/** funcion para ver el detalle del evento**/
function noti_evento(id){

	//console.log(id);

	$("#eventos_lista").find("div").remove();
    $("#paginador_event").find("ul").remove();
	$("#noticia").find("div").remove();

	var settings = {
        "async": true,
        "crossDomain": true,
        "type": "GET",
        "dataType": "json",
        "url": url_pagina+'eventoControllers.php',
        "cache": false,
        "data": {
            "id_evento": id,
        },
    }

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {

    	var noti = "";

		noti += '<div id="about" class="about-area area-padding">';
		noti += '<div class="container">';
			noti += '<div class="row">';
	    		/*<!-- single-well start-->*/
				noti += '<div class="col-md-12 col-sm-12 col-xs-12">';
		          	noti += '<div class="well-left">';
						noti += '<div class="single-well">';
		              		noti += '<p>';
								noti += '<span class="capital"><img src="'+url_imagen+data.nombre_imagen+'" alt="webpage_bell" class="evento"><span>';
								noti += '<h4 class="sec-head">'+data.titulo+'</h4>';
								noti += '<a>'+fn_date_format(data.fecha_creacion,true)+'</a>';
								noti += '<a class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+data.contenido+'</a>';
							noti += '</p>';
		            	noti += '</div>';
		          	noti += '</div>';
		        noti += '</div>';
	    		/*<!-- single-well end-->*/
		        /*noti += '<div class="col-md-6 col-sm-6 col-xs-12">';
					noti += '<div class="well-middle">';
		            	noti += '<div class="single-well">';
							noti += '<a>';
		                		noti += '<h4 class="sec-head">'+data.titulo+'</h4>';
		              		noti += '</a>';
		              		noti += '<p>'+fn_date_format(data.fecha_creacion,true)+'</p>';
		              		noti += '<p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+data.contenido+'</p>';
		              	noti += '</div>';
		          	noti += '</div>';
		        noti += '</div>';*/
		        /*<!-- End col-->*/
	  		noti += '</div>';
	  		noti += '<button type="button" id="volver" onclick="volver()" class="btn btn-boton"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button>';
		noti += '</div>';
		noti += '</div>';

		$("#noticia").append(noti);

    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("ERROR");
    });
	
    

}

/** volver a la lista de eventos **/
function volver(){
	console.log("volver");

	$("#noticia").find("div").remove();
	listar_eventos();


}
