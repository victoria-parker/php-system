<?php
## CRUD de Marcas ##

#Listar Marca
    function listarMarca(){
        $link=conectar();
        $sql='SELECT idMarca, mkNombre from marcas';
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