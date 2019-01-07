$(function(){
	//capturar la imagen
	var imagen = document.getElementById('imagen_producto');
   
	//ejecutar el eventon del DOM      	
	imagen.addEventListener("mousemove", function(e) {

		var move = 12;
		var imgBounds = document.querySelector('#imagen_producto').getBoundingClientRect();

		var centerX = imgBounds.width/2;
		var centerY = imgBounds.height/2;
	      		
		var posX = 0;
		var posY = 0;

      var x = e.clientX - imgBounds.x;
      var y = e.clientY - imgBounds.y; 
      

      var px = 100 * (x - centerX) / centerX;
      var py = 100 * (y - centerY) / centerY;

      posX = px * move * -1 / 100;
      posY = py * move * -1 / 100;

      //console.log(x+' '+y);
      imagen.style.left = posX+"px";
      imagen.style.top = posY+"px";

      //this.css({""})
      //this.style.backgroundPosition = "200px 200px";
   });

	imagen.addEventListener("mouseout", function(e){
		imagen.style.left = "0px";
      imagen.style.top = "0px";
	});
   
   
});