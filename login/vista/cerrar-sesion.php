//contiene el Cierre De Seccion de los Usuarios al Realizar el ingreso
<?php
session_start();

session_destroy(); 
session_unset();

header("location:login.php");
