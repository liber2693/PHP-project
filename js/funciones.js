
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

//formatear fecha (2018-05-11 19:25:52) => (11-may-2018 07:25p.m.)
function fn_date_format(date, ocultarHora){

    if(!date) return "";

    //meses en español
    var months = ["ene", "feb", "mar", "abr", "may", "jun", "jul", "ago", "sep", "oct", "nov", "dic"];

    //separar fecha y hora
    var splitDate = date.split(" ");
    var fecha = splitDate[0];
    var hora = splitDate[1];

    //convertir fecha
    var splitFecha = fecha.split("-");
    splitFecha.reverse();
    splitFecha[1] = months[parseInt(splitFecha[1]) - 1];

    //convertir hora
    var ampm = "a.m.";
    var splitHora = hora.split(":");

    splitHora[0] = parseInt(splitHora[0]);

    //eliminar segundos
    splitHora.pop();

    //am o pm
    if(splitHora[0] > 11)
    {
        ampm = "p.m.";
        splitHora[0] = splitHora[0] - 12;
    }

    //convertir a 12 horas
    if(splitHora[0] == 0)
    {
        splitHora[0] = "12";
    }

    //añadir "0" si es menor a 10
    if(parseInt(splitHora[0]) < 10)
    {
        splitHora[0] = "0" + splitHora[0];

    }

    //unir y retornar
    if(ocultarHora)
    {
        return splitFecha.join("-");
    }
    return splitFecha.join("-") + " " + splitHora.join(":") + "" +ampm;
}

function parrafo(text,operacion){

    /** @type {[1]} [le quita los saltos de linea y le agrega <br />] **/
    if (operacion == 1) 
    {
        text = text.replace(/\r?\n/g, "<br/>");
    }

    /** @type {[2]} [le quita los <br /> le agrega los saltos de linea] **/
    if (operacion == 2) 
    {
        text = text.split("<br/>").join("\n");
    }
    
    return text;
    
}

function comillas(str){

    str = str.split("'").join("''");

    return "'"+str+"'";
}
