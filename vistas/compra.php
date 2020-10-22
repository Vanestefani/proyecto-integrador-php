<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRO</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <?php $con =mysqli_connect("localhost" , "root" , "" , "infraestructura") or die (error);?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        HOME.COLOMBIA@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +57 3138455086
                    </div>
                </div>
                <div class="ht-right">
                    <a href="login.php" class="login-panel"><i class="fa fa-user"></i>LOGIN</a>
                    <div class="lan-selector">
                        
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Categoria</button>
                            <div class="input-group">
                                <input type="text" placeholder="Que estas buscando?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Categorias</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="shop.php">Casas - Venta</a></li>
                            <li><a href="shop.php">Casa - Arriendo</a></li>
                            <li><a href="shop.php">Apartamento - Venta</a></li>
                            <li><a href="shop.php">Apartamento - Arriendo</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.php">INICIO</a></li>
                        <li><a href="./shop.php">TIENDA</a></li>
                        
                        <li><a href="./blog.php">BLOG</a></li>
                        <li><a href="./contact.php">CONTACTENOS</a></li>
                        <li><a href="#">MAS</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.php">QUIENES SOMOS</a></li>
                                <li><a href="./faq.php">CALIFICANOS</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>REGISTRO</h2>
                        <form method="post" action="register.php" >
                            <div class="group-input">
                                <label >NOMBRE</label>
                                <input type="text" name="nombre" placeholder="Escriba su nombre">
                            </div>
                            <div class="group-input">
                                <label >APERLLIDO</label>
                                <input type="text" name="apellido" placeholder="Escriba su apellido">
                            </div>
                            <div class="group-input">
                                <label >CORREO</label>
                                <input type="text" name="correo" placeholder="Escriba su correo">
                            </div>
                            <div class="group-input">
                                <label >CONTRASEÑA</label>
                                <input type="password" name="contraseña" placeholder="Escriba su contraseña">
                            </div>
                            <div class="group-input">
                                <label >USUARIO</label>
                                <input type="text" name="usuario" placeholder="Escriba su usuario" >
                            </div>
                            <div class="group-input">
                                <label >TELEFONO</label>
                                <input type="text" name="telefono" placeholder="Escriba su usuario">
                            </div>
                            
                            
                            <button type="submit"  name="insert" value="insertar datos" class="site-btn register-btn">REGISTRARME</button>
                        </form>
                        <?php 
        if (isset($_POST['insert'])) {
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$usuario = $_POST['usuario'];
	$telefono = $_POST['telefono'];

	$insertar = "INSERT INTO registro ( nombre , apellido , correo , contraseña , usuario , telefono) VALUES ('$nombre' , '$apellido' , '$correo' , '$contraseña' , '$usuario' , '$telefono')";		
    
        $ejecutar = mysqli_query( $con , $insertar);

	if ($ejecutar) {
		echo "<h3>insertado correctamente</h3>";
	}
        }	
        ?>
                        
                        <div class="switch-login">
                            <a href="./login.php" class="or-login">LOGIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Register Form Section End -->
    
    <!-- Partner Logo Section Begin -->
    
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Direccion : carrera 151 b # 143 -32 <br> Bogota Colombia</li>
                            <li>Telefono : 3138455078</li>
                            <li>HOME.COLOMBIA@gmail.com</li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>INFORMACION</h5>
                        <ul>
                            <li><a href="blog-details.php">QUIENES SOMOS </a></li>
                            <li><a href="shop.php">TIENDA</a></li>
                            <li><a href="contact.php">CONTACTO</a></li>
                            <li><a href="blog.php">BLOG</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>CUENTA</h5>
                        <ul>
                            <li><a href="register.php">REGISTRO</a></li>
                            <li><a href="login.php">LOGIN</a></li>
                            
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

    