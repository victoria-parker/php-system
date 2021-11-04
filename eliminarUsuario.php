<?php  
	require 'funciones/conexiones.php';
	require 'funciones/usuarios.php';
	$chequeo=eliminarUsuario();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un Usuario</h1>
        <?php
        $clase='danger';
        $mensaje='No se pudo eliminar el usuario';
        if($chequeo){
            $clase='success';
            $mensaje='Usuario eliminado correctamente';
        }
        ?>
        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>