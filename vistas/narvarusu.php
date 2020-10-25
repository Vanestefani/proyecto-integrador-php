<?php 
session_start();
$usu=$_SESSION['user'];

setcookie("usuario", "user", time()/ - 1);


?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">HOME.COM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="vistaPrincipalVenta.php">PUBLICACIONES</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="vistaProductos.php">PRODUCTOS</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Bienvenido: <?php echo $usu; ?></a>
      </li>
    </ul>
  </div>
            <a href="../vistas/destroy.php"><button  type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left">Cerrar Sesion</button></a>
</nav>
