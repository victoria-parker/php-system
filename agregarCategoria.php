<?php  
	require 'funciones/conexiones.php';
	require 'funciones/categorias.php';
	$chequeo=agregarCategoria();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva Categoria</h1>
        <?php
        $clase='danger';
        $mensaje='No se pudo agregar la categoria.';

        if($chequeo) {
            $clase = 'success';
            $mensaje='Categoria agregada correctamente.';
        }
        ?>

        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>