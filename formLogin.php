<?php  

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Ingreso al sistema</h1>

        <div class="alert bg-light p-4 col-6 mx-auto border">
            <form action="login.php" method="post">
                Usuario:
                <br>
                <input type="email" name="usuEmail" class="form-control" required>
                <br>
                Contraseña:
                <br>
                <input type="password" name="usuPass" class="form-control"required>
                <br>
                <button class="btn btn-dark btn-block">Ingresar</button>
            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>