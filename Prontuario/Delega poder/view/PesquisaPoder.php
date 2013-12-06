<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="../js/jquery.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/jquery.validate.js"></script>
        <title>PesquisaPoder</title>
    </head>
    <body>   
		<form method="POST" action="manutencao.php" >		
		
			Delegado			 
			
			<select name="poder">
			<option value="1">1</option >
			<option value="2">2</option >
			<option value="2">3</option >
			</select >
			 
			Data de finalizacao de vigencia
			 
			<input type="date" name="" >
			 
			Status
			 
			<select name="status" >
			<option value="1">Ativo</option >
			<option value="0">Inativo</option >
			</select >
		 </br >
		<input type="submit" value="pesquisa" > 		 		
		</form>		
		<form method="post" action="IncluirPoder.php" >				
			<input type="submit" value="inclusao" >
		</form>	
		</br ></br >
				<table name="resultado" border="1" width="1200">
			<tr >
				<th>Atribuidor</th>
				<th>Delegado</th>
				<th>Operacao Delegada</th>
				<th>Acao Delegada</th>
				<th>Motivo</th>
				<th>Instante de concessao<br> (data e hora)</th>
				<th>Periodo de vigencia (horas)</th>
				<th>Status (Inativo = 0; Ativo = 1)</th>
			</tr >
		</table >
        <?php
        ?>
    </body>
</html>
