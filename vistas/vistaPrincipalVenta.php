<?php
require_once '../modelo/daoRegistroInmueble.php';
require_once '../modelo/claseRegistroInmueble.php';
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
  <body>
    <?php include_once './narvarusu.php';?>
    <h2 class="mx-auto" style="width: 500px;">PUBLICACIONES EN VENTA</h2>
    
    <div><button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#exampleModal">
              AGREGAR INMUEBLE
            </button>
      <?php include_once '../vistas/registroVenta.php';?></div>
    
    <br>
            <table class="table table-borderless">
         <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Tipo</th>
              <th scope="col">Titulo Anuncio</th>
              <th scope="col">Lugar</th>
              <th scope="col">Descripcion</th>
            </tr>
          </thead>
          
          <tbody>
              <?php foreach (daoRegistroInmueble::listarinmueble() as $fila): ?>
            <tr>
              <td><?=$fila[0]?></td>
              <td><?=$fila[1]?></td>
              <td><?=$fila[12]?></td>
              <td><?=$fila[12]?></td>
              <td><?=$fila[12]?></td>
              <td>
                  <button class="btn btn-outline-secondary">Descripcion</button>
              </td>
              <td>
                  <button class="btn btn-outline-danger">Contacto</button>
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
