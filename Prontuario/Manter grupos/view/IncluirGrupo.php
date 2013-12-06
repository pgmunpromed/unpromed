<html>
<head>
    <title>Incluir Grupos</title>
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    
    <table border="1" width="900">
        <caption>
        </caption>
        <colgroup>
        </colgroup> 
        <thead>
            <tr>
                <th>Nome</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>            
                <form method="post" name="salvar">
                    <td>
                        <input type="text" name="nom_grupo_usuario" size="93" maxlength="30" placeholder="Nome">
                    </td>
                    <td>
                        <select name="flg_status_grupo_usuario">
                            <option value="" selected>Selecione</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                    </td>
                    <td>
                        <input type="submit" value=Salvar name="salvar" id="salvar">
                    </td> 
                    <td>
                        <input type= "submit" value="Cancelar" name="cancelar" id="cancelar">                    
                    </td>
                    <td>
                        <input type="submit" value="Voltar" disabled="yes" name="voltar" id="voltar">
                    </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea name="desc_grupo_usuario" rows="5" cols="71" maxlength="300" id="textarea" placeholder="Descrição"></textarea>
                    </td>
                </form>
            </tr>
        </tbody>
    </table>        
</body>
</html>

<?php
    
include("../bll/GrupoBLL.php");
    
    $grupo = new Grupo();
    $GrupoBLL = new GrupoBLL;
    
    /*
     * Condiçao onde deve ser pressionado o botao salvar para executar a função incluirGrupoUsuario onde sera guardada as
     * informaçoes no banco de dados
     */
    if(isset($_POST['salvar'])){
    
        /*
         * Os valor a serem incluidos sao setados em variaveis com os mesmos nomes para serem tratadas internamente
         */
        $grupo->setnom_grupo_usuario($_POST['nom_grupo_usuario']);     
        $grupo->setflg_status_grupo_usuario($_POST['flg_status_grupo_usuario']);
        $grupo->setdesc_grupo_usuario($_POST['desc_grupo_usuario']);
                
        $resultado = $GrupoBLL->incluirGrupoUsuario($grupo);
        
        /*
         * Tratamento de mensagens de erro caso os campos nao estejam preenchidos
         * 1: retornado com sucesso
         * 2: algum campo nao foi preenchido
         */
        switch($resultado){
            case 1:
                echo "<script>
                    alert('O grupo foi salvo com sucesso !');
                    document.getElementById('cancelar').disabled=true;
                    document.getElementById('voltar').disabled=false;
                </script>";
                break;
            case 2:
                echo "<script>
                    alert('O grupo nao foi salvo ! Todos os campos devem ser preenchidos.');
                </script>";
                break;
        }
    }

    /*
     * Botao cancelar ou voltar redireciona para a pagina PesquisarGrupo.php
     */    
    if(isset($_POST['cancelar']) or isset($_POST['voltar'])){
        header("Location: PesquisarGrupo.php");
    }
    
?>