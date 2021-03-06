<?php
require_once '../modelo/claseRegistroUsuario.php';
require_once '../modelo/daoRegistroUsuario.php';
session_start();
$pr = $_SESSION['privilegio'];
$usu = $_SESSION['user'];
if ($pr==2) {
    header("Location: login.php");
}
if(!isset($usu)){
    header("Location: login.php");
}
error_reporting(0);
$varsesion = $_SESSION['user'];
if($varsesion==NULL || $varsesion = ''){
    echo 'usted no tiene autorizacion';
    die();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>USUARIO</title>
  </head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <body class="mx-auto" style="" background="../imagenes/1.jpg">
    <?php include_once './narvaradmin.php';?>   
    <h2 class="mx-auto" style="width: 200px;">USUARIOS</h2>
    <div class="container-lg">
            <br>
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
  NUEVO USUARIO
</button>

            <a href="vistaInmuebles.php" class="btn btn-outline-success">INMUEBLES</a>
            <a href="grafica/dist/index.php" class="btn btn-outline-info">GRAFICAS</a>
            <a href="grafica/dist/index.php" class="btn btn-outline-warning">USUARIOS.PDF</a>
            <a href="grafica/dist/index.php" class="btn btn-outline-danger">INMUEBLES.PDF</a>
            
<!-- Modal -->
<?php include_once '../vistas/registrarUsuarioAdmin.php';?>
            
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Celular</th>
                  <th scope="col">Email</th>
                  <th scope="col">Pass</th>
                  
                </tr>
              </thead>
              <tbody>
                  <?php foreach (daoRegistroUsuario::listarUsuario() as $fila): ?>
                <tr>
                  <td><?=$fila[0]?></td>
                  <td><?=$fila[1]?></td>
                  <td><?=$fila[2]?></td>
                  <td><?=$fila[3]?></td>
                  <td><?=$fila[4]?></td>
                  
                  
                  <td>
                  <button type="button" class="btn btn-outline-info">Editar</button>
                  <button type="button" class="btn btn-outline-danger">Eliminar</button>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>