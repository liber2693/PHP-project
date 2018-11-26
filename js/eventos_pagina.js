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
            "text": "'"+text+"'",
        }
    }

    $("#eventos_lista").find("div").remove();
    $("#paginador_event").find("i").remove();

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR) {

    	paginator = new Paginator(data.total, page);

    	data.lista.forEach(function(data, indice, array) {

    		var div_lista = '';
		    
				div_lista += '<div class="col-md-6 col-sm-12">';
			        div_lista += '<div class="media wow fadeInUp" data-wow-delay="0.6s">';
			          	div_lista += '<div class="media-object pull-left">';
				            div_lista += '<img src="'+data.imagen+'" class="img-responsive" alt="Food Menu">';
				            div_lista += '<span class="menu-price" onclick="noti_evento()">Ver mas +</span>';
			          	div_lista += '</div>';
			          	div_lista += '<div class="media-body">';
				            div_lista += '<h3 class="media-heading">'+data.titulo+'</h3>';
				            div_lista += '<p>'+data.fecha_cracion+'</p>';
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
function noti_evento(){

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
	              		noti += '<a href="#">';
							noti += '<img src="img/eventos/1aca95a1d88c1d7c6e80db4bba904710.jpg" alt="">';
						noti += '</a>';
	            	noti += '</div>';
	          	noti += '</div>';
	        noti += '</div>';
    		/*<!-- single-well end-->*/
	        noti += '<div class="col-md-6 col-sm-6 col-xs-12">';
				noti += '<div class="well-middle">';
	            	noti += '<div class="single-well">';
						noti += '<a>';
	                		noti += '<h4 class="sec-head">¿Qué es MaschinenWerk 2000,C.A?</h4>';
	              		noti += '</a>';
	              		noti += '<p>25-Nov-2018</p>';
	              		noti += '<p class="text-justify">Nos dedicamos a brindar apoyo integral a nuestros clientes en todas sus necesidades de Sistemas de Inspección, Verificación de Peso, Tecnología de Códigos de Barras, Marcaje de Productos con Suministros Asociados y Sistemas de Automatización para las Industrias de Alimentos, Farmacéuticas y Textiles, así como Desempolvadores, Blísteadoras, Tableteadoras para el Sector Farmacéutico. Para el Sistema de Inspección y Control de Calidad en línea contamos con nuestra representada exclusiva Inglesa Loma Systems, con aplicaciones para detección de metales o partículas contaminantes, de igual manera verificación de peso en línea con sus respectivos sistemas de rechazos. Para el caso de codificación e impresión a tinta continua, nuestra representada exclusiva Linx Printing technologies ofrece equipos de alta calidad, robustos y confiables para todo tipo de aplicaciones industriales e insumos o consumibles garantizados.</p>';
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