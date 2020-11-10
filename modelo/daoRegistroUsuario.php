<?php
include_once 'claseConexion.php';
include_once 'claseRegistroUsuario.php';

class daoRegistroUsuario {

    public static function ingresarDato($p) {
        $con=new claseConexion();
        $sql="INSERT INTO `usuario`( `nombre`, `celular`, `email`, `password`, `fecha_creacion`, `privilegio`, `foto`, `verificacion`, `modo`) "
                . "VALUES ('".$p->getNombre()."'"
                . ",'".$p->getCelular()."'"
                . ",'".$p->getEmail()."'"
                . ",'".$p->getPassword()."'"
                . ",'','2'"
                . ",'".$p->getFoto()."'"
                . ",''"
                . ",'')";
        print(sql);
        $con->ejecutarActualizacion($sql);
        $con->cerrarConexion();{
    }
    }
    public static function  listarUsuario(){
        $con=new claseConexion();
        $sql="SELECT `idUsuario`, `nombre`, `celular`, `email`, `password`, `fecha_creacion`, `privilegio`, `foto`, `verificacion`, `modo` FROM `usuario` WHERE 1";
        $cont=$con->ejecutarConsulta($sql);
        $con->cerrarConexion();
        return $cont;
    }
    
    public static function buscarPorReferencia ($ref){
        $con=new claseConexion();
        $sql="SELECT * FROM `usuario` WHERE idUsuario ='$ref'";
        $cont=$con ->ejecutarConsulta($sql);
        $con->cerrarConexion();
        return $cont[0];
    }
    
}
