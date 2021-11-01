<?php  
	require 'funciones/conexiones.php';
	require 'funciones/marcas.php';
	$cantidad=verificarMarca();
	if($cantidad==0){

    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una Marca</h1>


    </main>

<?php  include 'includes/footer.php';  ?>