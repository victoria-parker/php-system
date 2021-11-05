<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
	require 'funciones/conexiones.php';
	require 'funciones/categorias.php';
	$chequeo=modificarCategoria();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una Categoria</h1>
        <?php
        $clase='danger';
        $mensaje='No se pudo modificar la categoria';
        if($chequeo){
            $clase='success';
            $mensaje='Categoria modificada correctamente';
        }
        ?>
        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>