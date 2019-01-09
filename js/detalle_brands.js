$(function(){
	console.log("empresas");

	detalle_empresa(1);

	$("#menu_empresa div").on("click",function(e){
		
		//tomar el valor del atributo
		var id = e.currentTarget.attributes.tabindex.nodeValue;
		
		detalle_empresa(id)

	});

});


/** brands **/
function detalle_empresa(option){
	
	var settings = {
        "async": true,
        "crossDomain": true,
        "type": "GET",
        "dataType": "json",
        "url": "js/datos_empresa.json",
        "cache": false,
    };

    $.ajax(settings)
    .done(function(data, textStatus, jqXHR){
    	
    	data.forEach(function(d,i,a){
			if (d.id == option) {

				//titulo empresa
				$("#titulo_empresa").html(d.titulo_empresa)

				$(".carousel-indicators").find("li").remove();
				$(".carousel-inner").find("div").remove();

				var i = 0;
				d.maquina.forEach(function(d1,i1,a1){
					i++;
					
					var indicadores = '';
					if(i == 1)
					{
						indicadores += '<li data-target="#demo" data-slide-to="'+i+'" class="active"></li>';
					}
					else{
						indicadores += '<li data-target="#demo" data-slide-to="'+i+'"></li>';
					}
					$(".carousel-indicators").append(indicadores);

					var carusel = '';
					if(i == 1)
					{
						carusel += '<div class="carousel-item text-center active">';
					}
					else{
						carusel += '<div class="carousel-item text-center">';	
					}
					carusel += '<h5>modelo: '+d1.modelo+'</h5>';
					carusel += '<img src="'+d1.img+'" data-toggle="modal" onclick="modal(\''+d1.img+'\')" data-target="#myModal_img" alt="MaschinenWerk 2000,C.A">';
					carusel += '</div>';

					$(".carousel-inner").append(carusel);
				})
				//archivos
				$("#tabla_archivos").find("tr").not(":first").remove();
				
				if (d.archivo == '')
				{
					var fila = '<tr><td colspan="2"> NO EXISTEN ARCHIVOS</tr>';
					$("#tabla_archivos").append(fila);
				}
				else
				{
					d.archivo.forEach(function(d2,i2,a2){
						//console.log(d2)

						var fila = '';

						fila += '<tr>';
						fila += '<td>'+d2.modelo+'</td>';
						fila += '<td><a href="'+d2.ruta+'" target="_blank">'+d2.nombre_archivo+' <img class="iconpdf" src="img/icon-pdf.png"></a></td>';
						fila += '</tr>';

						$("#tabla_archivos").append(fila);
					})
				}
			}
    	})

    })
    .fail(function(jqXHR, textStatus, errorThrown){
    	console.log("fallo el envio")
    });

    /*$.getJSON("js/datos_empresa.json", function(datos) {
            alert("Dato: " + datos["titulo_empresa"]);
            
        });*/

   

    /*$.get('js/datos_empresa.json', function (response) {
    	console.log("hola: "+response)
    });*/

    /*var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
	    var myObj = JSON.parse(this.responseText);
	    console.log(myObj)
	  }
	};
	xmlhttp.open("GET", "js/datos_empresa.json", true);
	xmlhttp.send();*/

} 
//levantar modal con la imagen
function modal(img){

	$("#imagen").attr("src",img);

}