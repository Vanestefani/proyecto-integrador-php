<?php
require_once '../modelo/claseRegistroUsuario.php';
require_once '../modelo/daoRegistroUsuario.php';
require_once '../modelo/daoRegistroInmueble.php';
require_once '../modelo/claseRegistroInmueble.php';
require_once '../vistas/sesiones.php';
session_start();
$usu = $_SESSION['user'];
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>INMUEBLES</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">HOME.COM</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <h3 class="navbar-brand">HOME.COLOMBIA@GMAIL.COM / CONTACTENOS:3138455086</h3>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <a href="../controlador/controlador.php?a=salir"><button  type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="left">Cerrar Sesion</button></a>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            <a class="nav-link" href="vista_Principal.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                PRINCIPAL
                            </a>
                            <?php if ($pr==1) {?>
                            <div class="sb-sidenav-menu-heading">GRAFICOS</div>
                            <a class="nav-link collapsed" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                GRAFICO
                               
                            </a>
                            <?php } ?> 
                             <div class="sb-sidenav-menu-heading">USUARIOS</div>
                            
                            
                             <a class="nav-link collapsed" href="inmueble.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                INMUEBLES   
                               
                            </a>
                             <?php if ($pr==1) {?>
                            <a class="nav-link collapsed" href="usuario.php"    >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                USUARIOS
                               
                            </a>
                              <?php } ?> 
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading"></div>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">BIENVENIDO</div>
                        HOME.COM
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">INMUEBLES</h1>
                        
                       
                        <div><button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#exampleModal">
              AGREGAR INMUEBLE
            </button>
      <?php include_once '../vistas/registroVenta.php';?></div>
                        <br>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                INMUEBLE
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>INMUEBLE</th>
                                                <th>OPERACION</th>
                                                <th>ANUNCIO</th>
                                                <th>UBICACION</th>
                                                <th>PRECIO</th>
                                                <th>DESCRIPCION</th>
                                                <th>CONTACTAR</th>
                                                <?php if ($pr==1) {?>
                                                <th>EDITAR</th>
                                                <th>ELIMINAR</th>
                                                <?php }?>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                             <?php foreach (daoRegistroInmueble::listarinmueble() as $fila): ?>
                                            <tr>
                                                <td><?=$fila[0]?></td>
                                                <td><?=$fila[1]?></td>
                                                <td><?=$fila[12]?></td>
                                                <td><?=$fila[14]?></td>
                                                <td><?=$fila[13]?></td>
                                                <td><?=$fila[15]?></td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modaldes">
                                                  Descripcion
                                                </button>

                                                <!-- Modal -->
                                                <?php include_once '../vistas/modalDescripcion.php';?>

                                                </td>
                                                <td>
                                                    <a type="button" class="btn btn-outline-success" href="../chat/chat2/index.php">Contactar</a>
                                                </td>
                                                <?php if ($pr==1) {?>
                                                <td>
                                                    <a type="button" class="btn btn-outline-secondary" href="vistaEditarInmueble.php?ref=<?=$fila[0]?>" >Editar</a>
                                                </td>
                                                <td>
                                                    <a type="button" class="btn btn-outline-danger" href="../controlador/controlador.php?a=eliminarInmueble&ref=<?=$fila[0]?>">Eliminar</a>
                                                </td>
                                                <?php } ?>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

