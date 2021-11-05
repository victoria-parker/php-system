<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();
	require 'funciones/conexiones.php';
    require 'funciones/productos.php';
	$producto=verProductoPorId();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un producto</h1>
        <div class="card col-6 mx-auto p-0 border-danger text-danger">
            <div class="card-header">
                Confirmación de baja de un producto
            </div>
            <div class="card-body row">
                <div class="col"><img src="productos/<?=$producto['prdImagen']?>" alt="" class="img-thumbnail"></div>
                <div class="col">
                    <span class="lead">
                        <?=$producto['prdNombre']?>
                    </span>
                    <br>
                    Marca:<?=$producto['mkNombre']?>
                    <br>
                    Categoria:<?=$producto['catNombre']?>
                    <br>
                    Presentación:<?=$producto['prdPresentacion']?>
                    <br>
                    Precio: <?=$producto['prdPrecio']?>
                    <br>
                    <form action="eliminarProducto.php" method="post">
                        <input type="hidden" name="idProducto" value="<?=$producto['idProducto']?>">
                        <button class="btn btn-danger btn-block my-2">Confirmar Baja</button>
                        <a href="adminProductos.php" class="btn btn-outline-secondady btn-block">Volver al panel</a>
                    </form>
                </div>
            </div>
        </div>

        <script>
            Swal.fire({
                title: 'Desea eliminar el producto?',
                text: "Esta acción no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'No lo quiero eliminar',
                cancelButtonColor: '#7e7b7b',
                confirmButtonColor: '#d00',
                confirmButtonText: 'Si lo quiero eliminar!'
            }).then((result) => { //tiene que ver con hacer clic en cualquier boton
                if (!result.value) { //si se hace clic en el boton que no es de confimar
                    //redireccion al panel
                    window.location='adminProductos.php';
                }
            })
        </script>
    </main>

<?php  include 'includes/footer.php';  ?>