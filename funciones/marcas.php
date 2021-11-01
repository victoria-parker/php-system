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

//    Funcion para verificar que haya productos con una marca
    function verificarMarca(){
        $idMarca=$_GET['idMarca'];
        $link=conectar();
        $sql="SELECT 1 FROM productos WHERE idMarca=".$idMarca; //select 1 porque no interesa listar, me importa la cantidad de rows que va a devolver
        $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
        $cantidad=mysqli_num_rows($resultado);
        return $cantidad;
    }
/**
 * listarMarcas()
 * verMarcaPorId()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 */