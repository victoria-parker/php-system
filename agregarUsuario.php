<?php
require 'funciones/conexiones.php';
require 'funciones/usuarios.php';
$chequeo=agregarUsuario();

include 'includes/header.html';
include 'includes/nav.php';
?>

    <main class="container">
        <h1>Alta de un nuevo Usuario</h1>
        <?php
         $clase='danger';
         $mensaje='No se pudo agregar el usuario';
         if($chequeo){
             $clase='success';
             $mensaje='Usuario agregado correctamente';
         }
        ?>
        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>