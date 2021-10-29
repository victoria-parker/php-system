<?php
require 'funciones/conexiones.php';
require 'funciones/productos.php.php';
$chequeo=agregarProducto();

include 'includes/header.html';
include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de un nuevo Producto</h1>
        <?php
         $clase='danger';
         $mensaje='No se pudo agregar el producto';
         if($chequeo){
             $clase='success';
             $mensaje='Producto agregada correctamente';
         }
        ?>
        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>