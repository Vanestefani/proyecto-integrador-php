<?php

class claseRegistroInmueble {
    private $idInmueble;
    private $tipoInmueble;
    private $tipoOperacion;
    private $amueblado;
    private $habitaciones;
    private $baños;
    private $metroCuadrado;
    private $antiguedad;
    private $estrato;
    private $parqueadero;
    private $administracion;
    private $pisos;
    private $tituloAnuncion;
    private $descripcion;
    private $ubicacion;
    private $precio;
    private $foto;
    private $propietario;
    
    function __construct() {
        ;
    }
    function getIdInmueble() {
        return $this->idInmueble;
    }

    function getTipoInmueble() {
        return $this->tipoInmueble;
    }

    function getTipoOperacion() {
        return $this->tipoOperacion;
    }

    function getAmueblado() {
        return $this->amueblado;
    }

    function getHabitaciones() {
        return $this->habitaciones;
    }

    function getBaños() {
        return $this->baños;
    }

    function getMetroCuadrado() {
        return $this->metroCuadrado;
    }

    function getAntiguedad() {
        return $this->antiguedad;
    }

    function getEstrato() {
        return $this->estrato;
    }

    function getParqueadero() {
        return $this->parqueadero;
    }

    function getAdministracion() {
        return $this->administracion;
    }

    function getPisos() {
        return $this->pisos;
    }

    function getTituloAnuncion() {
        return $this->tituloAnuncion;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getUbicacion() {
        return $this->ubicacion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getFoto() {
        return $this->foto;
    }

    function getPropietario() {
        return $this->propietario;
    }

    function setIdInmueble($idInmueble) {
        $this->idInmueble = $idInmueble;
    }

    function setTipoInmueble($tipoInmueble) {
        $this->tipoInmueble = $tipoInmueble;
    }

    function setTipoOperacion($tipoOperacion) {
        $this->tipoOperacion = $tipoOperacion;
    }

    function setAmueblado($amueblado) {
        $this->amueblado = $amueblado;
    }

    function setHabitaciones($habitaciones) {
        $this->habitaciones = $habitaciones;
    }

    function setBaños($baños) {
        $this->baños = $baños;
    }

    function setMetroCuadrado($metroCuadrado) {
        $this->metroCuadrado = $metroCuadrado;
    }

    function setAntiguedad($antiguedad) {
        $this->antiguedad = $antiguedad;
    }

    function setEstrato($estrato) {
        $this->estrato = $estrato;
    }

    function setParqueadero($parqueadero) {
        $this->parqueadero = $parqueadero;
    }

    function setAdministracion($administracion) {
        $this->administracion = $administracion;
    }

    function setPisos($pisos) {
        $this->pisos = $pisos;
    }

    function setTituloAnuncion($tituloAnuncion) {
        $this->tituloAnuncion = $tituloAnuncion;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setPropietario($propietario) {
        $this->propietario = $propietario;
    }




}
