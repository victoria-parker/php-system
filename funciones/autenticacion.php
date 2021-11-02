<?php
##Atenticar!

function login(){
    $usuEmail=$_POST['usuEmail'];
    $usuPass=$_POST['usuPass'];
    $link=conectar();

    $sql="SELECT 1 FROM usuarios where usuEmail='".$usuEmail."'and usuPass='".$usuPass."';";

    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));

    $cantidad=mysqli_num_rows($resultado);
    if($cantidad == 0){
        ###########autenticacion por hacer #############
        //redireccion a form login
        header('location:formLogin.php');
    }else{
        //redireccion a admin
        header('location:admin.php');
    }
}
/**
 * login()
 * autenticar()
 * logOut()
 */