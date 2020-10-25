<?php
require_once 'claseConexion.php';
require_once 'claseRegistroInmueble.php';

class daoRegistroInmueble {
    
    public static function ingresarInmueble($p) {
        $con=new claseConexion();
        $sql="INSERT INTO `inmueble`(`idInmueble`, `tipo_inmueble`, `tipo_operacion`, `amueblado`, `habitaciones`, `baños`, `metro_Cuadrado`, `antiguedad`, `estrato`, `parqueadero`, `administracion`, `pisos`, `titulo_Anuncio`, `descripcion`, `ubicacion`, `precio`, `foto`, `propietario_id`) "
        . "VALUES ('".$p->getIdInmueble()."'"
                . ",'".$p->getTipoInmueble()."'"
                . ",'".$p->getTipoOperacion()."'"
                . ",'".$p->getAmueblado()."'"
                . ",'".$p->getHabitaciones()."'"
                . ",'".$p->getBaños()."'"
                . ",'".$p->getMetroCuadrado()."'"
                . ",'".$p->getAntiguedad()."'"
                . ",'".$p->getEstrato()."'"
                . ",'".$p->getParqueadero()."'"
                . ",'".$p->getAdministracion()."'"
                . ",'".$p->getPisos()."'"
                . ",'".$p->getTituloAnuncion()."'"
                . ",'".$p->getDescripcion()."'"
                . ",'".$p->getUbicacion()."'"
                . ",'".$p->getPrecio()."'"
                . ",''"
                . ",'1')";
        
        
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();{
    }
    }
    public static function listarinmueble() {
        $con=new claseConexion();
        $sql="SELECT `idInmueble`, `tipo_inmueble`, `tipo_operacion`, `amueblado`, `habitaciones`, `baños`, `metro_Cuadrado`, `antiguedad`, `estrato`, `parqueadero`, `administracion`, `pisos`, `titulo_Anuncio`, `descripcion`, `ubicacion`, `precio`, `foto`, `propietario_id` FROM `inmueble` WHERE 1";
        $cont=$con->ejecutarConsulta($sql);
        $con->cerrarConexion();
        return $cont;
    }
}
