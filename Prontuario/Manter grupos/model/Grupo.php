<?php

/*
 * Objeto Grupo
 * $id_grupo_usuario: variavel onde guarda o chamado codigo em que é a chave primaria do objeto no banco
 * $nome_grupo_usuario: variavel onde guarda o nome do grupo
 * $Id_usu_sist: variavel onde guarda id ou nome do usuario que possa ter modificado as configuraçoes do grupo
 * $dt_inclusao: variavel onde guarda a data que se foi incluso o grupo
 * $dt_alteracao: variavel onde guarda a data em que o grupo foi alterado
 * $Status_grupo: variavel onde guarda status do grupo onde se trata uma informação bolean
 * $controle: variavel onde se controla qual criterio de pesquisa sera ultilisado
 */

class Grupo{

    private $id_grupo_usuario;
    private $nom_grupo_usuario;
    private $flg_status_grupo_usuario;
    private $desc_grupo_usuario;
    private $dt_inclusao;
    private $id_usu_sist;
    private $perfilAcesso;
    private $usuario;
    private $registroCriticaIncidente;
    private $motivo_exclusao;
    private $controle;    
    private $dt_alteracao;
    
//  ID
    public function getid_grupo_usuario() {
        return $this->id_grupo_usuario;
    }

    public function setid_grupo_usuario($id_grupo_usuario) {
        $this->id_grupo_usuario = $id_grupo_usuario;
    }
    
//  Nome
    public function getnom_grupo_usuario() {
        return $this->nom_grupo_usuario;
    }

    public function setnom_grupo_usuario($nom_grupo_usuario) {
        $this->nom_grupo_usuario = $nom_grupo_usuario;
    }

//  Status
    public function getflg_status_grupo_usuario() {
        return $this->flg_status_grupo_usuario;
    }

    public function setflg_status_grupo_usuario($flg_status_grupo_usuario) {
        $this->flg_status_grupo_usuario = $flg_status_grupo_usuario;
    }

// Descricao
    public function getdesc_grupo_usuario() {
        return $this->desc_grupo_usuario;
    }

    public function setdesc_grupo_usuario($desc_grupo_usuario) {
        $this->desc_grupo_usuario = $desc_grupo_usuario;
    }
    
//  Data de Inclusao
    public function getdt_inclusao() {
        return $this->dt_inclusao;
    }

    function setdt_inclusao($dt_inclusao) {
        $this->dt_inclusao = $dt_inclusao;
    }
    
// ID do usuario
    public function getid_usu_sist() {
        return $this->id_usu_sist;
    }

    public function setid_usu_sist($id_usu_sist) {
        $this->id_usu_sist = $id_usu_sist;
    }

// Perfil Acesso
    public function getPerfilAcesso() {
        return $this->perfilAcesso;
    }

    public function setPerfilAcesso($perfilAcesso) {
        $this->perfilAcesso = $perfilAcesso;
    }

// Usuario
    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

// Registro critica incidente
    public function getRegistroCriticaIncidente() {
        return $this->registroCriticaIncidente;
    }

    public function setRegistroCriticaIncidente($registroCriticaIncidente) {
        $this->registroCriticaIncidente = $registroCriticaIncidente;
    }

//  Controle
    public function getControle() {
        return $this->controle;
    }

    public function setControle($controle) {
        $this->controle = $controle;
    }
    
// Motivo de exclusao    
    public function getMotivo_exclusao() {
        return $this->motivo_exclusao;
    }

    public function setMotivo_exclusao($motivo_exclusao) {
        $this->motivo_exclusao = $motivo_exclusao;
    }
    
//  Data de alteracao
    public function getdt_alteracao() {
        return $this->Data_alteracao;
    }

    public function setdt_alteracao($dt_alteracao) {
        $this->dt_alteracao = $dt_alteracao;
    }

}

?>
