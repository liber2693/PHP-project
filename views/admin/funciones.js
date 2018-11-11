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

    /*$temp.on("show",function(){
        $(this).fadeIn().delay(3000).fadeOut("slow", function(){
            this.remove();
        }).delay(3000);
    });*/

    target.html($temp);

    return $temp;
}