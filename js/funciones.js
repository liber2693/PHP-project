
var url_pagina = 'controllers/';
var url_admin = '../../controllers/eventoAdminControllers.php';
var url_imagen = 'img/eventos/';


function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}

//mostrar el loader
function showLoader(){
    $("#loader").fadeIn(500);
    $(".loader").fadeIn();
}
  
//ocultar el loader
function hideLoader(){
    $("#loader").fadeOut(500);
    $(".loader").fadeOut();
}

//mensaje alerta
function alerta_mensaje(tipo, texto, target){

    var temp = '<div class="alert alert-{{tipo}}  text-center"><strong>{{texto}}</strong></div>';

    temp = temp.replace("{{tipo}}", tipo);
    temp = temp.replace("{{texto}}", texto);
    var $temp = $(temp);

    $temp.fadeIn();
    setTimeout(function() {
        $temp.fadeOut(4000);
    },4000);

    target.html($temp);

    return $temp;
}

/**paginador **/
function Paginator(total, page, limit){

    limit = limit || 10;

    var pages = Math.ceil(total / limit);
    
    /**total de paginas */
    this.getPages = function(){
        return pages;
    };

    /** pagina actual */
    this.getPage = function(){
        return page;
    }

    /** pagina anterior */
    this.getPrevious = function(){
        if(page == 1){
            return page;
        }

        return page - 1;
    };

    /** pagina siguente */
    this.getNext = function(){
        if(page == pages){
            return page;
        }

        return page + 1;
    };

    /** jose **/
    /** pagina 2 siguente */
    this.getproxima2 = function(){
        if(page == pages){
            return page;
        }

        return page + 2;
    };

    /** indica si la pagina actual es la primera */
    this.isFirst = function(){
        return page == 1;
    };

    /** indica si la pagina actual es la ultima */
    this.isLast = function(){
        return page == pages;
    };

    /** indica si hay pagina anterior */
    this.hasPrev = function(){
        return !this.isFirst();
    };

    /** indica si hay pagina siguiente */
    this.hasNext = function(){
        return !this.isLast();
    };
}

function cambia_fondo(fila,status){
    if(status == 1){
        fila.style.backgroundColor = "#5f5f5f29";
    }
    else{
        fila.style.backgroundColor = "#ffffff";   
    }
}

