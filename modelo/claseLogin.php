<?php

class claseLogin {
    private $usuario;
    private $clave;
    private $privilegio;
    private $id;
    
    function __construct() {
        
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function getPrivilegio() {
        return $this->privilegio;
    }

    function getId() {
        return $this->id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setPrivilegio($privilegio) {
        $this->privilegio = $privilegio;
    }

    function setId($id) {
        $this->id = $id;
    }
}