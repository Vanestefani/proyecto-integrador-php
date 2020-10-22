<?php

class claseRegistroArriendo {
    private $id;
    private $venta;
    private $tipo;
    private $amueblado;
    private $habitaciones;
    private $baños;
    private $metro_cuadrado;
    private $antiguedad;
    private $estrado;
    private $parqueadero;
    private $administracion;
    private $pisos;
    private $num_contacto;
    private $titulo_anuncio;
    private $descripcion;
    private $ubicacion;
    private $precio;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getVenta() {
        return $this->venta;
    }

    function getTipo() {
        return $this->tipo;
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

    function getMetro_cuadrado() {
        return $this->metro_cuadrado;
    }

    function getAntiguedad() {
        return $this->antiguedad;
    }

    function getEstrado() {
        return $this->estrado;
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

    function getNum_contacto() {
        return $this->num_contacto;
    }

    function getTitulo_anuncio() {
        return $this->titulo_anuncio;
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

    function setId($id) {
        $this->id = $id;
    }

    function setVenta($venta) {
        $this->venta = $venta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
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

    function setMetro_cuadrado($metro_cuadrado) {
        $this->metro_cuadrado = $metro_cuadrado;
    }

    function setAntiguedad($antiguedad) {
        $this->antiguedad = $antiguedad;
    }

    function setEstrado($estrado) {
        $this->estrado = $estrado;
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

    function setNum_contacto($num_contacto) {
        $this->num_contacto = $num_contacto;
    }

    function setTitulo_anuncio($titulo_anuncio) {
        $this->titulo_anuncio = $titulo_anuncio;
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


}
