<?php include_once '../vistas/session.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>PRODUCTOS</title>
  </head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <body>
    <?php include_once './narvarusu.php';?>
      
            <h2 class="mx-auto" style="width: 200px;">INMUEBLES</h2>
            
            
            <!-- Button trigger modal -->
            
            
            <br>
            <table class="table table-borderless">
              <thead>
                
                <th scope="col">Tipo</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Habitaciones</th>
                <th scope="col">Baños</th>
                <th scope="col">Precio</th>
              </thead>
              <tbody>
              <?php foreach (daoRegistroInmueble::listarinmueble() as $fila): ?>
            <tr>
              <td><?=$fila[1]?></td>
              <td><?=$fila[14]?></td>
              <td><?=$fila[4]?></td>
              <td><?=$fila[5]?></td>
              <td><?=$fila[15]?></td>
              
              <td>
                  <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modaldes">
                Descripcion
              </button>

              <!-- Modal -->
              <?php include_once '../vistas/modalDescripcion.php';?>
              </td>
              
              <td>
                  <button class="btn btn-outline-success">Contacto</button>
              </td>
              
                
                  <td><!-- Button trigger modal -->
                      <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal" <a href="modalEditarInmueble.php?ref=<?=$fila[0]?>"></a>
                      Editar
                    </button>
                      <?php// include_once '../vistas/modalEditarInmueble.php';?>
                    </td>
                    <td>
                        <a class="btn btn-info" href="editarInmueble.php">Editar</a>
                    </td>
              </td>
               <td>
                  <button class="btn btn-outline-danger">Eliminar</button>
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



