<?php  
	
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva categoria</h1>
    <div class="alert bg-light border p-3 col-8 mx-auto">
        <form action="agregarCategoria.php" method="post">
            Categoria:<br>
            <input type="text" name="catNombre" id="" class="form-control">
            <br>
            <button class="btn btn-dark">Agregar categoria</button>
            <a href="adminCategorias.php" class="btn btn-outline-secoundary">volver a panel</a>
        </form>
    </div>
    </main>

<?php  include 'includes/footer.php';  ?>