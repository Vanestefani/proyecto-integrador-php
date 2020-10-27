<?php
    require_once '../modelo/claseConexion.php';
    require_once '../modelo/claseLogin.php';
    require_once '../modelo/daoClaseLogin.php';
    require_once '../modelo/claseRegistroUsuario.php';
    require_once '../modelo/daoRegistroUsuario.php';
    require_once '../modelo/claseRegistroInmueble.php';
    require_once '../modelo/daoRegistroInmueble.php';


    switch($_GET['a']){
        case 'entrada':
            session_start();
            $usu=$_POST['usuario'];
            $pass=$_POST['pass'];

            $l=new claseLogin();
            $u=$_POST['usuario'];
            $p=$_POST['pass'];
            $l= daoClaseLogin::buscarPorUsuario($u);
            if ($l[4]==$p) {
                session_start();
                $_SESSION['user']=$u;
                header("Location: ../vistas/vistaPrincipalVenta.php");
            }
            else{
                header("Location: ../vistas/login.php");
            }
            break;


        case 'registrar':
            $p=new claseRegistroUsuario();
            $p->setNombre($_POST['usuario']);
            $p->setCelular($_POST['celular']);
            $p->setEmail($_POST['email']);
            $p->setPassword($_POST['pass']);
            daoRegistroUsuario::ingresarDato($p);
            if (true) {
                header("Location: ../vistas/login.php");
            }else{
                header("Location: ../vistas/registroUsuario.php");
            }
            break;

        case 'ingresarventa':
            $p=new claseRegistroInmueble();
            $p->setIdInmueble($_POST['']);
            $p->setTipoInmueble($_POST['tipo']);
            $p->setTipoOperacion($_POST['modo']);
            $p->setAmueblado($_POST['amueblado']);
            $p->setHabitaciones($_POST['habitaciones']);
            $p->setBaños($_POST['baño']);
            $p->setMetroCuadrado($_POST['metro']);
            $p->setAntiguedad($_POST['antiguedad']);
            $p->setEstrato($_POST['estrato']);
            $p->setParqueadero($_POST['parqueadero']);
            $p->setAdministracion($_POST['administracion']);
            $p->setPisos($_POST['piso']);
            $p->setTituloAnuncion($_POST['anuncio']);
            $p->setDescripcion($_POST['descripcion']);
            $p->setUbicacion($_POST['ubicacion']);
            $p->setPrecio($_POST['precio']);
            //$p->setFoto($_POST['foto']);
            daoRegistroInmueble::ingresarInmueble($p);
            header('Location: ../vistas/vistaPrincipalVenta.php');
            break;

        case '':
        break;
    }

