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
      
            <h2 class="mx-auto" style="width: 100px;">EDITAR</h2>
            <div class="container">
                <form action="../controlador/controlador.php?a=editarInmueble" method="post" enctype="multipart/form-data">
              <table class="table">
                  <tr>
                        <td>Tipo Inmueble</td>
                        <td><input type="text" name="inmueble" size="15" value="<?=$ref[1]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Tipo operacion</td>
                        <td><input type="text" name="operacion" size="15" value="<?=$ref[2]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Amueblado</td>
                        <td><input type="text" name="amueblado" size="15" value="<?=$ref[3]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>habitaciones</td>
                        <td><input type="text" name="habitaciones" size="15" value="<?=$ref[4]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Baños</td>
                        <td><input type="text" name="baños" size="15" value="<?=$ref[5]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Metro Cuadrado</td>
                        <td><input type="text" name="metro" size="15" value="<?=$ref[6]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Antiguedad</td>
                        <td><input type="text" name="antiguedad" size="15" value="<?=$ref[7]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Estrato</td>
                        <td><input type="text" name="estrato" size="15" value="<?=$ref[8]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Parqueadero</td>
                        <td><input type="text" name="parqueadero" size="15" value="<?=$ref[9]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Administracion</td>
                        <td><input type="text" name="administracion" size="15" value="<?=$ref[10]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>pisos</td>
                        <td><input type="text" name="pisos" size="15" value="<?=$ref[11]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Titulo Anuncio</td>
                        <td><input type="text" name="titulo" size="15" value="<?=$ref[12]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Referencia</td>
                        <td><input type="text" name="referencia" size="15" value="<?=$ref[13]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Ubicacion</td>
                        <td><input type="text" name="ubicacion" size="15" value="<?=$ref[14]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Precio</td>
                        <td><input type="text" name="precio" size="15" value="<?=$ref[15]?>" readonly="readonly"></td>
                    </tr>
                     <tr>
                        <td>Foto</td>
                        <td><input type="text" name="foto" size="15" value="<?=$ref[16]?>" readonly="readonly"></td>
                    </tr>
                     
              </table>
              <button type="button" class="btn btn-outline-success">Editar</button>
              <a class="btn btn-outline-danger" href="vistaProductos.php">Cancelar</a>
              
          </form>
            </div>
            
           
 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
