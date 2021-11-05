<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
	require 'funciones/conexiones.php';
	require 'funciones/marcas.php';
	$chequeo=eliminarMarca();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>
        <?php
        $clase='danger';
        $mensaje='No se pudo eliminar la marca';
        if($chequeo){
            $clase='success';
            $mensaje='Marca eliminada correctamente';
        }
        ?>
        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>