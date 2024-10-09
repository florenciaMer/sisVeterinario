<?php 
include_once('../../admin/layout/parte1.php');
$id_producto = $_GET['id_producto'];
include_once('../../app/controllers/productos/datos_del_producto.php');
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
                <h1 class="m-0">Ver un Producto</h1>
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>Datos del Producto</b></h3>
                    </div>

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="codigo">Código:</label>
                                       
                                        <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $codigo;?>" disabled >
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre;?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $descripcion;?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="codigo">Stock:</label>
                                        <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $stock;?>" disabled>>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="nombre">Stock Mínimo*:</label>
                                        <input type="text" class="form-control" id="stock_minimo" name="stock_minimo" value="<?php echo $stock_minimo;?>" disabled>>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="descripcion">Stock Máximo:</label>
                                        <input type="text" class="form-control" id="stock_maximo" name="stock_maximo" value="<?php echo $stock_maximo;?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="codigo">Precio Compra*:</label>
                                        <input type="text" class="form-control" id="precio_compra" name="precio_compra" value="<?php echo $precio_compra;?>" disabled>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="nombre">Precio Venta*:</label>
                                        <input type="text" class="form-control" id="precio_venta" name="precio_venta" value="<?php echo $precio_venta;?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="descripcion">Fecha de ingreso:</label>
                                        <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $fyh_ingreso;?>" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="imagen">Imagen:</label>
                                        <img src="<?php echo $URL;?>/public/img/productos/<?php echo $imagen;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="descripcion">Usuario:</label>
                                        <input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $nombre_usuario;?>" disabled>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-md-12">
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


<?php 
include_once('../../admin/layout/parte2.php');
include_once('../layout/mensaje.php');
?>
