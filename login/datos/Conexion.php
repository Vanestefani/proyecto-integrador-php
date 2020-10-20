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

            $cn = new PDO("sqlsrv:server = tcp:homeinmo.database.windows.net,1433; Database = home", "homeadmin", "{Batman123}");
           
            
            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
            
        }
    }

}
