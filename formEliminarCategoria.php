<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
	require 'funciones/conexiones.php';
	require 'funciones/categorias.php';
	$cantidad=verificarCategoria();
	$categoria=verCategoriaPorId();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una Categoria</h1>
<?php
        if($cantidad > 0){
?>
            <div class="alert alert-danger col-5 mx-auto p-3">
                No se puede eliminar la categoria <?=$categoria['catNombre']?> ya que tiene productos relacionados
                <br>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">volver al panel</a>
            </div>
            
<?php
        }else{
?>
            <div class="card col-6 mx-auto p-0 border-danger text-danger">
                <div class="card-header">
                    Confirmación de baja de una categoria
                </div>
                <div class="card-body">
                    <span class="lead">
                        <?=$categoria['catNombre']?>
                    </span>
                        <form action="eliminarCategoria.php" method="post">
                            <input type="hidden" name="idCategoria" value="<?=$categoria['idCategoria']?>">
                            <button class="btn btn-danger btn-block my-2">Confirmar Baja</button>
                            <a href="adminCategorias.php" class="btn btn-outline-secondady btn-block">Volver al panel</a>
                        </form>
                </div>
            </div>

            <script>
                Swal.fire({
                    title: 'Desea eliminar la categoria?',
                    text: "Esta acción no se puede deshacer",
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'No la quiero eliminar',
                    cancelButtonColor: '#7e7b7b',
                    confirmButtonColor: '#d00',
                    confirmButtonText: 'Si la quiero eliminar!'
                }).then((result) => {
                    if (!result.value) {
                        //redireccion al panel
                        window.location='adminCategorias.php';
                    }
                })
            </script>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>