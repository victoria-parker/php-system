<?php  
	
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>
        <div class="alert bg-light border p-3 col-8 mx-auto">
            <form action="agregarMarca.php" method="post">
                Marca:<br>
                <input type="text" name="mkNombre" class="form-control" required>
                <br>
                <button class="btn btn-outline-secondary">Agregar Marca</button>
                <a href="adminMarcas.php" class="btn btn-outline-secoundary">volver a panel</a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>