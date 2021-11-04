<?php
    require 'funciones/conexiones.php';
    require 'funciones/marcas.php';
    $marca=verMarcaPorId();

    include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>
        <div class="alert bg-light border p-3 col-8 mx-auto">
            <form action="modificarMarca.php" method="post">
                Marca:<br>
                <input type="text" name="mkNombre" class="form-control" value="<?=$marca['mkNombre']?>"required>
                <br>
                <input type="hidden" name="idMarca" value="<?=$marca['idMarca']?>">
                <button class="btn btn-outline-secondary">Modificar Marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secoundary">volver a panel</a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>