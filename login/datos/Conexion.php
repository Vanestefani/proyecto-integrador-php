<?php

class Conexion
{

    /**
     * Conexión a la base datos
     *
     * @return PDO
     */
    public static function conectar()
    {
        try {

            $cn = new PDO("sqlsrv:host=homeinmo.database.windows.net;dbname=home", "homeadmin", "Batman123");
           
            
            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
            
        }
    }

}
