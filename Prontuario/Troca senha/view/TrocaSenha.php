<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
		
        <script>
	function validarSenha(){            
            			
        senhaatual = document.alterarsenha.senhaatual.value;
		senhanova = document.alterarsenha.senhanova.value;
		confirmarsenha = document.alterarsenha.confirmarsenha.value;
                
        if(document.alterarsenha.senhaatual.value="" || document.alterarsenha.senhaatual.value.length < 8){
                    document.alterarsenha.senhaatual.focus();
					document.alterarsenha.senhaatual.value = senhaatual;
					alert("A SENHA ATUAL DEVE TER OITO DIGITOS");	    	
		}			
		else if (senhanova == senhaatual){
					document.alterarsenha.senhanova.focus();
					document.alterarsenha.senhaatual.value = senhaatual;
		            alert("A senha nova nao pode ser igual a senha atual");
		}			 
		else if (senhanova == confirmarsenha && document.alterarsenha.senhaatual.value.length < 8 ){
			alert("SENHA ALTERADA COM SUCESSO");
		}	
		else{
			document.alterarsenha.confirmarsenha.focus();
			document.alterarsenha.senhaatual.value = senhaatual;
			alert("SENHAS DIFERENTES");			
		}	
	}
	</script>

	   <style>
		
	   input[type=button]{		   
		   background-color:yellow;
		   color: black;
		   padding: 5px;
		   border: 2;
		}

		input[type=button]:hover{	
			background-color:#034;
			color: white;
			cursor: pointer			
		 }

	</style>
	</head>	 
	<body>	
	<br>
	<br>
	<form action="" name="alterarsenha" method="POST">         
        <p>
	   Senha atual:      <input type="password" name="senhaatual">    <br>
	   Senha nova:       <input type="password" name="senhanova" size="20"><br>
	   Confirmar Senha:  <input type="password" name="confirmarsenha" size="20"><br>
	                     <input type="button" value="Salvar" onClick="validarSenha()" ><br>
                         <input type="button" value="Voltar">
	</p>
	</form>
	 
	</body>
	</html>