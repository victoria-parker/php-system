<?php  
	require 'funciones/conexiones.php';
	require 'funciones/categorias.php';
    $categorias=listarCategoria();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administracion de Categorias</h1>
        <a href="admin.php" class="btn btn-outline-secondary my-2">volver al Dashboard</a>
        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Categoria</th>
                    <th colspan="2">
                        <a href="formAgregarCategoria.php" class="btn btn-dark">Agregar</a>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($categoria=mysqli_fetch_assoc($categorias)){
            ?>
                <tr>
                    <td><?=$categoria['idCategoria']?></td>
                    <td><?=$categoria['catNombre']?></td>
                    <td>
                        <a href="formModificarCategoria.php?idCategoria=<?=$categoria['idCategoria']?>" class="btn btn-outline-secondary">Modificar</a>
                    </td>
                    <td>
                        <a href="formEliminarCategoria.php?idCategoria=<?=$categoria['idCategoria']?>" class="btn btn-outline-secondary">Eliminar</a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <a href="admin.php" class="btn btn-outline-secondary my-2">volver al Dashboard</a>
    </main>

<?php  include 'includes/footer.php';  ?>