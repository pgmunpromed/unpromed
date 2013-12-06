<html>
<head>
    <title>Alterar Grupos</title>
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>
<body>
    <input type="submit" value="Imprimir" name="imprimir" onclick="window.print();">
    <form method="post" name="botaovoltar">
        <input type="submit" value="Voltar" name="voltar">
    </form>

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
    /*
     * Fubçao chamada para trazer informaçoes do grupo
     */
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
    
    echo '<br><br><table border="1" width="900">
        <caption>
        </caption>
        <colgroup>
        </colgroup>
        <thead>
            <tr>
                <th>
                    Clientes cadastrados
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Clientes
                </td> 
            </tr>    
        </tbody>
    </table>';

    /*
     * Botao cancelar ou voltar redireciona para a pagina PesquisarGrupo.php
     */
    if(isset($_POST['voltar'])){
        header("Location: PesquisarGrupo.php");
    }

?>

</body>
</html>