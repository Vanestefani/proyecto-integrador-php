<?php
include_once 'claseConexion.php';
include_once 'claseRegistroUsuario.php';

class daoRegistroUsuario {
    
    public static function ingresarDato($p) {
        $con=new claseConexion();
        $sql="INSERT INTO `usuario`(`idUsuario`, `nombre`, `celular`, `email`, `password`, `fecha_creacion`, `privilegio`, `foto`, `verificacion`, `modo`) "
                . "VALUES ('','".$p->getNombre()."','".$p->getCelular()."','".$p->getEmail()."','".$p->getPassword()."','','2','".$p->getFoto()."','','')";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();{
    }
    }
}
