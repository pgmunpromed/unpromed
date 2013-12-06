<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="../js/jquery.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/jquery.validate.js"></script>
        <title>IncluirPoder</title>
    </head>
    <body >   
	
		<form method="POST" action ="#"  name="formulario" >			
			Atribuidor 
			</br >
				<input type="textfield" maxlength="2" name="atribuidor" class="atribuidor" >
			</br >
			Delegado
			</br >
			<select name="poder">
				<option value="1">1</option >
				<option value="2">2</option >
				<option value="2">3</option >
			</select >
			</br >
			Operacao que esta sendo delegada
			</br >
				<input type="textfield" maxlength="50" name="" >
			</br >
			Acao que esta sendo delegada
			</br >
				<input type="textfield" maxlength="2" name="" >
			</br >
			Motivo
			</br >
				<input type="textfield" maxlength="50" name="" >
			</br >
			Instante de concessao (data e hora)
			</br >
				<input type="date" name="" >
			</br >
			Periodo de vigencia (horas)
			</br >
				<input type="textfield" maxlength="2" name="" >
			</br >
			 Status: 
			 </br >
			<select name="status" >
				<option value="1">Ativo</option >
				<option value="0">Inativo</option >
			</select >
			
			 <hr >
			
			 <input type="submit" value="Salvar" name="salvar" class="salvar" > 	
			 <input type="submit" value="Cancelar" name="cancelar" > 	
			 <input type="submit" value="imprimir" name="imprimir" > 	
			 <input type="submit" value="Sair" name="sair" > 	
			
			<script Language="JavaScript">
				document.formulario.imprimir.disabled = true;
				document.formulario.sair.disabled = true;
			 </script>			 
		</form>		
		
        <?php

        ?>
    </body>
</html>
