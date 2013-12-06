<html>
    <head>
        <title>Pesquisar Grupos</title>
        <meta http-equiv="content-language" content="pt-br" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <body>

        <table border="1" width="900">
            <caption>
            </caption>
            <colgroup>
            </colgroup> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <form method="post" name="pesquisa">
                        <td>
                            <input type="text" name="id_grupo_usuario" size="9" maxlength="11" placeholder="ID">
                        </td>
                        <td>
                            <input type="text" name="nom_grupo_usuario" size="77" maxlength="30" placeholder="Nome">
                        </td>
                        <td>
                            <select name="flg_status_grupo_usuario">
                                <option value="" selected>Todos</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </td>
                        <td>
                            <input type="submit" value="Pesquisar" name="pesquisar">
                        </td>
                    </form>
                    <form method="post" name="inclui">
                        <td>
                            <input type="submit" value="Incluir" name="incluir">
                        </td>
                    </form>
                    <td>
                        <input type="submit" value="imprimir" name="imprimir" onclick="window.print();" disabled="yes" id="imprimir">
                    </td>
                </tr>
            </tbody>
        </table>
       
<?php
            
    include("../bll/GrupoBLL.php");
    
    $GrupoBLL = new GrupoBLL;
    $grupo = new Grupo();
            
    /*
     * Ao selecionar o botao pesquisar ativa a função onde é verificada quais campos foram preenchidos seta os valores no
     * objeto e chama a função para tratar a informaçao que retorna o resultado da pesquisa.
     * $controle: Variavel onde sera registrada a condiçao de pesquisa
     * $resultado: Variavel onde traz o resultado da pesquisa
     * $contador: Variavel onde verifica quantas linhas a pesquisa touxe
     */
    if(isset($_POST['pesquisar'])){
                
        $controle=0;
                
        if(strlen($_POST['nom_grupo_usuario'])!=0){
            $controle=1;
        }
                
        if(strlen($_POST['id_grupo_usuario'])!=0){
            $controle=$controle+3;
        }
                
        if(strlen($_POST['flg_status_grupo_usuario'])!=0){
            $controle=$controle+5;
        }
                
        $grupo->setnom_grupo_usuario($_POST['nom_grupo_usuario']);     
        $grupo->setflg_status_grupo_usuario($_POST['flg_status_grupo_usuario']);
        $grupo->setid_grupo_usuario($_POST['id_grupo_usuario']);
        $grupo->setControle($controle);
                
        $resultado = $GrupoBLL->pesquisarGrupoUsuario($grupo);
        $contador = count($resultado)-1;
              
        echo '<br>
			<table border="1" width="900">
            <caption>
            </caption>
            <colgroup>
            </colgroup>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th>Data da inclusao</th>
                    <th>Data de alteracao</th>
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody>';
             
        /*
         * Condiçao que verifica se a pesquisa trouxe alguma linha
         */
        if($contador>0){
            
            /*
             * Laço de repetiçao onde se criará as linhas da tabela com os resultados
             */       
            for($i=0;$i<$contador;$i++){
                echo '<tr>
                    <td>
                        ' . $resultado[$i]['id'] . '
                    </td>
                    <td>
                        ' . $resultado[$i]['nome'] . '
                    </td>';
                        
                    /*
                     * Tratamento de visualizaçao da informaçao que transforma 0 em "Inativo" e 1 em "Ativo"
                     */
                    if($resultado[$i]['status']==1){ 
                        echo '<td>
                            Ativo
                        </td>'; 
                    } else { 
                        echo '<td>
                            Inativo
                        </td>'; 
                    } 
                    echo '<td>
                        ' . date('d/m/Y - H:i', strtotime($resultado[$i]['datahora'])) . '
                    </td>';
                    
                    /*
                     * Tratamento de visualizaçao da informação que caso nao tenha resultado informa que nao existe
                     */
                    if($resultado[$i]['datahoraalt']==0){
                        echo '<td>
                        </td>';
                    } else {
                        echo '<td>
                            ' . date('d/m/Y - H:i', strtotime($resultado[$i]['datahoraalt'])) . '
                        </td>';
                    }
                    
                    /*
                     * Tratamento de visualizaçao da informação que caso nao tenha resultado informa que nao existe
                     */
                    if($resultado[$i]['usuario']==null){
                        echo '<td>
                        </td>';
                    } else {
                        echo '<td>
                            ' . $resultado[$i]['usuario'] . '
                        </td>';
                    }
                    echo '<form method="post" name="botaoalterar" action="AlterarGrupo.php">
                        <td>
                            <input type="submit" value="Alterar" name="alterar">
                            <input type="hidden" name="id_grupo_usuario" value=' . $resultado[$i]['id'] . '>
                            <input type="hidden" name="nom_grupo_usuario" value="' . $resultado[$i]["nome"] . '">
                            <input type="hidden" name="flg_status_grupo_usuario" value=' . $resultado[$i]['status'] . '>
                            <input type="hidden" name="desc_grupo_usuario" value="' . $resultado[$i]['descricao'] . '">
                        </td>
                    </form>
                    <form method="post" name="botaovisualizar" action="VisualizarGrupo.php">
                        <td>
                            <input type="submit" value="Visualizar" name="visualizar">
                            <input type="hidden" name="id_grupo_usuario" value="' . $resultado[$i]['id'] . '">
                        </td>
                    </form>
                    <form method="post" name="botaoexcluir" action="ExcluirGrupo.php">
                        <td>
                            <input type="submit" value="Excluir" name="excluir">
                            <input type="hidden" name="id_grupo_usuario" value=' . $resultado[$i]['id'] . '>
                            <input type="hidden" name="nom_grupo_usuario" value="' . $resultado[$i]["nome"] . '">
                            <input type="hidden" name="flg_status_grupo_usuario" value=' . $resultado[$i]['status'] . '>
                            <input type="hidden" name="desc_grupo_usuario" value="' . $resultado[$i]['descricao'] . '">
                        </td>
                    </form>
                </tr>    
        <script>
            document.getElementById("imprimir").disabled=false;
        </script>';                    
            }
        } else {
            echo '<tr>
                <td colspan="6"> Não foram encontrados resultados ! </td>
            </tr>';
        }
            echo '</tbody>
        </table>';
    }
    
    /*
     * Botao incluir redireciona para a pagina IncluirGrupo.php
     */    
    if(isset($_POST['incluir'])){
        header("Location: IncluirGrupo.php");
    }
    
?>
     
    </body>
</html>