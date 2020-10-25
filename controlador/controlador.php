<?php
    require_once '../modelo/claseConexion.php';
    require_once '../modelo/claseLogin.php';
    require_once '../modelo/daoClaseLogin.php';
    require_once '../modelo/claseRegistroUsuario.php';
    require_once '../modelo/daoRegistroUsuario.php';
    
    
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
            $p->setNombre($_POST['nombre']);
            $p->setCelular($_POST['celular']);
            $p->setEmail($_POST['email']);
            $p->setPassword($_POST['pass']);
            $p->setFoto($_POST['foto']);
            daoRegistroUsuario::ingresarDato($p);
            header('Location: ../vistas/login.php');
            break;
        
        
        
        
    }

