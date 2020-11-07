<?php 

$usu=$_SESSION['user'];

setcookie("usuario", "user", time()/ - 1);


?>
<nav class="navbar navbar-expand-lg navbar-dark bg-">
    <a class="navbar-brand" href="#">HOME.COM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="vistaPrincipalVenta.php">PUBLICACIONES</a>
      </li>
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bienvenido: <?php echo $usu; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="vistaProductos.php">INMUEBLE</a>
          <a class="dropdown-item" href="vistaAdministrador.php">ADMIN</a>
        </div>
      </li>
    </ul>
  </div>
            <a href="../controlador/controlador.php?a=salir"><button  type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left">Cerrar Sesion</button></a>
</nav>
