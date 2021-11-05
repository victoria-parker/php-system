<?php
##Atenticar!

function login(){
    $usuEmail=$_POST['usuEmail'];
    $usuPass=$_POST['usuPass'];
    $link=conectar();

    $sql="SELECT usuNombre,usuApellido FROM usuarios where usuEmail='".$usuEmail."'and usuPass='".$usuPass."';";

    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));

    $cantidad=mysqli_num_rows($resultado);

    if($cantidad == 0){
        //redireccion a form login porque se logueo mal
        header('location:formLogin.php?error=1');
    }else{
        //redireccion a admin
        $_SESSION['login']=1;
        $datos=mysqli_fetch_assoc($resultado);
        $_SESSION['usuNombre']=$datos['usuNombre'];
        $_SESSION['usuApellido']=$datos['usuApellido'];
        header('location:admin.php');
    }
}

function autenticar(){
    if(!isset($_SESSION['login'])){
        header('location:formLogin.php?error=2');
    }
}
function logout(){
    $datosUsuario=$_SESSION['usuNombre'].' '.$_SESSION['usuApellido'];
    session_unset();
    session_destroy();

    //redireccion con demora
    header('refresh:3;url=index.php');
    return $datosUsuario;
}
/**
 * login() listo
 * autenticar()listo
 * logout()listo
 */