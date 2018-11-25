$(function(){
	console.log(url);

	listar_eventos();
});

function listar_eventos(page){

	page = page || 1;
	console.log(page);

	

	var settings = {
        "async": true,
        "crossDomain": true,
        "type": "GET",
        "dataType": "json",
        "url": url+'eventoControllers.php',
        "cache": false,
        "data": {
            "page": page
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
                pag += '<i class="fa fa-chevron-left" aria-hidden="true" onclick="listar_eventos('+paginator.getPrevious()+');">'+paginator.getPrevious()+'</i>';
                pag += '<i class="fa fa-circle-o" aria-hidden="true" onclick="listar_eventos('+paginator.getPrevious()+');">'+paginator.getPrevious()+'</i>';
            }
           
            pag += ' <i class="fa fa-circle" aria-hidden="true" onclick="listar_eventos('+ paginator.getPage() +');">'+ paginator.getPage() +'</i>';
        
            if(paginator.hasNext())
            {
                pag += '<i class="fa fa-circle-o" aria-hidden="true" onclick="listar_eventos('+paginator.getNext()+');">'+paginator.getNext()+'</i>';
                pag += '<i class="fa fa-chevron-right" aria-hidden="true" onclick="listar_eventos('+ paginator.getNext() +');">'+ paginator.getNext() +'</i>';
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


	var noti = "";

	noti += '<div id="about" class="about-area area-padding">';
	noti += '<div class="container">';
		noti += '<div class="row">';
    		/*<!-- single-well start-->*/
			noti += '<div class="col-md-6 col-sm-6 col-xs-12">';
	          	noti += '<div class="well-left">';
					noti += '<div class="single-well">';
	              		noti += '<a href="#">';
							noti += '<img src="gallery-img1.jpg" alt="">';
						noti += '</a>';
	            	noti += '</div>';
	          	noti += '</div>';
	        noti += '</div>';
    		/*<!-- single-well end-->*/
	        noti += '<div class="col-md-6 col-sm-6 col-xs-12">';
				noti += '<div class="well-middle">';
	            	noti += '<div class="single-well">';
						noti += '<a>';
	                		noti += '<h4 class="sec-head">project Maintenance</h4>';
	              		noti += '</a>';
	              		noti += '<p class="text-justify">Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure. achel Chu, de Nueva York, viaja a la ciudad natal de su novio Nick en Singapur para la boda de su mejor amigo en donde pronto descubre su secreto: Nick es de una familia increíblemente adinerada y posiblemente sea el soltero más codiciado de Asia.</p>';
	              	noti += '</div>';
	          	noti += '</div>';
	        noti += '</div>';
	        /*<!-- End col-->*/
  		noti += '</div>';
	noti += '</div>';
	noti += '</div>';

	$("#noticia").append(noti);

}