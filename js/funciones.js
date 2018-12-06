
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

function parrafo(text,operacion){

    /** @type {[1]} [le quita los saltos de linea y le agrega <br />] **/
    /*if (operacion == 1) 
    {
        var string = text.replace(/\n/g, "<br/>");
    }*/

    /** @type {[2]} [le quita los <br /> le agrega los saltos de linea] **/
    /*if (operacion == 2) 
    {
        var string = text.replace("<br/>", /\n/g);
    }
console.log(string);

    return string;*/
    //
    //
    text = text.replace(/\n/g, "<br/>");
    console.log(text)
    return text;
 
}

function parrafo1(text,operacion){

    text = text.split("<br/>").join("\n");
    console.log(text)
    return text;
 
}

/*var textFormat = function(text){
  text = text.replace(/\r?\n/g, "<br/>");
  return text;
}*/

/*var questionFormat = function(question){
  myText = myText.replace(question, "<strong>" + question + "</strong>");
  console.log(myText);
  return myText;
}

var myText = document.getElementById("jr-origin").innerHTML;
var myTextTarget = document.getElementById("jr-target");
var newArray = myText.match(/¿[a-zA-Z0-9 áéíóúñÁÉÍÓÚÑ]*\?/g)
newArray.forEach(questionFormat)
myTextTarget.innerHTML = textFormat(myText);*/