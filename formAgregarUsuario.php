<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo Usuario</h1>
        <div class="alert bg-light border p-3 col-8 mx-auto">
            <form action="agregarUsuario.php" method="post">
                Nombre de usuario:<br>
                <input type="text" name="usuNombre" class="form-control" required>
                <br>
                Apellido de usuario:<br>
                <input type="text" name="usuApellido" class="form-control" required>
                <br>
                Email del usuario:<br>
                <input type="email" name="usuEmail" class="form-control" required>
                <br>
                Contraseña del usuario:<br>
                <input type="password" name="usuPass" class="form-control" required>
                <br>
                <button class="btn btn-outline-secondary">Agregar Usuario</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secoundary">volver a panel</a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>