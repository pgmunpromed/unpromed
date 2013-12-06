<?php

class Banco{

    /*
     * Função que conecta ao banco de dados
     */
    function conn(){

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "unpromed";
    
        mysql_connect($host, $user, $pass) or die('Erro de rotina de conexão com o banco: ' . mysql_error());
        mysql_select_db($db) or die('Erro ao acessar o banco: ' . mysql_error());
    
        mysql_query("set names 'utf8'");
        mysql_query("set charater_set_connection=utf8");
        mysql_query("set charater_set_client=utf8");
        mysql_query("set charater_set_results=utf8");
    }

    /*
     * Função que desconecta do banco de dados
     */
    function desconn(){
        mysql_close();
    }

}

?>