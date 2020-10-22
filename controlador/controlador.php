<?php
    require_once '../modelo/claseConexion.php';
    require_once '../modelo/claseLogin.php';
    require_once '../modelo/daoClaseLogin.php';
    require_once '../modelo/claseRegistroUsuario.php';
    require_once '../modelo/daoRegistroUsuario.php';
    require_once '../modelo/claseRegistroVenta.php';
    require_once '../modelo/daoRegistroVenta.php';
    require_once '../modelo/claseRegistroArriendo.php';
    require_once '../modelo/daoRegistroArriendo.php';
    
    switch($_GET['a']){
        case 'entrada':
            $l=new claseLogin();
            $u=$_POST['usuario'];
            $p=$_POST['pass'];
            $l= daoClaseLogin::buscarPorUsuario($u);
            if ($l[4]==$p) {
                header("Location: ../vistas/vistaPrincipalVenta.php");
            }
            else{
                header("Location: ../vistas/login.php");
            }
            break;
            
        case 'registrar':
            $p=new claseRegistroUsuario();
            $p->setNombre($_POST['nombre']);
            $p->setUsuario($_POST['usuario']);
            $p->setEmail($_POST['email']);
            $p->setPassword($_POST['pass']);
            daoRegistroUsuario::ingresarDato($p);
            header('Location: ../vistas/login.php');
            break;
        
        case 'ingresarventa':
            $p=new claseRegistroVenta();
            $p->setTipo($_POST['tipo']);
            $p->setAmueblado($_POST['amueblado']);
            $p->setHabitaciones($_POST['habitaciones']);
            $p->setBaños($_POST['baño']);
            $p->setMetro_cuadrado($_POST['metro']);
            $p->setAntiguedad($_POST['antiguedad']);
            $p->setEstrado($_POST['estrato']);
            $p->setParqueadero($_POST['parqueadero']);
            $p->setAdministracion($_POST['administracion']);
            $p->setPisos($_POST['piso']);
            $p->setNum_contacto($_POST['contacto']);
            $p->setTitulo_anuncio($_POST['anuncio']);
            $p->setDescripcion($_POST['descripcion']);
            $p->setUbicacion($_POST['ubicacion']);
            $p->setPrecio($_POST['precio']);
            daoRegistroVenta::ingresarDato($p);
            header('Location: ../vistas/vistaPrincipalVenta.php');
            break;
        
        case'ingresararriendo':
            $p=new claseRegistroArriendo();
            $p->setTipo($_POST['tipo']);
            $p->setAmueblado($_POST['amueblado']);
            $p->setHabitaciones($_POST['habitaciones']);
            $p->setBaños($_POST['baño']);
            $p->setMetro_cuadrado($_POST['metro']);
            $p->setAntiguedad($_POST['antiguedad']);
            $p->setEstrado($_POST['estrato']);
            $p->setParqueadero($_POST['parqueadero']);
            $p->setAdministracion($_POST['administracion']);
            $p->setPisos($_POST['piso']);
            $p->setNum_contacto($_POST['contacto']);
            $p->setTitulo_anuncio($_POST['anuncio']);
            $p->setDescripcion($_POST['descripcion']);
            $p->setUbicacion($_POST['ubicacion']);
            $p->setPrecio($_POST['precio']);
            daoRegistroArriendo::ingresarDato($p);
            header('Location: ../vistas/vistaPrincipalArriendo.php');
            break;
    }

