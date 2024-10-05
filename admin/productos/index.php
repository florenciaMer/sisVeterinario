<?php 
include_once('../../admin/layout/parte1.php');
include_once('../../app/controllers/productos/listado_de_productos.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
                <h1 class="m-0">Listado de Productos </h1>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><b>Productos Registrados</b></h3>
                                <div class="card-tools">
                               
                            </div>
                    </div>
        
                    <div class="card-body col-md-12">
                        <table class="table table-striped table-bordered table-hover" id="example1">
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Imagen</th>
                                    <th>Stock</th>
                                    <th>Precio de compra</th>
                                    <th>Precio de venta</th>
                                    <th>Fecha de ingreso</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $contador = 0;
                                foreach ($productos as $producto) {
                                    $contador++;
                                    $id_producto = $producto['id_producto'];
                                ?>
                                <tr>
                                   <td><?php echo $contador?></td>
                                   <td><?php echo $producto['codigo']?></td>
                                   <td><?php echo $producto['nombre']?></td>
                                   <td><?php echo $producto['descripcion']?></td>
                                   <td><img src="../../public/img/productos/<?php echo $producto['imagen']; ?>" alt="imagen" width="80px"></td>
                                   <td><?php echo $producto['stock']?></td>
                                   <td><?php echo $producto['precio_compra']?></td>
                                   <td><?php echo $producto['precio_venta']?></td>
                                   <td><?php echo $producto['fyh_ingreso']?></td>
                                   <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="show.php?id_producto=<?php echo $id_producto?>" class="btn btn-info"><i class="bi bi-eye"></i> Ver</a>
                                            <a href="update.php?id_producto=<?php echo $id_producto?>" type="button" class="btn btn-success ml-1"><i class="bi bi-pencil"></i> Editar</a>
                                            <a href="delete.php?id_producto=<?php echo $id_producto?>" type="button" class="btn btn-danger ml-1"><i class="bi bi-trash"></i> Borrar</a>
                                        </div>
                                    </td>
                                </tr>
                                
                                   
                              <?php  }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.col -->
            
            </div>
        </div> 
    </div>
</div>   


 <?php 
include_once('../../admin/layout/parte2.php');
include_once('../layout/mensaje.php');
?>
<script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 10,
      "language":{
      "emptyTable": "No hay información",
      "info": "Mostrando_START_a _END_de_Total_Resultados",
      "infoEmpty":"Mostrando 0 a 0 de 0 Resultados",
      "infoFiltered":"(Filtrado de _MAX_ total Resultados)",
      "infoPostFix": "",
      "thousands":",",
      "lengthMenu": "Mostrar _MENU_Resultados",
      "loadingRecords": "Cargando...",
      "processing":"Procesando",
      "search": "Buscador",
      "zeroRecords": "Sin resultados encontrados",
      "paginate":{
        "first":"Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
        }
      },

      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>