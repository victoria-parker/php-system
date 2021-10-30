<?php
## CRUD de Usuarios ##

#listar Usuarios
function listarUsuarios(){
    $link=conectar();
    $sql='SELECT idUsuario, usuNombre, usuApellido, usuEmail, usuPass, usuEstado FROM usuarios';
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;
}

function agregarUsuario(){
    $usuNombre=$_POST['usuNombre'];
    $usuApellido=$_POST['usuApellido'];
    $usuEmail=$_POST['usuEmail'];
    $usuPass=$_POST['usuPass'];

    $link=conectar();
    $sql="INSERT INTO usuarios (usuNombre,usuApellido,usuEmail,usuPass,usuEstado)
          values ('".$usuNombre."',
                  '".$usuApellido."',
                  '".$usuEmail."',
                  '".$usuPass."',
                  1);";

    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;
}
/**
 * listarUsuario()
 * verUsuarioPorId()
 * agregarUsuario()
 * modificarUsuario()
 * eliminarUsuario()
 */