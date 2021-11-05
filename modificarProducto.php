<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
	require 'funciones/conexiones.php';
	require 'funciones/productos.php';
	$chequeo=modificarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de un Producto</h1>
        <?php
        $clase='danger';
        $mensaje='No se pudo modificar el producto';
        if($chequeo){
            $clase='success';
            $mensaje='Producto modificado correctamente';
        }
        ?>
        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>