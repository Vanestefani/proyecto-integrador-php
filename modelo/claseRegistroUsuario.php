<?php


class claseRegistroUsuario {
    
    private $nombre;
    private $celular;
    private $email;
    private $password;
    private $privilegio;
    private $foto;
    private $verificacion;
    private $modo;
    
     function __construct() {
        
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getPrivilegio() {
        return $this->privilegio;
    }

    function getFoto() {
        return $this->foto;
    }

    function getVerificacion() {
        return $this->verificacion;
    }

    function getModo() {
        return $this->modo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setPrivilegio($privilegio) {
        $this->privilegio = $privilegio;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setVerificacion($verificacion) {
        $this->verificacion = $verificacion;
    }

    function setModo($modo) {
        $this->modo = $modo;
    }



}
