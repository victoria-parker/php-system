<?php
    require 'funciones/conexiones.php';
	require 'funciones/marcas.php';
	$marcas=listarMarca();

	require 'funciones/categorias.php';
	$categorias=listarCategoria();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo Producto</h1>
        <div class="alert bg-light border p-8 col-8 mx-auto">
            <form action="agregarProducto.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="prdNombre">Nombre del producto</label>
                    <input type="text" name="prdNombre" class="form-control" id="prdNombre" required>
                </div>
                <label for="prdPrecio"> Precio del producto</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" name="prdPrecio" class="form-control" id="prdPrecio" min="0" required>
                </div>

                <div class="form-group">
                    <label for="idMarca">Marca</label>
                    <select class="form-control" name="idMarca" id="idMarca" required>
                        <option value="">Seleccione Marca</option>
                        <?php
                        while($marca=mysqli_fetch_assoc($marcas)){
                            ?>
                            <option value="<?=$marca['idMarca']?>"><?=$marca['mkNombre']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="idCategoria">Categoria</label>
                    <select class="form-control" name="idCategoria" id="idCategoria" required>
                        <option value="">Seleccione Categoria</option>
                        <?php
                        while($categoria=mysqli_fetch_assoc($categorias)){
                        ?>
                            <option value="<?=$categoria['idCategoria']?>"><?=$categoria['catNombre']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pdrPresentacion">Presentacion del producto</label>
                    <textarea name="prdPresentacion" id="pdrPresentacion" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="prdStock">Stock del Producto</label>
                    <input type="number" name="prdStock" class="form-control" id="prdStock" min="0" required>
                </div>

                <div class="form-group">
                    <label for="prdImagen">Imagen del Producto</label>
                    <input type="file" name="prdImagen" class="form-control-file" id="prdImagen">
                </div>
                <button class="btn btn-dark mr-3 px-4">Agregar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">volver al panel de productos</a>
            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>