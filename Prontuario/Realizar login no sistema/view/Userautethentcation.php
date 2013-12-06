<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "Cadastro";
$conexao = mysql_connect($host, $user, $pass or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<html>
<head>
<title>Autenticando usuario</title>
<script type ="text/javascript">
function loginsuccessfully(){
    settimeout("window.location='painel.php'",5000);
	}
	function loginfailed(){
	settimeout("window.location='login.php'",5000);
	}
</head>
<body>
<?php
$ra = $_POST['ra'];
$senha = $_POST['senha'];
$sql = mysql_query "SELECT  FROM usuario WHERE ra = '$ra' and senha = '$senha"); or die (mysql());
$row = mysql_num_rows($sql);
if($row > 0) 
{
session_start();
$_SESSION['ra'] = $_POST['ra'];
$_SESSION['senha'] = $_post ['senha'];
echo "<center>Logado com sucesso! aguarde um instante...</center>"
echo "<script>loginsuccessfully()</script>";
}else{
echo "<center>usuario ou senha invalidos!Aguarde um instante e tente novamente...</center>"
?>