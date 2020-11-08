<?php

class claseConexion {
    /*Datos de conexion a la base de datos*/
    private $servidor;
    private $usuario;
    private $clave;
    private $basedatos;
    private $conexion;

    public function __construct() {
        $this->servidor="denl.mysql6.gear.host";
        $this->usuario="proyectointe";
        $this->clave="El9d!Jcr?71q";
        $this->basedatos="proyectointe";


        $this->conexion= new mysqli($this->servidor, $this->usuario,
                $this->clave, $this->basedatos);
        if(mysqli_connect_errno()){
            echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
        }
    }

    public function ejecutarConsulta($sql){
        //echo $sql;
        $contenedor=$this->conexion->query($sql);
        return $contenedor->fetch_all();
    }

    public function ejecutarActualizacion ($sql){
        $this->conexion->query($sql);
    }

    public function cerrarConexion(){
        $this->conexion->close();
    }

}
