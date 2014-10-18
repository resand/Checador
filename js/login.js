$(document).ready(function(){
		$('#usuario').focus();
		$('#iniciar').click(function(){
			var username = $('#usuario'); 
			var password = $('#contrasena'); 
			var login_result = $('.error'); 

			if(username.val() == ''){ 
				username.focus(); 
				login_result.html('<span class="error">Inserte un nombre de usuario</span>');
				return false;
			}
			if(password.val() == ''){
				password.focus();
				login_result.html('<span class="error">Inserte una contraseña</span>');
				return false;
			}
			if(username.val() != '' && password.val() != ''){
				var UrlToPass = 'action=login&username='+username.val()+'&password='+password.val();
				$.ajax({ 
				type : 'POST',
				data : UrlToPass,
				url  : 'php/verificar.php',
				success: function(responseText){
					if(responseText == 0){
						login_result.html('<span class="error">Usuario y/o Contraseña incorrectos.</span>');
						ajaxindicatorstop();
					}else if(responseText ==1){
							window.location = 'sisepro.php';
					}else if(responseText ==2){
							window.location = 'proyectos.php';
					}else if(responseText ==3){
							window.location = 'proyectos_tareas.php';
					}else{
						ajaxindicatorstop();
						alert("Hubo un problema al iniciar sesión, intente más tarde.");
					}
				}
				});
			}
			return false;
		});
	});