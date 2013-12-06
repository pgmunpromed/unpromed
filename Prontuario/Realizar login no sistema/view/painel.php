<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "Cadastro";
$conexao = mysql_connect($host, $user, $pass or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<?php
session_start();
if(!isset($_SESSION["ra"]) || !isset ($_SESSION["senha"])){
header("Location:login.php");
exit;
}else{
echo <center>"Voçê está logado!"</center>;
}
?>
<html>
<head>
<title>Painel</title>
<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<br />
<br />
<a href = "logout.php"><center>Sair</center></a>
</body>
</html>