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
                . ",'".$p->getPropietario()."')";
        
        
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
    public static function  EditarDatos($p){
        $con=new claseConexion();
        $sql="UPDATE `inmueble` SET `idInmueble`='".$p->getIdInmueble()."'"
                . ",`tipo_inmueble`='".$p->getTipoInmueble()."'"
                . ",`tipo_operacion`='".$p->getTipoOperacion()."'"
                . ",`amueblado`='".$p->getAmueblado()."'"
                . ",`habitaciones`='".$p->getHabitaciones()."'"
                . ",`baños`='".$p->getBaños()."'"
                . ",`metro_Cuadrado`='".$p->getMetroCuadrado()."'"
                . ",`antiguedad`='".$p->getAntiguedad()."'"
                . ",`estrato`='".$p->getEstrato()."')"
                . ",`parqueadero`='".$p->getParqueadero()."'"
                . ",`administracion`='".$p->getAdministracion()."'"
                . ",`pisos`='".$p->getPisos()."'"
                . ",`titulo_Anuncio`='".$p->getTituloAnuncion()."'"
                . ",`descripcion`='".$p->getDescripcion()."')"
                . ",`ubicacion`='".$p->getUbicacion()."'"
                . ",`precio`='".$p->getPrecio()."'"
                . ",`foto`='".$p->getFoto()."'"
                . ",`propietario_id`=[] WHERE 1";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
    }
    public static function EliminarInmueble($ref) {
        $con=new claseConexion();
        $sql="DELETE FROM `inmueble` WHERE idInmueble='".$ref."'";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
    }
}
