<?php  
	require 'funciones/conexiones.php';
    require 'funciones/usuarios.php';
    $usuarios=listarUsuarios();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administracion de usuarios</h1>
        <a href="admin.php" class="btn btn-outline-secondary my-2">volver al Dashboard</a>
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Estado</th>
                <th colspan="2">
                    <a href="formAgregarUsuario.php" class="btn btn-dark">Agregar</a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
                while($usuario=mysqli_fetch_assoc($usuarios)){
            ?>
            <tr>
                <td><?=$usuario['idUsuario']?></td>
                <td><?=$usuario['usuNombre']?></td>
                <td><?=$usuario['usuApellido']?></td>
                <td><?=$usuario['usuEmail']?></td>
                <td><?=$usuario['usuEstado']?></td>
                <td>
                    <a href="formModificarUsuario.php?idUsuario=<?=$usuario['idUsuario']?>" class="btn btn-outline-secondary">Modificar</a>
                </td>
                <td>
                    <a href="" class="btn btn-outline-secondary">Eliminar</a>
                </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>

    </main>

<?php  include 'includes/footer.php';  ?>