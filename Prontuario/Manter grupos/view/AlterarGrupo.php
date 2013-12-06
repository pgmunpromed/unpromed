<html>
<head>
    <title>Alterar Grupos</title>
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
                <form method="post" name="fsalvar">
<?php

    include("../bll/GrupoBLL.php");
         
    $grupo = new Grupo();
    $GrupoBLL = new GrupoBLL;
    
    
    /*
     * Os valor a serem atualizados sao setados em variaveis com os mesmos nomes para serem tratadas internamente
     */
    $nom_grupo_usuario = $_POST["nom_grupo_usuario"];     
    $flg_status_grupo_usuario = $_POST['flg_status_grupo_usuario'];             
    $id_grupo_usuario = $_POST['id_grupo_usuario'];
    $desc_grupo_usuario = $_POST['desc_grupo_usuario'];
    
        echo '<td>
            <input type="text" name="nom_grupo_usuario" size="94" maxlength="30" value="' . $nom_grupo_usuario . '">
            <input type="hidden" name="id_grupo_usuario" value=' . $id_grupo_usuario . '>
        </td>
        <td>
            <select name="flg_status_grupo_usuario">';
    /*
     * Condição de tratamento de informaçao onde sera definido como padrao "selected" a opção referente ao valor, sendo 1 ou 0
     */    
    if($flg_status_grupo_usuario==1){
                echo'<option value="1" selected>Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </td>';
    } else {
                echo '<option value="1">Ativo</option>
                <option value="0" selected>Inativo</option>
            </select>
        </td>';                
    }
        echo '<td>
            <input type="submit" value=Atualizar name="atualizar">
        </td>    
        <td>
            <input type= "submit" value="Cancelar" name="cancelar" id="cancelar">
        </td>
        <td>
            <input type= "submit" value="Voltar" name="voltar" id="voltar" disabled="yes">
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
            <th>
                <textarea name="desc_grupo_usuario" rows="5" cols="72" maxlength="300" id="textarea">' . $desc_grupo_usuario . '</textarea>
            </th>
            </form>
        </tr>';

    /*
     * Condiçao onde deve ser pressionado o botao atualizar para executar a função alterarGrupoUsuario onde sera atualizada
     * Apenas seta os novos valores no objeto e atualiza no banco de dados
     */
    if(isset($_POST['atualizar'])){
    
        $grupo->setnom_grupo_usuario($_POST['nom_grupo_usuario']);     
        $grupo->setflg_status_grupo_usuario($_POST['flg_status_grupo_usuario']);             
        $grupo->setid_grupo_usuario($_POST['id_grupo_usuario']);
        $grupo->setdesc_grupo_usuario($_POST['desc_grupo_usuario']);

        if(strlen($nom_grupo_usuario)!=0){
            $GrupoBLL->alterarGrupoUsuario($grupo);
            echo '<script>
                alert("O grupo foi atualizado com sucesso !");
                document.getElementById("cancelar").disabled=true;
                document.getElementById("voltar").disabled=false;
            </script>';
        } else {
            echo '<script>alert("Campo nome vazio. Favor preencha todos os campos !");</script>';
        }
    }

    /*
     * Botao cancelar ou voltar redireciona para a pagina PesquisarGrupo.php
     */
    if(isset($_POST['cancelar']) or isset($_POST['voltar'])){
        header("Location: PesquisarGrupo.php");
    }

?>

    </tbody>
</table>
</body>
</html>
