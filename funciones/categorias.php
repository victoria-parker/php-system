<?php
## CRUD de Categoria ##

#Listar Categoria
function listarCategoria(){
    $link=conectar();
    $sql='SELECT idCategoria, catNombre from categorias';
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;
}

/**
 * listarCategorias()
 * verCategoriaPorId()
 * agregarCategoria()
 * modificarCategoria()
 * eliminarCategoria()
 */