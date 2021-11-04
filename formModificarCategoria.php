<?php
    require 'funciones/conexiones.php';
    require 'funciones/categorias.php';
    $categoria=verCategoriaPorId();

    include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificar una Categoria</h1>
        <div class="alert bg-light border p-3 col-8 mx-auto">
            <form action="modificarCategoria.php" method="post">
                Categoria:<br>
                <input type="text" name="catNombre" class="form-control" value="<?=$categoria['catNombre']?>"required>
                <br>
                <input type="hidden" name="idCategoria" value="<?=$categoria['idCategoria']?>">
                <button class="btn btn-outline-secondary">Modificar Categoria</button>
                <a href="adminCategorias.php" class="btn btn-outline-secoundary">volver a panel</a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>