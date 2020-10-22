<?php
include_once 'claseConexion.php';
include_once 'claseRegistroUsuario.php';

class daoRegistroUsuario {
    
    public static function ingresarDato($p) {
        $con=new claseConexion();
        $sql="INSERT INTO `usuarios`(`id`, `nombre`, `usuario`, `email`, `password`, `privilegio`) "
                . "VALUES ('0','".$p->getNombre()."','".$p->getUsuario()."','".$p->getEmail()."','".$p->getPassword()."','2')";
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();
    }
}
