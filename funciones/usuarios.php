<?php
## CRUD de Usuarios ##

#listar Usuarios
function listarUsuarios(){
    $link=conectar();
    $sql='SELECT idUsuario, usuNombre, usuApellido, usuEmail, usuPass, usuEstado FROM usuarios';
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