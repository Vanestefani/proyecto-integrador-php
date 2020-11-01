<?php
require_once '../modelo/daoRegistroInmueble.php';
require_once '../modelo/claseRegistroInmueble.php';
//$ref = daoRegistroInmueble::EditarDatos($_GET['ref']);
session_start();
error_reporting(0);
$varsesion = $_SESSION['user'];
if($varsesion==NULL || $varsesion = ''){
    echo 'usted no tiene autorizacion';
    die();
}
?>
