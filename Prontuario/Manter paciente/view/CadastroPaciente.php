<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Prontuário Digital em Saúde</title>
<style type="text/css">
#form1 h2 strong {
	font-family: "Arial Unicode MS", Arial;
	font-style: normal;
	font-variant: normal;
	border-bottom-color: #2B266E;
	border-right-color: #2B266E;
	border-left-color: #2B266E;
	font-size: 16px;
	color: #009;
}
#form1 h3 {
	font-family: "Arial Unicode MS", Arial;
	text-align: left;
	font-size: 16px;
	color: #009;
}
h1,h2,h3,h4,h5,h6 {
	font-family: "Arial Unicode MS", Arial;
	font-style: normal;
}
#form1 {
}
</style>
<link href="file:///C|/Users/Intelbras/Desktop/prontuario digital uninove/jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="file:///C|/Users/Intelbras/Desktop/prontuario digital uninove/jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="file:///C|/Users/Intelbras/Desktop/prontuario digital uninove/jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
body,td,th {
	font-family: "Arial Unicode MS", Arial;
	font-style: normal;
	font-weight: normal;
	font-size: 12px;
	color: #010101;
	right: 10px;
	left: 10px;
}
#form1 fieldset p label {
	font-weight: bold;
}
#form1 fieldset label {
	font-weight: bold;
}
</style>
<script src="file:///C|/Users/Intelbras/Desktop/prontuario digital uninove/jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="file:///C|/Users/Intelbras/Desktop/prontuario digital uninove/jQueryAssets/jquery-ui-1.9.2.tabs.custom.min.js" type="text/javascript"></script>
</head>
<body>
<form id="form1" name="form1" method="post">
  <div id="Tabs1">
    <ul>
      <li><a href="#tabs-1">Dados Pessoais</a></li>
      <li><a href="#tabs-2">Documentos</a></li>
      <li><a href="#Endereco/Contato">Endereço/Contato</a></li>
      <li><a href="#tabs-3">Dados da Primeira Consulta</a></li>
      <li><a href="#tabs-4">Acompanhante ou<span> Responsável</span></a></li>
    </ul>
    <div id="tabs-1">
    </div>
    <div id="Endereço/Contato">
    </div>
    <div id="tabs-3"></div>
  </div>
  <p>
  <fieldset>    <label for="num_prontuario">Prontuário:</label>
    <input name="num_prontuario" type="text" id="num_prontuario">
    <label for="dt_inclusao">Data:</label>
    <input name="dt_inclusao" type="date" id="dt_inclusao">
  </p>
  <p align="left">
    <label for="id_responsavel">Responsavel:</label>
    <input name="id_responsavel" type="text" id="id_responsavel">
  </p>
  <p>
    <label for="select">Campus:</label>
    <select name="select" id="select">
<option>Ibirapuera</option>
      <option>Santo Amaro</option>
      <option>Vergueiro</option>
      <option selected>Selecione</option>
    </select>
  </p></fieldset>
  
  <p></p>
  
  <fieldset><h2><strong>Residencial</strong></h2>
  <p>
    
    <label for="nom_logradouro">Logradouro:</label>
    <select name="nom_logradouro" id="nom_logradouro">
      <option>Selecione</option>
      <option>Avenida</option>
      <option>Rua</option>
      <option>Praça</option>
      <option>Viela</option>
      <option>Estrada</option>
    </select>
      <label for="id_endereço3"> Endereço:</label>
  <input type="text" name="id_endereço" id="id_endereço3" required>
    </p>
  <p>
    
    <label for="num">Número:</label>
    <input name="num" type="text" id="num" size="10" required>
     <label for="desc_complemento">Complemento:</label>
    <input type="text" name="desc_complemento" id="desc_complemento">
    </p>
  <p>
    
    <label for="num_apartamento">Apartamento:</label>
    <input name="num_apartamento" type="text" id="num_apartamento">
    </p>
  <p>
    
    <label for="num_cep">CEP:</label>
    <input name="num_cep" type="text" id="num_cep" maxlength="9"  pattern="\d{5}\-\d{3}" required>
    <label for="nom_bairro">Bairro:</label>
    <input type="text" name="nom_bairro" id="nom_bairro" required>
    </p>
  <p align="left">
    
    <label for="nom_cidade">Cidade:</label>
    <input type="text" name="nom_cidade" id="nom_cidade">
    <label for="nom_estado">UF:</label>
    <select name="nom_estado" id="nom_estado">
      <option selected>Estado</option>
      <option>Acre</option>
      <option>Alagoas</option>
      <option>Amapá</option>
      <option>Amazonas</option>
      <option>Bahia</option>
      <option>Ceará</option>
      <option>Distrito Federal</option>
      <option>Espírito Santo</option>
      <option>Goiás</option>
      <option>Maranhão</option>
      <option>Mato Grosso</option>
      <option>Mato Grosso do Sul</option>
      <option>Minas Gerais</option>
      <option>Pará</option>
      <option>Paraíba</option>
      <option>Paraná</option>
      <option>Pernambuco</option>
      <option>Piauí</option>
      <option>Rio de Janeiro</option>
      <option>Rio Grande do Norte</option>
      <option>Rio Grande do Sul</option>
      <option>Rondônia</option>
      <option>Roraima</option>
      <option>Santa Catarina</option>
      <option>São Paulo</option>
      <option>Sergipe</option>
      <option>Tocantins</option>
    </select>
    </p>
  </fieldset>
  <p>&nbsp;</p>
  <fieldset>
    <h3>Telefones para contato</h3>
  <p>
    
    <label for="num_tel_residencial">Tel. Residencial :</label>
    <input name="num_tel_residencial" type="text" id="num_tel_residencial" maxlength="10" required>
    </p>
  <p>
    
    <label for="num_tel_comercial">Tel. Comercial :</label>
    <input name="num_tel_comercial" type="text" id="num_tel_comercial" maxlength="10" required>
    <label for="num_ramal">Ramal:</label>
    <input type="text" name="num_ramal" id="num_ramal">
    </p>
  <p>
    
    <label for="num_celular">Celular:</label>
    <input name="num_celular" type="text" id="num_celular" maxlength="11">
    </p>
  <p>
    
    <label for="num_tel_recado">Tel. Recado:</label>
    <input name="num_tel_recado" type="text" id="num_tel_recado" maxlength="11">
    <label for="nom_recado">Nome Recado:</label>
    <input type="text" name="nom_recado" id="nom_recado">
    </p>
  <p>
    
    <label for="desc_email">E-mail:</label>
    <input type="email" name="desc_email" id="desc_email">
</p> 
  </fieldset>
  <p>
  <input name="Gravar" type="submit" formnovalidate id="Gravar" value="Gravar">
  </p>
  <p>&nbsp; </p>
  <p></p>
  
</form>
<script type="text/javascript">
$(function() {
	$( "#Tabs1" ).tabs(); 
});
</script>

</body>
</html>
