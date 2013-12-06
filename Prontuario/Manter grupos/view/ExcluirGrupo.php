<html>
<head>
    <title>Excluir Grupos</title>
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    
<?php

    include("../bll/GrupoBLL.php");
         
    $grupo = new Grupo();
    $GrupoBLL = new GrupoBLL;
    
    /*
     * $controle recebe o valor 3 onde o chegar no GrupoDAL tera um case que se identifica por pesquisar 
     * apenas pelo "id_grupo_usuario" 
     */
    $controle = 3;
    $id_grupo_usuario = $_POST['id_grupo_usuario'];
    $grupo->setid_grupo_usuario($id_grupo_usuario);
    $grupo->setControle($controle);
    $resultado = $GrupoBLL->pesquisarGrupoUsuario($grupo);
    
    
    echo '<b>Nome: </b>' . $resultado[0]['nome'] . '
    <br><b>Status: </b>';
    
    /*
     * Tratamento de visualizaçao da informaçao que transforma 0 em "Inativo" e 1 em "Ativo"
     */
    if($resultado[0]['status']==0){ 
        echo 'Inativo'; 
    } else { 
        echo 'Ativo';
    }
    echo '<br><b>ID: </b>' . $resultado[0]['id'] .  '
    <br><b>Descrição: </b>' . $resultado[0]['descricao'] .  '
    <br><b>Data de inclusão: </b>' . date('d/m/Y - H:i', strtotime($resultado[0]['datahora'])) .  '
    <br><b>Data de alteração: </b>';
    
    /*
     * Tratamento de visualizaçao da informação que caso nao tenha resultado informa que nao existe
     */
    if($resultado[0]['datahoraalt']==NULL){ 
        echo 'Grupo nao alterado';
    } else { 
        echo date('d/m/Y - H:i', strtotime($resultado[0]['datahoraalt']));
    }
    echo '<br><b>Usuario em que alterou: </b>';
    
    /*
     * Tratamento de visualizaçao da informação que caso nao tenha resultado informa que nao existe
     */
    if($resultado[0]['usuario']==NULL){ 
        echo 'Nenhum usuario';
    } else { 
        echo $resultado[0]['usuario'];
    }

    echo '<br><br><b>Motivo da exclusão</b>
        <form method="post">
        <input type="hidden" name="id_grupo_usuario" value=' . $_POST['id_grupo_usuario'] . '>
        <textarea name="motivo_exclusao" rows="5" cols="71" maxlength="300" id="textarea" placeholder="Descrição"></textarea>
        <br><input type="submit" value="Excluir" name="confirmexcluir">
        <input type="submit" value="Cancelar" name="cancelar">
    </form>';
    
    /*
     * Condiçao onde deve ser pressionado o botao excluir para executar a função excluirGrupoUsuario onde sera atualizada
     * apenas excluida de forma logica
     */
    if(isset($_POST['confirmexcluir'])){
        
        $grupo->setMotivo_exclusao($_POST['motivo_exclusao']);
        $grupo->setid_grupo_usuario($_POST['id_grupo_usuario']);
        $resultado = $GrupoBLL->excluirGrupoUsuario($grupo);
        
        switch($resultado){
            case 1:
                echo "<script>
                    alert('Grupo excluido com sucesso !');
                    location.href='PesquisarGrupo.php';
                </script>";
                break;
            case 2:
                echo "<script>
                    alert('O campo Motivo da exclusão deve ser preenchido !');
                </script>";
                break;
        }
        
    }
    
    /*
     * Botao cancelar ou voltar redireciona para a pagina PesquisarGrupo.php
     */
    if(isset($_POST['cancelar'])){
        header("Location: PesquisarGrupo.php");
    }
     
?>
    
</body>
</html>