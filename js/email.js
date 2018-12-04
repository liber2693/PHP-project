$(document).ready(function(){
    console.log("archivo de envio de correo");

    Home.enviar.on("click",function(){
        envio_correo();
    });
});
/** envio correo**/
emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

var Home = Home || {};

Home.email = $("#email");
Home.asunto = $("#asunto");
Home.marca = $("#marca");
Home.modelo = $("#modelo");
Home.contenido = $("#contenido");
Home.serial = $("#serial");

Home.enviar = $("#enviar");

Home.validation1 = $("#validation1");
Home.validation2 = $("#validation2");
Home.validation3 = $("#validation3");
Home.validation4 = $("#validation4");
Home.validation5 = $("#validation5");


Home.validation = $(".validation");

Home.respuesta = $("#respuesta");

function envio_correo(){

    var email = Home.email.val().trim();
    var asunto = Home.asunto.val().trim();
    var marca = Home.marca.val().trim();
    var modelo = Home.modelo.val().trim();
    var serial = Home.serial.val().trim();
    var contenido = Home.contenido.val().trim();

    Home.validation.css({display: "none"});
    Home.respuesta.empty();

    if(email.indexOf('@', 0) == -1 || email.indexOf('.', 0) == -1 || email <= 0){
        Home.validation1.css({display: "block"});
        Home.validation1.html("Debe ingresar el email, ejemplo: example@example.com");
        return false;
    }

    if(asunto <= 0){
        Home.validation2.css({display: "block"});
        Home.validation2.html("Debe ingresar el Asunto del mensaje");
        return false;
    }

    if(marca <= 0){
        Home.validation3.css({display: "block"});
        Home.validation3.html("Debe ingresar la Marca");
        return false;
    }

    if(modelo <= 0){
        Home.validation4.css({display: "block"});
        Home.validation4.html("Debe ingresar el Modelo");
        return false;
    }

    if(contenido <= 4){
        Home.validation5.css({display: "block"});
        Home.validation5.html("Debe ingresar el Contenido del mensaje");
        return false;
    }

    var settings = {
        "async": true,
        "crossDomain": true,
        "type": "GET",
        "dataType": "JSON",
        "url": url_pagina+'emailControllers.php',
        "cache": false,
        "data": {
            "email": email,
            "asunto": asunto,
            "marca": marca,
            "modelo": modelo,
            "serial": serial,
            "contenido": contenido,
        },
        "beforeSend" : function() {
            Home.enviar.attr("disabled",true);
            Home.enviar.html("Enviando...");
        },
    }

    $.ajax(settings).done(function(response){

        console.log(response);
        
        Home.enviar.attr("disabled",false);
        Home.enviar.html("Enviar Mensaje");

        var result = response;

        if(result == 1){
            Home.respuesta.html("mensaje enviado");
            Home.respuesta.css({color: "#0070ba"});
        }
        else{
            Home.respuesta.html("mensaje no envio");
            Home.respuesta.css({color: "#f44336"});
        }

    })
    .fail(function(jqXHR, textStatus, errorThrown){
        Home.respuesta.html("ERROR al enviar el mensaje");
        Home.respuesta.css({color: "#f44336"});
        Home.enviar.attr("disabled",false);
        Home.enviar.html("Enviar Mensaje");
    });
}