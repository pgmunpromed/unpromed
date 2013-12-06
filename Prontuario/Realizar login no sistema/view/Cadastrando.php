<!DOCTYPE html>
<html>
<head>
<meta cndoharset="utf-8">
<title>Cadastrando....</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Cristiano Mafra de Aguiar">
<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco ="cadastro";
$conexao =mysql_connect($host, $user, $passor die (mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<?php
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$nome = $_POST['nome'];
$sql = mysql_query("INSERT INTO usauario(nome,nome,nome,nome,nome,nome,nome,nome,nome,
nome,nome,nome,nome,nome) VALUES ('$nome','$nome','$nome','$nome','$nome','$nome','$nome','$nome','$nome','$nome','$nome','$nome','$nome','$nome')");
echo <center>Cadastrado com sucesso</center>;
?>
</body>

</html>