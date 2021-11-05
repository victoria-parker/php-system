<?php  
    //aca no se pone el autenticar porque sino no te dejaria nunca ingresar
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
        <?php
        if(isset($_GET['error'])){
            $error=$_GET['error'];
            $titulo='Error de ingreso';
            $mensaje='Nombre y/o clave incorrectos';
            if($error == 2){
                $titulo='Acceso no permitido';
                $mensaje='Debe loguearse para ingresar';
            }

        ?>
            <script>
                Swal.fire(
                    '<?=$titulo?>',
                    '<?=$mensaje?>',
                    'error'
                )
            </script>
        <?php
        }
        ?>
    </main>

<?php  include 'includes/footer.php';  ?>