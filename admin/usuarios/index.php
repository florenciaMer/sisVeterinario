<?php 
include_once('../../admin/layout/parte1.php');
include_once('../../app/controllers/usuarios/listado_de_usuarios.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
                <h1 class="m-0">Listado de Usuarios </h1>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><b>Usuarios Registrados</b></h3>
                                <div class="card-tools">
                               
                            </div>
                    </div>
        
                    <div class="card-body" style="display: block;">
                        <table class="table table-striped table-bordered table-hover" id="example1">
                            <thead>
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Cargo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $contador = 0;
                                foreach ($usuarios as $usuario) {
                                    $contador++;
                                    $id_usuario = $usuario['id_usuario'];
                                ?>
                                <tr>
                                   <td><?php echo $contador?></td>
                                   <td><?php echo $usuario['nombre_completo']?></td>
                                   <td><?php echo $usuario['email']?></td>
                                   <td><?php echo $usuario['cargo']?></td>
                                   <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="show.php?id_usuario=<?php echo $id_usuario?>" class="btn btn-info"><i class="bi bi-eye"></i> Ver</a>
                                            <a href="update.php?id_usuario=<?php echo $id_usuario?>" type="button" class="btn btn-success ml-1"><i class="bi bi-pencil"></i> Editar</a>
                                            <a href="delete.php?id_usuario=<?php echo $id_usuario?>" type="button" class="btn btn-danger ml-1"><i class="bi bi-trash"></i> Borrar</a>
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