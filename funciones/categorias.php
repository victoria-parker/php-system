<?php
## CRUD de Categoria ##

#Listar Categoria
function listarCategoria(){
    $link=conectar();
    $sql='SELECT idCategoria, catNombre from categorias';
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;
}

#Agregar Categoria
function agregarCategoria(){
    $catNombre=$_POST['catNombre'];
    $link=conectar();
    $sql="INSERT INTO categorias (catNombre) value ('".$catNombre."')";
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;
}
#Ver Categoria por id
function verCategoriaPorId(){
    $idCategoria=$_GET['idCategoria'];
    $link=conectar();
    $sql="SELECT catNombre, idCategoria FROM categorias WHERE idCategoria=".$idCategoria;
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    $categoria=mysqli_fetch_assoc($resultado);
    return $categoria;
}
#Modificar Categoria
function modificarCategoria(){
    $idCategoria=$_POST['idCategoria'];
    $catNombre=$_POST['catNombre'];
    $link=conectar();
    $sql="UPDATE categorias SET catNombre='".$catNombre."' WHERE idCategoria=".$idCategoria;
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;

}
#funcion verificar cantidad de productos asociados a una categoria
function verificarCategoria(){
    $idCategoria=$_GET['idCategoria'];
    $link=conectar();
    $sql="SELECT 1 FROM productos WHERE idCategoria=".$idCategoria;
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    $cantidad=mysqli_num_rows($resultado);
    return $cantidad;
}
#eliminar una categoria
function eliminarCategoria(){
    $idCategoria=$_POST['idCategoria'];
    $link=conectar();
    $sql="DELETE FROM categorias WHERE idCategoria=".$idCategoria;
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;
}
/**
 * listarCategorias()listo
 * verCategoriaPorId() listo
 * agregarCategoria()listo
 * modificarCategoria() listo
 * eliminarCategoria()
 */