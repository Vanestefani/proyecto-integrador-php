<?php

class claseLogin {
    private $usuario;
    private $clave;
    private $privilegio;
    
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

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }
    
    function setPrivilegio($privilegio) {
        $this->privilegio = $privilegio;
    }

}