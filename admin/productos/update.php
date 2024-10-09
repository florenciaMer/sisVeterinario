<?php 
include_once('../../admin/layout/parte1.php');
$id_producto = $_GET['id_producto'];
include_once('../../app/controllers/productos/datos_del_producto.php');
include_once('../../app/controllers/usuarios/listado_de_usuarios.php');
?>
<style>
    .thumb {
    max-width: 25%; /* Cambia el tamaño máximo al 25% */
    height: auto; /* Mantiene la relación de aspecto */
}

</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="col-md-12">
                <h1 class="m-0">Editar un Producto</h1>
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos del Producto</b></h3>
                    </div>

                    <div class="card-body">
                        <form action="<?php echo $URL;?>/app/controllers/productos/update.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="codigo">Código:</label>
                                       
                                        <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $codigo;?>"  >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre;?>" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $descripcion;?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="codigo">Stock:</label>
                                        <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $stock;?>" >
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="nombre">Stock Mínimo*:</label>
                                        <input type="text" class="form-control" id="stock_minimo" name="stock_minimo" value="<?php echo $stock_minimo;?>" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="descripcion">Stock Máximo:</label>
                                        <input type="text" class="form-control" id="stock_maximo" name="stock_maximo" value="<?php echo $stock_maximo;?>" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="codigo">Precio Compra*:</label>
                                        <input type="text" class="form-control" id="precio_compra" name="precio_compra" value="<?php echo $precio_compra;?>" >
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="nombre">Precio Venta*:</label>
                                        <input type="text" class="form-control" id="precio_venta" name="precio_venta" value="<?php echo $precio_venta;?>" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="descripcion">Fecha de ingreso:</label>
                                        <input type="date" class="form-control" id="fecha_ingreso" name="fyh_ingreso" value="<?php echo $fyh_ingreso;?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="imagen">Imagen:</label>
                                       
                                        <input type="file" id="file" name="file" accept="image/*">
                                        <output id="list">
                                        <img src="../../public/img/productos/<?php echo $imagen; ?>" alt="imagen" width="80px">
                                        <input type="text" value="<?php echo $imagen;?>" name="file" hidden>
                                        </output>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-md-4">
                                    <div class="form-group">
                               
                                <select name="id_usuario" class="form-control">
                                    <?php 
                                    foreach ($usuarios as $usuario) { 
                                        $id_usuario = $usuario['id_usuario']; // Use $usuario here
                                        $nombre_usuario_tabla = $usuario['nombre_completo'];
                                    ?>
                                        <option value="<?php echo htmlspecialchars($id_usuario); ?>"
                                            <?php if ($nombre_usuario_tabla == $nombre_usuario) { ?> selected="selected"<?php } ?>>
                                            <?php echo htmlspecialchars($nombre_usuario_tabla); ?>
                                        </option>
                                    <?php } ?>
                                </select>
                                <input type="text" name="id_producto"value="<?php echo $id_producto;?>" hidden>
                                </div>
                                </div>

                            <div class="row">
                                <div class="col-md-12">
                                     <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                          
                                </div>
                            </div>
                            <input type="text" name="id_usuario" value="<?php echo $id_usuario_sesion?>" hidden>
                        </form>
                    </div>
                </div>
                <div class="card-body" style="display: block;"></div>
            </div><!-- /.col -->
        </div>
    </div> 
</div>
<script>
        function archivo(evt) {
            var files = evt.target.files;
            var output = document.getElementById('list');
            output.innerHTML = ''; // Limpiar la previsualización

            for (var i = 0; i < files.length; i++) {
                var f = files[i];
                if (!f.type.match('image.*')) {
                    continue;
                }

                var reader = new FileReader();
                reader.onload = (function(theFile) {
                    return function(e) {
        output.innerHTML = '<img class="thumb thumbnail" src="' + e.target.result + '" title="' + escape(theFile.name) + '" style="width: 35%;"/>';
    };
                })(f);

                reader.readAsDataURL(f);
            }
        }

        document.getElementById('file').addEventListener('change', archivo, false);
    </script>

<?php 
include_once('../../admin/layout/parte2.php');
include_once('../layout/mensaje.php');
?>
