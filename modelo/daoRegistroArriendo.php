<?php
include_once 'claseConexion.php';
include_once 'claseRegistroArriendo.php';

class daoRegistroArriendo {
    public static function ingresarDato($p) {
        $con=new claseConexion();
        $sql="INSERT INTO `arriendo`(`Id`, `arriendo`, `tipo`, `amueblados`, `habitaciones`, `baños`, `metro_cuadrado`, `antiguedad`, `estrato`, `parqueadero`, `administracion`, `pisos`, `num_contacto`, `titulo_anuncio`, `descripcion`, `ubicacion`, `precio`) "
        . "VALUES ('0','arriendo','".$p->getTipo()."','".$p->getAmueblado()."','".$p->getHabitaciones()."','".$p->getBaños()."','".$p->getMetro_cuadrado()."','".$p->getAntiguedad()."','".$p->getEstrado()."','".$p->getParqueadero()."','".$p->getAdministracion()."','".$p->getPisos()."','".$p->getNum_contacto()."','".$p->getTitulo_anuncio()."','".$p->getDescripcion()."','".$p->getUbicacion()."','".$p->getPrecio()."')";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
    }
    
    public static function ListarDatos() {
        $con=new claseConexion();
            $cont=$con->ejecutarConsulta(
                   "SELECT * FROM `arriendo` WHERE 1"
                    );
            $con->cerrarConexion();
            return $cont;
    }
}
