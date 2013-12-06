<?php

include("../dal/GrupoDAL.php");

class GrupoBLL{

    /*
     * Funçao que verifica se todos os campos foram preenchidos, verifica se a informaçao é valida
     * e passa os pararemos do tipo Grupo para a função incluirGrupoUsuario, caso nao retorna numero 2 ou 3
     * para ser tratada mensagem de erro 
     * $resultado: variavel que retorna a verificaçao de que se a alteração foi concluida
     */
    function incluirGrupoUsuario(Grupo $grupo) {

        if(strlen($grupo->getnom_grupo_usuario())==0 or strlen($grupo->getflg_status_grupo_usuario())==0 or strlen($grupo->getdesc_grupo_usuario())==0){
        
            return 2;
    
        } else {
                
            $GrupoDAL = new GrupoDAL;
            $resultado = $GrupoDAL->incluirGrupoUsuario($grupo);
            
            return $resultado;
            
        }
    }

    /*
     * Funçao que apenas passa os pararemos do tipo Grupo para a função alterarGrupoUsiario
     * $resultado: variavel que retorna a verificaçao de que se a alteração foi concluida
     */
    function alterarGrupoUsuario(Grupo $grupo){
    
        $GrupoDAL = new GrupoDAL;
        $resultado = $GrupoDAL->alterarGrupoUsuario($grupo);
    
        return $resultado;
    
    }

    /*
     * Funçao que apenas passa os pararemos do tipo Grupo para a função pesquisaGrupoUsuario
     * $resultado: variavel onde se encontra o resultado da pesquisa
     */
    function pesquisarGrupoUsuario(Grupo $grupo){
    
        $GrupoDAL = new GrupoDAL;
        $resultado = $GrupoDAL->pesquisarGrupoUsuario($grupo);
    
        return $resultado;
    }
    
    /*
     * Funçao que verifica se todos os campos foram preenchidos, verifica se a informaçao é valida
     * e passa os pararemos do tipo Grupo para a função incluirGrupoUsuario para a exclusao logica, caso nao retorna numero 2
     * para ser tratada mensagem de erro 
     * $resultado: variavel que retorna a verificaçao de que se a alteração foi concluida
     */    
    function excluirGrupoUsuario(Grupo $grupo){
        
        $GrupoDAL = new GrupoDAL;
        
        if(strlen($grupo->getMotivo_exclusao())==0){
        
            return 2;
    
        } else {
            
            $resultado = $GrupoDAL->excluirGrupoUsuario($grupo);
            return $resultado;
            
        }
    }
}


?>