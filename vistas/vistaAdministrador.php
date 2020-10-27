<?php
require_once '../modelo/claseRegistroUsuario.php';
require_once '../modelo/daoRegistroUsuario.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>ADMINISTRADOR</title>
  </head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <body>
    <?php include_once './narvaradmin.php';?>
      
            <h2 class="mx-auto" style="width: 200px;">USUARIOS</h2>
            <br>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  NUEVO USUARIO
</button>

            <a href="vistaInmuebles.php" class="btn btn-success">INMUEBLES</a>
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
                  <th scope="col">fecha Creacion</th>
                  <th scope="col">Email</th>  
                  <th scope="col">privilegio</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Verificacion</th>
                  <th scope="col">Modo</th>
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
                  <td><?=$fila[5]?></td>
                  <td><?=$fila[6]?></td>
                  <td><?=$fila[7]?></td>
                  <td><?=$fila[8]?></td>
                  <td><?=$fila[9]?></td>
                  
                  <td>
                  <button type="button" class="btn btn-success">Editar</button>
                  <button type="button" class="btn btn-danger">Eliminar</button>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>

