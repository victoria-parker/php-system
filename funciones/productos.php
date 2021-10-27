<?php
## CRUD de Productos ##
##listar Productos
function listarProductos(){
    $link=conectar();
    $sql='SELECT idProducto, prdNombre, prdPrecio, productos.idMarca,mkNombre, productos.idCategoria,catNombre ,prdPresentacion, prdImagen from productos inner join `marcas` on productos.idMarca=marcas.idMarca inner join categorias on productos.idCategoria=categorias.idCategoria';
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;
}
/**
 * listarProductos()
 * verProductoPorId()
 * agregarProducto()
 * modificarProducto()
 * eliminarProducto()
 */
