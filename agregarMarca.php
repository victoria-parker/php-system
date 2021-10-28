<?php
require 'funciones/conexiones.php';
require 'funciones/marcas.php';
$chequeo=agregarMarca();

include 'includes/header.html';
include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de una nueva Marca</h1>
        <?php
         $clase='danger';
         $mensaje='No se pudo agregar la marca';
         if($chequeo){
             $clase='success';
             $mensaje='Marca agregada correctamente';
         }
        ?>
        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>