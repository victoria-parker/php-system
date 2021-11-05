<?php
    require 'config/config.php';
    require 'funciones/autenticacion.php';
    autenticar();

    require 'funciones/conexiones.php';
	require 'funciones/marcas.php';
	$marcas=listarMarca();

	require 'funciones/categorias.php';
	$categorias=listarCategoria();

	require 'funciones/productos.php';
	$producto=verProductoPorId();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">

        <h1>Modificación de un Producto</h1>
        <div class="alert bg-light border p-8 col-8 mx-auto">
            <form action="modificarProducto.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="prdNombre">Nombre del producto</label>
                    <input type="text"
                           name="prdNombre"
                           class="form-control"
                           id="prdNombre"
                           value="<?=$producto['prdNombre']?>"
                           required>
                </div>
                <label for="prdPrecio"> Precio del producto</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number"
                           name="prdPrecio"
                           class="form-control"
                           id="prdPrecio"
                           min="0"
                           step="0.01"
                           value="<?=$producto['prdPrecio']?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="idMarca">Marca</label>
                    <select class="form-control" name="idMarca" id="idMarca" required>
                        <option value="<?=$producto['idMarca']?>"><?=$producto['mkNombre']?></option>
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
                        <option value="<?=$producto['idCategoria']?>"><?=$producto['catNombre']?></option>
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
                    <textarea name="prdPresentacion" id="pdrPresentacion" class="form-control" required><?=$producto['prdPresentacion']?></textarea>
                </div>

                <div class="form-group">
                    <label for="prdStock">Stock del Producto</label>
                    <input type="number"
                           name="prdStock"
                           class="form-control"
                           id="prdStock"
                           min="0"
                           value="<?=$producto['prdStock']?>"
                           required>
                </div>

                <div class="form-group">
                    <label for="prdImagen">Imagen del Producto</label>
                    <br>
                    <img src="productos/<?=$producto['prdImagen']?>" alt="" class="img-thumbnail">
                    <br>
                    <input type="file" name="prdImagen" class="form-control-file" id="prdImagen">
                </div>


                <input type="hidden" value="<?=$producto['prdImagen']?>" name="imagenActual">

                <input type="hidden" name="idProducto" value="<?=$producto['idProducto']?>">

                <button class="btn btn-dark mr-3 px-4">Modificar producto</button>
                <a href="adminProductos.php" class="btn btn-outline-secondary">volver al panel de productos</a>
            </form>
        </div>
    </main>

<?php  include 'includes/footer.php';  ?>