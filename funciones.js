$(document).ready(function(){
	
	$("#alertaErros").hide();
	$('#infoasinado').hide();
	$(".boton_envio").click(function(e) {
		
		e.stopPropagation();
		
		$("#alertaErros").html("");
		$("#alertaErros").hide();
		var tipo =$('input[name=tipo]:checked').val();
		var nome = $("#nome").val();
		var	apelidos = $("#apelidos").val();
		var email =  $("#email").val();
		var profesion =  $("#profesion").val(); 
		var concello =  $("#concello").val();  
		var	validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	
		
		//Validación 
		var mensaxevalidacion="";
		if (!(tipo=="0" || tipo=="1")){
			mensaxevalidacion =mensaxevalidacion+"<li> <b> Error!!</b> Debes indicar se asinas como <b> persoa </b> ou <b> entidade xurídica</b> </li>";
			$("#div_id_asina_como").addClass("has-error");
		}
		
		if (nome === "") {
			mensaxevalidacion =mensaxevalidacion+"<li> <b> Error!!</b> O campo nome é obrigatorio </li>";
			$("#divnome2").addClass("has-error");
 		} 
		
		/*if (apelidos === "") {
			mensaxevalidacion =mensaxevalidacion+"<li> <b> Error!!</b> O campo apelidos é obrigatorio </li>";
			$("#div_apelidos").addClass("has-error");
		}*/
		if (email === "") {
			mensaxevalidacion =mensaxevalidacion+"<li> <b> Error!!</b> O campo email é obrigatorio </li>";
			$("#div_id_email").addClass("has-error");
		}
		 
		if (mensaxevalidacion!=""){
			$("#alertaErros").html(mensaxevalidacion);
			$("#alertaErros").show();
			return false;
		}
		
		//eliminar clase de erros nos inputsç
		$("#div_id_asina_como").removeClass("has-error");
		$("#divnome2").removeClass("has-error");
		$("#div_id_email").removeClass("has-error");

		
 		//
		$.ajax({
	    		type: "POST",
	    		url: "procesarformulario.php",
				data: "tipo="+tipo+"&nome="+nome+"&apelidos="+apelidos+"&email="+email+"&profesion="+profesion+"&concello="+concello,
	    		success: function() {
					$('#formularioasinar').hide();
					$('#infoasinado').show();
					
	    		},
				error: function() {
					$("#alertaErros").html("Error!! Volve intentar asinar houbo un erro na comunicación co servidor");
					$("#alertaErros").show();		
				}
	   		});

	});
});