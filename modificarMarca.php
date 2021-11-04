<?php  
	require 'funciones/conexiones.php';
	require 'funciones/marcas.php';
	$chequeo=modificarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una Marca</h1>
        <?php
        $clase='danger';
        $mensaje='No se pudo modificar la marca';
        if($chequeo){
            $clase='success';
            $mensaje='Marca modificada correctamente';
        }
        ?>
        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>