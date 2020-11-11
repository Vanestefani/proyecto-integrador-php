<?php
require_once '../modelo/daoRegistroInmueble.php';
require_once '../modelo/claseRegistroInmueble.php';
$ref = daoRegistroInmueble::buscarPorReferencia($_GET['ref']);
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
            <a class="navbar-brand" href="#">HOME.COM</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            
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
                            <div class="sb-sidenav-menu-heading">GRAFICOS</div>
                            <a class="nav-link collapsed" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                GRAFICO
                               
                            </a>
                             <div class="sb-sidenav-menu-heading">USUARIOS</div>
                            
                            
                             <a class="nav-link collapsed" href="inmueble.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                INMUEBLES   
                               
                            </a>
                            <a class="nav-link collapsed" href="usuario.php"    >
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                USUARIOS
                               
                            </a>
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
                        <h1 class="mt-4">EDITAR INMUEBLES</h1>
                        
                        <form action="../controlador/controlador.php?a=editarInmueble" method="POST" enctype="multipart/form-data">
                            <table class="table ">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td><input type="text" name="id" size="15" value="<?=$ref[0]?>" readonly="readonly"></td>
                                    </tr>
                                    <tr>
                                        <td>INMUEBLE</td>
                                        <td><input type="text" name="nombre" size="15" value="<?=$ref[1]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>OPERACION</td>
                                        <td><input type="text" name="celular" size="15" value="<?=$ref[2]?>" ></td>
                                    </tr>
                                    <tr>
                                        <td>AMUEBLADO</td>
                                        <td><input type="text" name="email" size="15" value="<?=$ref[3]?>" ></td>
                                    </tr>
                                    <tr>
                                        <td>HABITACIONES</td>
                                        <td><input type="text" name="pass" size="15" value="<?=$ref[4]?>" ></td>
                                    </tr>
                                    <tr>
                                        <td>BAÑOS</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[5]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>METRO CUADRADO</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[6]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>ANTIGUEDAD</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[7]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>ESTRATO</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[8]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>PARQUEADERO</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[9]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>ADMINISTRACION</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[10]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>PISOS</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[11]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>TITULO</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[12]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>DESCRIPCION</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[13]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>UBICACION</td>
                                        <td><input type="text" name="privilegio" size="15" value="<?=$ref[14]?>"></td>
                                    </tr>
                                    <tr>
                                        <td>PRECIO</td>
                                        <td><input type="number" name="privilegio" size="15" value="<?=$ref[15]?>"></td>
                                    </tr>
                                    
                                    <br>
                                    <br>
                                    <tr>
                                        <td><input type="submit" value="Actualizar" type="button" class="btn btn-primary"></td>
                                        <td><a href="inmueble.php" type="button" class="btn btn-danger">Cerrar</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        
                       
                        
                        
                        
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

