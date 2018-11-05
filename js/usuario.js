$(document).ready(function() {
	$("#modal_user").click(function(e){
		e.preventDefault();
		$('#user').val("");
		$('#password').val("");
		$('#enviar').html('Login IN');
	})

	$('#enviar').click(function(e){
		e.preventDefault();
		var url = "controllers/sessionController.php";
		var usuario = $('#user').val();
		//var password = btoa($('#password').val());
		var password = $('#password').val();

		//console.log(usuario+' '+password);
		if (usuario.length <= 0) 
		{
    		$('#error').fadeIn();
				setTimeout(function() {
					$('#error').fadeOut(4000);
				},4000);
    		e.preventDefault();
    		return false;

    	}
    	else
    	{
			setTimeout(function() {
				$('#error').fadeOut(4000);
			},4000);
    	}
    	if (password.length <= 0) 
    	{
    		$('#error1').fadeIn();
				setTimeout(function() {
					$('#error1').fadeOut(4000);
				},4000);
    		e.preventDefault();
    		return false;
    		
    	}
    	else
    	{
			setTimeout(function() {
				$('#error1').fadeOut(4000);
			},4000);
    	}
		//alert(password);

    	$.ajax({
	    	type: 'POST',
	    	url: url,
	    	//data: $("#login").serialize(),
	    	data: {
	    		"usuario": usuario,
	    		"password": password,
	    	},
    		beforeSend: function(){
	    		$('#enviar').html('Connecting..');
            },
			success: function(data){
	        	if(data == 1){
	    			$("#error2").fadeIn();
						setTimeout(function() {
								$('#error2').fadeOut(4000);
						},4000);
	    			e.preventDefault();
	    			$('#enviar').html('Login IN');
	    		}
	           	if (data == 2) {
	           		$("#error3").fadeIn();setTimeout(function() {
										$('#error3').fadeOut(4000);
								},4000);
	    			e.preventDefault();
	    			$('#enviar').html('Login IN');
	           	}
	           	if (data == 3) {
	           		var url = "views/admin/inicAmin.php";
					$(location).attr('href',url);
					console.log('login con EXITO');
	           	}
	    	}
	    });
	});
});

