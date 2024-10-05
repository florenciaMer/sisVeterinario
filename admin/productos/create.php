<?php 
include_once('../../admin/layout/parte1.php');
include_once('../../app/controllers/productos/listado_de_productos.php')
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
                <h1 class="m-0">Crear un Producto</h1>
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos del Producto</b></h3>
                    </div>

                    <div class="card-body">
                        <form action="../../app/controllers/productos/create.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="codigo">Código*:</label>
                                        <?php 
                                         function ceros($numero){
                                            $len=0;
                                            $cantidad_ceros=5;
                                            $aux=$numero;
                                            $pos=strlen($numero);
                                            $len=$cantidad_ceros-$pos;
                                            for ($i=0; $i < $len ; $i++) { 
                                                $aux="0".$aux;
                                            }
                                            return $aux;
                                        }
                                        $contador = 1; 
                                          foreach ($productos as $producto) {
                                            $contador ++;
                                          }
                                          ?>
                                        <input type="text" class="form-control" id="codigo" name="codigo" value="p-<?= ceros($contador)?>" disabled >
                                        <input type="text" class="form-control" id="codigo" name="codigo" value="p-<?= ceros($contador)?>" hidden >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombre">Nombre*:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="codigo">Stock*:</label>
                                        <input type="text" class="form-control" id="stock" name="stock" required>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="nombre">Stock Mínimo*:</label>
                                        <input type="text" class="form-control" id="stock_minimo" name="stock_minimo" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="descripcion">Stock Máximo:</label>
                                        <input type="text" class="form-control" id="stock_maximo" name="stock_maximo" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="codigo">Precio Compra*:</label>
                                        <input type="text" class="form-control" id="precio_compra" name="precio_compra" required>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="nombre">Precio Venta*:</label>
                                        <input type="text" class="form-control" id="precio_venta" name="precio_venta" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="descripcion">Fecha de ingreso:</label>
                                        <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="imagen">Imagen:</label>
                                        <input type="file" id="file" name="file" accept="image/*">
                                        <output id="list"></output>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Crear Producto</button>
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
