<?php
   session_start();
   ?>
<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v4.1.1">
      <title>LOGIN</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <link href="./css/login.css" rel="stylesheet">
   </head>
   <body>
      <section class="login-block">
         <div class="container">
         <div class="row">
         <!--Login Formulario-->
         <div class="col-md-4 login-sec">
         <center> <img  width="200px"src="./img/logo azul.png"></center>
            <h2 class="text-center"></h2>
            <br>
            <form action="../controlador/controlador.php?a=entrada&entradaad" method="post" enctype="multipart/form-data" class="login-form">
               <div class="form-group">
                  <input class="form-control input_T" placeholder="Usuario" type="text" required name="usuario">
               </div>
               <div class="form-group">
                  <input class="form-control input_T" placeholder="Contraseña" class="form-control" type="password" required name="pass">
               </div>
               <br>

               <div class="form-group">
                  <center>
                     <input type="submit" name="validar" value="Ingresar" class="btn btn-ingresar">
                     <a class="btn btn-registro" href="registroUsuario.php" >Registro</a>
                  </center>
               </div>
               <div class="form-group">
               <a href="#">Olvide mi contraseña</a>
              </div>
            </form>
         </div>
         <!--Fin Login Formulario-->
         <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                     <img class="d-block img-fluid img-baner" src="./img/fondo.png" alt="First slide">
                     <div class="carousel-caption d-none d-md-block">
                        <div class="banner-text">
                           <h2>Home.com</h2>
                           <p>Las mejores casas a los mejores precios</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script  src=="./js/login.js"  ></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   </body>
</html>