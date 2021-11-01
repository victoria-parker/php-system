<?php
## CRUD de Productos ##
##listar Productos
function listarProductos(){
    $link=conectar();
    $sql='SELECT idProducto, prdNombre, prdPrecio, 
          productos.idMarca,mkNombre, 
          productos.idCategoria,catNombre ,
          prdPresentacion,prdStock, prdImagen 
          from productos 
          inner join marcas on productos.idMarca=marcas.idMarca 
          inner join categorias on productos.idCategoria=categorias.idCategoria ';
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    return $resultado;
}

function subirImagen(){
    ##predeterminado si no sube imagen en agregar producto
    $prdImagen='noDisponible.jpg';

    ##predeterminado si no sube imagen en modificar producto
    if(isset($_POST['imagenActual'])){
        $prdImagen=$_POST['imagenActual'];
    }

    #si enviaron archivo y esta bien

    if($_FILES['prdImagen']['error'] == 0){
    ##subida del archivo
    $ruta='productos/';
    $temp=$_FILES['prdImagen']['tmp_name'];

    ##renombrar archivo
    $path=pathinfo($_FILES['prdImagen']['name']);
    $ext=$path['extension'];
    $prdImagen=time().'.'.$ext;

    #subir imagen
    move_uploaded_file($temp,$ruta.$prdImagen);
    }
    return $prdImagen;
}

#Agregar Producto
function agregarProducto(){
    $prdNombre=$_POST['prdNombre'];
    $prdPrecio=$_POST['prdPrecio'];
    $idMarca=$_POST['idMarca'];
    $idCategoria=$_POST['idCategoria'];
    $prdPresentacion=$_POST['prdPresentacion'];
    $prdStock=$_POST['prdStock'];
    $prdImagen=subirImagen();

    $link=conectar();
    $sql="INSERT INTO  productos (prdNombre,prdPrecio,idMarca,idCategoria,prdPresentacion,prdStock,prdImagen)
            VALUES (
                    '".$prdNombre."',
                    ".$prdPrecio.",
                    ".$idMarca.",
                    ".$idCategoria.",
                    '".$prdPresentacion."',
                    ".$prdStock.",
                    '".$prdImagen."'
            )";
    $resultado=mysqli_query($link,$sql) or die (mysqli_error($link));
    return $resultado;
}

function verProductoPorId(){
    $idProducto=$_GET['idProducto'];
    $link=conectar();
    $sql="SELECT idProducto,prdNombre, prdPrecio, 
          productos.idMarca,mkNombre, productos.idCategoria,
          catNombre ,prdPresentacion, prdStock,prdImagen 
          from productos 
          inner join marcas on productos.idMarca=marcas.idMarca 
          inner join categorias on productos.idCategoria=categorias.idCategoria 
          WHERE idProducto=".$idProducto.";";
    $resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
    $producto=mysqli_fetch_assoc($resultado);
    return $producto;
}

function modificarProducto(){
    $idProducto=$_POST['idProducto'];//que fue enviado con el input type hidden
    $prdNombre=$_POST['prdNombre'];
    $prdPrecio=$_POST['prdPrecio'];
    $idMarca=$_POST['idMarca'];
    $idCategoria=$_POST['idCategoria'];
    $prdPresentacion=$_POST['prdPresentacion'];
    $prdStock=$_POST['prdStock'];
    $prdImagen=subirImagen();

    $link=conectar();

    $sql="UPDATE PRODUCTOS SET 
                    prdNombre='".$prdNombre."',
                    prdPrecio=".$prdPrecio.",
                    idMarca=".$idMarca.",
                    idCategoria=".$idCategoria.",
                    prdPresentacion='".$prdPresentacion."',
                    prdStock=".$prdStock.",
                    prdImagen='".$prdImagen."'
                    WHERE idProducto=".$idProducto.";";

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
