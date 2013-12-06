<?php


//Inclui php Banco que faz a conecçao e Grupo.php em que foi criado o objeto
include('Banco.php');
include("../model/Grupo.php");

class GrupoDAL{

    /*
     * Funçao que identifica e faz a pesquisa com o banco
     * $pesquisa: variavel que guarda o comando sql para a pesquisa
     * $controle: variavel que controla a posiçao da matriz onde sera guardada a pesquisa
     * $resultado: variavel onde se encontra o resultado da pesquisa
     */
 
    function pesquisarGrupoUsuario(Grupo $grupo){
        
        $Banco = new Banco();
        $Banco->conn();
    
        //inicialização da variavel $controle
        $controle = 0;
    
        //recupera a informaçao do grupo para ser tratada internamente
        $nom_grupo_usuario = $grupo->getnom_grupo_usuario();
        $id_grupo_usuario = $grupo->getid_grupo_usuario();
        $flg_status_grupo_usuario = $grupo->getflg_status_grupo_usuario();
        
        $select = "SELECT nome, status, id, datahora, datahoraalt, usuario, descricao FROM grupo WHERE 1 = 1 AND ";
        $orderby = " ORDER BY id";
        
        //switch que encontra a condiçao de pesquisa adequada conforme o preenchimento dos campos
        switch($grupo->getControle()){
            case 1: $pesquisa = mysql_query($select . "nome='$nom_grupo_usuario' AND excluir=0" . $orderby);
                while ($resultado[$controle] = mysql_fetch_array($pesquisa)){
                    $controle++;
                }
                break;
            case 3: $pesquisa = mysql_query($select . "id='$id_grupo_usuario' AND excluir=0" . $orderby);
                while ($resultado[$controle] = mysql_fetch_array($pesquisa)){
                    $controle++;
                }
                break;
            case 5: $pesquisa = mysql_query($select . "status='$flg_status_grupo_usuario' AND excluir=0" . $orderby);
                while ($resultado[$controle] = mysql_fetch_array($pesquisa)){
                    $controle++;
                }
                break;
            case 4: $pesquisa = mysql_query($select . "nome='$nom_grupo_usuario' AND id='$id_grupo_usuario' AND excluir=0" . $orderby);
                while ($resultado[$controle] = mysql_fetch_array($pesquisa)){
                    $controle++;
                }
                break;
            case 6: $pesquisa = mysql_query($select . "nome='$nom_grupo_usuario' AND status=$flg_status_grupo_usuario AND excluir=0" . $orderby);
                while ($resultado[$controle] = mysql_fetch_array($pesquisa)){
                    $controle++;
                }
                break;
            case 8: $pesquisa = mysql_query($select . "id='$id_grupo_usuario' AND status=$flg_status_grupo_usuario AND excluir=0" . $orderby);
                while ($resultado[$controle] = mysql_fetch_array($pesquisa)){
                    $controle++;
                }
                break;
            case 9: $pesquisa = mysql_query($select . "nome='$nom_grupo_usuario' AND id='$id_grupo_usuario' AND status=$flg_status_grupo_usuario AND excluir=0" . $orderby);
                while ($resultado[$controle] = mysql_fetch_array($pesquisa)){
                    $controle++;
                }
                break;
            case 0: $pesquisa = mysql_query($select . "excluir=0" . $orderby);
                while ($resultado[$controle] = mysql_fetch_array($pesquisa)){
                    $controle++;
                }
                break;
        }
    
        $Banco->desconn();
    
        return $resultado;
    }

    /*
     * Funçao para inclusao de dados no banco
     * $resultado: variavel que retorna a verificaçao de que se a inserção foi concluida
     */
    function incluirGrupoUsuario(Grupo $grupo){
        
        $Banco = new Banco();
        $Banco->conn();
    
        //recupera a informaçao do grupo para ser tratada internamente
        $nom_grupo_usuario = $grupo->getnom_grupo_usuario();
        $flg_status_grupo_usuario = $grupo->getflg_status_grupo_usuario();
        $desc_grupo_usuario = $grupo->getdesc_grupo_usuario();
    
        $resultado = mysql_query("INSERT INTO grupo (nome, status, datahora, descricao) values ('$nom_grupo_usuario', '$flg_status_grupo_usuario', current_timestamp(), '$desc_grupo_usuario')");
    
        $Banco->desconn();
    
        //retorna 1 ou 0
        return $resultado;
    }

    /*
     * Função onde se altera os dados do iten selecionado
     * $resultado: variavel que retorna a verificaçao de que se a alteração foi concluida
     */
    function alterarGrupoUsuario(Grupo $grupo){
    
        $Banco = new Banco();
        $Banco->conn();
    
        //recupera a informaçao do grupo para ser tratada internamente
        $id_grupo_usuario = $grupo->getid_grupo_usuario();
        $nom_grupo_usuario = $grupo->getnom_grupo_usuario();
        $flg_status_grupo_usuario = $grupo->getflg_status_grupo_usuario();
        $desc_grupo_usuario = $grupo->getdesc_grupo_usuario();
    
        $resultado = mysql_query("UPDATE grupo SET nome='$nom_grupo_usuario', status='$flg_status_grupo_usuario', datahoraalt=current_timestamp(), usuario='Victor', descricao='$desc_grupo_usuario' WHERE id='$id_grupo_usuario'");
    
        $Banco->desconn();
    
        //retorna 1 ou 0
        return $resultado;    
    
    }

    /*
     * Função onde se exlui os dados logicamente do iten selecionado
     * $resultado: variavel que retorna a verificaçao de que se a alteração foi concluida
     */    
    function excluirGrupoUsuario(Grupo $grupo){
        
        $Banco = new Banco();
        $Banco->conn();
    
        $id_grupo_usuario = $grupo->getid_grupo_usuario();
        $motivo_exclusao = $grupo->getMotivo_exclusao();
        
        $resultado = mysql_query("UPDATE grupo SET excluir=1, emotivo='$motivo_exclusao' WHERE id='$id_grupo_usuario'");
        
        $Banco->desconn();
        
        return $resultado;
    }

}

?>