$(document).ready(function(){
	
	$("#alertaErros").hide();
	$(".boton_envio").click(function() {
		$("#alertaErros").html("");
		$("#alertaErros").hide();
		var tipo =$('input[name=tipo]:checked').val();
		var nome = $("#nome").val();
		var	apelidos = $("#apelidos").val();
		var email =  $("#email").val();
		var profesion =  $("#profesion").val(); 
		var concello =  $("#concello").val();  
		var	validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	
		alert(tipo+" "+nome+" "+apelidos+" "+ email +" "+  profesion +" "+ concello+" " );
		
		//Validación 
		var mensaxevalidacion="";
		if (!(tipo=="0" || tipo=="1")){
			mensaxevalidacion =mensaxevalidacion+"<li> <b> Error!!</b> Debes indicar se asinas como <b> persoa </b> ou <b> entidade xurídica</b> </li>";
		} 
		if (nome === "") {
			mensaxevalidacion =mensaxevalidacion+"<li> <b> Error!!</b> O campo nome é obrigatorio </li>";
 		} 
		alert("merda");
		if (apelidos === "") {
			mensaxevalidacion =mensaxevalidacion+"<li> <b> Error!!</b> O campo apelidos é obrigatorio </li>";
		}
		if (email === "") {
			mensaxevalidacion =mensaxevalidacion+"<li> <b> Error!!</b> O campo email é obrigatorio </li>";
		}
		 
		if (mensaxevalidacion!=""){
			$("#alertaErros").html(mensaxevalidacion);
			$("#alertaErros").show();
			return false;
		}
 		//
		$.ajax({
	    		type: "POST",
	    		url: "procesarformulario.php",
				data: "tipo="+tipo+"&nome="+nome+"&apelidos="+apelidos+"&email="+email+"&profesion="+profesion+"&concello="+concello,
	    		success: function() {
					alert("Asinado");
	    		},
				error: function() {
					alert("error");				
				}
	   		});

	});
});