<?php  
	require 'funciones/conexiones.php';
	require 'funciones/usuarios.php';
	$usuario=verUsuarioPorId();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo Usuario</h1>
        <div class="alert bg-light border p-3 col-8 mx-auto">
            <form action="modificarUsuario.php" method="post">
                Nombre de usuario:<br>
                <input type="text" name="usuNombre" class="form-control"  value="<?=$usuario['usuNombre']?>" required>
                <br>
                Apellido de usuario:<br>
                <input type="text" name="usuApellido" class="form-control" value="<?=$usuario['usuApellido']?>" required>
                <br>
                Email del usuario:<br>
                <input type="email" name="usuEmail" class="form-control" value="<?=$usuario['usuEmail']?>" required>
                <br>
                Contraseña del usuario:<br>
                <input type="password" name="usuPass" class="form-control"  value="<?=$usuario['usuPass']?>" required>
                <br>
                <input type="hidden" name="idUsuario" value="<?=$usuario['idUsuario']?>">
                <button class="btn btn-outline-secondary">Modificar Usuario</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secoundary">volver a panel</a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>