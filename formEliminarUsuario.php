<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
	require 'funciones/conexiones.php';
    require 'funciones/usuarios.php';
	$usuario=verUsuarioPorId();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un usuario</h1>
        <div class="card col-6 mx-auto p-0 border-danger text-danger">
            <div class="card-header">
                Confirmación de baja de un usuario
            </div>
            <div class="card-body row">
                <div class="col">
                    <span class="lead">
                        <?=$usuario['usuNombre']?> <?=$usuario['usuApellido']?>
                    </span>
                    <br>
                    Email: <?=$usuario['usuEmail']?>
                    <br>
                    <form action="eliminarUsuario.php" method="post">
                        <input type="hidden" name="idUsuario" value="<?=$usuario['idUsuario']?>">
                        <button class="btn btn-danger btn-block my-2">Confirmar Baja</button>
                        <a href="adminUsuarios.php" class="btn btn-outline-secondady btn-block">Volver al panel</a>
                    </form>
                </div>
            </div>
        </div>

        <script>
            Swal.fire({
                title: 'Desea eliminar el usuario?',
                text: "Esta acción no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'No lo quiero eliminar',
                cancelButtonColor: '#7e7b7b',
                confirmButtonColor: '#d00',
                confirmButtonText: 'Si lo quiero eliminar!'
            }).then((result) => {
                if (!result.value) {
                    //redireccion al panel
                    window.location='adminUsuarios.php';
                }
            })
        </script>
    </main>

<?php  include 'includes/footer.php';  ?>