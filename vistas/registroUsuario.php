<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v4.1.1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <link href="./css/registro.css" rel="stylesheet">

      <title>REGISTRO</title>
   </head>
   <body >
      <section class="login-block">
         <div class="container">
         <div class="row">
            <div class="col-md-12 login-sec">
               <h2 id=titulo><center>REGISTRO</center></h2>
               <form action="../controlador/controlador.php?a=registrar" method="post" enctype="multipart/form-data" class="login-form">
                  <div class="form-group">
                     <input class="form-control input_X" placeholder="Usuario" type="text" required name="usuario">
                  </div>
                  <div class="form-group">
                     <input class="form-control input_X" placeholder="Celular" type="text" required name="celular">
                  </div>
                     <div class="form-group">
                        <input class="form-control input_X" placeholder="Email" type="text" required name="email">
                     </div>
                    <center>                     <div class="form-group">
                        <input class="form-control input_X" placeholder="Password" type="password" required name="pass">
                     </div>
                     <br/>
                     <input type="submit" name="validar" value="Registrar" class="btn btn-ingresar">

                     <a class="btn btn-registro" href="../vistas/index.php">Volver</a>
                     </center>

                  </form>
               </div>
            </div>
         </div>
      </section>
   </body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>