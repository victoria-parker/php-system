<?php  
	
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Dashboard</h1>

        <section class="list-group">
            <a href="adminMarcas.php" class="list-group-item list-group-item-action">
                Panel de administracion de Marcas
            </a>
            <a href="adminCategorias.php" class="list-group-item list-group-item-action">
                Panel de administracion de Categorias
            </a>
            <a href="adminProductos.php" class="list-group-item list-group-item-action">
                Panel de administracion de Productos
            </a>
            <a href="adminUsuarios.php" class="list-group-item list-group-item-action">
                Panel de administracion de Usuarios
            </a>
        </section>
    </main>

<?php  include 'includes/footer.php';  ?>