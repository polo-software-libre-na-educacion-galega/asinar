<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Funcions propias  ---------->
<script src="funciones.js"></script>

</head>
<body>

<div class="container">    
            
    <div id="panelform" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Asinar "Polo software libre na educación galega"</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="https://polo-software-libre-na-educacion-galega.github.io/Manifesto/">Manifesto</a></div>
            </div>  
			<div id="alertaErros" class="alert alert-danger" style="margin-left: 10px; margin-top: 10px;margin-right: 10px;">
				<strong>Error!</strong> Indicates a successful or positive action.
			</div>
			
            <div class="panel-body" >
                <form method="post" action=".">
                            

                    <form id="formularioasinar"  class="form-horizontal" method="post" >
                          
                        <div id="div_id_asina_como" class="form-group required">
                            <label for="id_As"  class="control-label col-md-4  requiredField">Asinas como:<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                <label class="radio-inline"> <input type="radio" name="tipo" id="id_As_1" value="0"  style="margin-bottom: 10px">Persoa física </label>
                                <label class="radio-inline"> <input type="radio" name="tipo" id="id_As_2" value="1"  style="margin-bottom: 10px">Entidade xurídica</label>
                            </div>
                        </div>
                        
						<div id="divnome" class="form-group required">
                            <label for="id_nome" class="control-label col-md-4  requiredField">Nome<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "> 
                                <input id="nome" class="input-md textinput textInput form-control"  name="nome" placeholder="O teu nome" style="margin-bottom: 10px" type="text" 
                            </div>
                        </div>
						
						
						<div id="div_apelidos" class="form-group required">
                            <label for="id_apelidos" class="control-label col-md-4  requiredField">Apelidos  </label>
                            <div class="controls col-md-8 "> 
                                <input class="input-md textinput textInput form-control" id="apelidos" name="apelidos" placeholder="Os teus apelidos" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
						
                        <div id="div_id_email" class="form-group required">
                            <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md emailinput form-control" id="email" name="email" placeholder="O teu correo electrónico" style="margin-bottom: 10px" type="email" />
                            </div>     
                        </div>
						
                        
                        
            
                        <div id="div_id_profesion" class="form-group required">
                             <label for="id_profesion" class="control-label col-md-4  requiredField"> Profesión  </span> </label>
                             <div class="controls col-md-8 ">
                                 <input class="input-md textinput textInput form-control" id="profesion" name="profesion" placeholder="A túa profesión" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div> 
                        <div id="div_id_location" class="form-group required">
                            <label for="id_location" class="control-label col-md-4  requiredField"> Concello<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md textinput textInput form-control" id="concello" name="concello" placeholder="O teu concello" style="margin-bottom: 10px" type="text" />
                            </div> 
                        </div>
                        
                        <div class="form-group"> 
                            <div class="aab controls col-md-6 "></div>
                            <div class="controls col-md-6 ">
                                <input type="submit" name="asinar" value="Asinar" class="btn btn-primary btn btn-primary boton_envio" id="submit-id-signup" />
                            </div>
                        </div> 
                            
                    </form>

                </form>
            </div>
        </div>
    </div> 
	
	
</div>
</div>  



</body>          