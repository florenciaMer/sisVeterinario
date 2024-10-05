<?php 

include_once('../../admin/layout/parte1.php');
$id_usuario = $_GET['id_usuario'];
include_once('../../app/controllers/usuarios/datos_del_usuario.php');

?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="col-md-12">
      <h1 class="m-0">Eliminar un Usuario </h1>
      <br>
          <div class="card card-outline card-danger">
              <div class="card-header">
              
            
                  <h3 class="card-title"><b>¿Está seguro que desea eliminar al usuario:<?php echo $nombre_completo?>? </b></h3>
              </div>
              <div class="card-body">
             
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Nombre Completo*:</label>
                              <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre_completo?>" disabled>
                          </div>
                        </div>
                      
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Email*:</label>
                              <input type="email" class="form-control" id="email" name="email" value="<?php echo $email?>" disabled>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Cargo:</label>
                              <input type="email" class="form-control" id="email" name="email" value="<?php echo $cargo?>" disabled>

                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <form action="<?php echo $URL;?>/app/controllers/usuarios/delete.php" method="post" >
                            <input type="text" name="id_usuario" value="<?php echo $id_usuario?>" hidden>
                            <a href="" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
                          </form>
                        </div>
                      </div>
              </div>
          </div>
            <div class="card-body" style="display: block;">
              
              
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
