<?php  
	require 'funciones/conexiones.php';
	require 'funciones/usuarios.php';
	$chequeo=modificarUsuario();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de un Usuario</h1>
        <?php
        $clase='danger';
        $mensaje='No se pudo modificar el usuario';
        if($chequeo){
            $clase='success';
            $mensaje='Usuario modificado correctamente';
        }
        ?>
        <div class="alert alert-<?=$clase?>">
            <?=$mensaje?>
        </div>
        <a href="adminUsuarios.php" class="btn btn-outline-secoundary">volver a panel</a>
    </main>

<?php  include 'includes/footer.php';  ?>