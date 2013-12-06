<html>
<head>
<meta charset="utf-8">
<title>SIstema de Login com PHP</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Cristiano Mafra de Aguiar">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
<script src="js/ValidarRA.js"></script>
<script language="JavaScript">

//Validar os campos usados no Login
function ValidarRA(strRA,strSenha)
{
//linha de debug
//alert("Login " + strLogin + "\n" + "Senha: " + strSenha);
     if (strRA == "")
      { 
         alert("Preencha corretamente o campo RA!");
         document.frmRA.txtRA.focus();
         return false;
      }
	  
     else if (strSenha == "")
      { 
         alert("Preencha corretamente o campo Senha!");
         document.frmRA.pwdSenha.focus();
         return false;
      }
     else 
      { 
          alert("Logado no sistema!!");
          
         return true;
      }
}
</script>
<script language="javascript">  
<!--  
function somente_numero(campo){  
var digits="0123456789"  
var campo_temp   
    for (var i=0;i<campo.value.length;i++){  
        campo_temp=campo.value.substring(i,i+1)   
        if (digits.indexOf(campo_temp)==-1){  
            campo.value = campo.value.substring(0,i);  
        }  
    }  
}  
  
-->  
</script>
</head>

<body>

<div id="Local_de_acesso_do_Usuario">

<form name="loginfrom" action="Userautethentcation.php" method="post"  onsubmit="javascript:return ValidarRA(txtRA.value,pwdSenha.value);">

<h1>Acesso ao Sistema</h1> 
      
    <input type="text" name="txtRA"class="txt bradius" placeholder="Digite o seu RA" maxlength="10"onfocus="javascript:this.value='';"
	onKeyUp="javascript:somente_numero(this);" value="">
   
    <input type="password" name="pwdSenha" class="txt bradius"  placeholder="Digite sua Senha" maxlength="8"  onfocus="javascript:this.value='';"
	onKeyUp="javascript:somente_numero(this);" value="">
   
    <input type="submit" value="Entrar" name="submit" class="sb"/>
	
    <a href="esqueceu_senha.php">Esqueceu a senha?</a> 
    <a href="cadastrar.php">Cadastro</a>

</form>

</div>							
</body>

</html>
