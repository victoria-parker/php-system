<?php
## CRUD de Marcas ##

#Listar Marca
    function listarMarca(){
        $link=conectar();
        $sql='SELECT idMarca, mkNombre from marcas';
        $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
        return $resultado;
    }

#Agregar Marca
    function agregarMarca(){
        $mkNombre=$_POST['mkNombre'];
        $link=conectar();
        $sql="insert into marcas set mkNombre='".$mkNombre."'";
        $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
        return $resultado;
    }

/**
 * listarMarcas()
 * verMarcaPorId()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 */