<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">HOME.COM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="vistaPrincipalVenta.php.php">PUBLICACIONES</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="vistaProductos.php">PRODUCTOS</a>
      </li>
      
      <li class="nav-item">
          <a class="nav-link" href="vistaClientes.php">CLIENTES</a>
      </li>
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
              Nuevo Registro Vender
            </button>
      
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
              Nuevo Registro Arriendo
            </button>

            <!-- Modal -->
            <?php include_once '../vistas/RegistroInmueble.php';?>
      
    </ul>
  </div>
            <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left">Cerrar Sesion</button>
</nav>
