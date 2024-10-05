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
      <h1 class="m-0">Actualizar un Usuario</h1>
          <div class="card card-outline card-success">
              <div class="card-header">
              
            
                  <h3 class="card-title"><b>Datos del Usuario: <?php echo $nombre_completo;?></b></h3>
              </div>
              <div class="card-body">
                  <form action="../../app/controllers/usuarios/update.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Nombre Completo*:</label>
                              <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre_completo;?>" required>
                          </div>
                        </div>
                      
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Email*:</label>
                              <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>" disabled>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Password*:</label>
                              <input type="password" class="form-control" id="password" name="password" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Verificar Password*:</label>
                              <input type="password" class="form-control" id="password_verify" name="password_verify" >
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Cargo:</label>
                              <select class="form-control" name="cargo">
                                <?php 
                                if ($cargo == "admin") {?>
                                    <option value="admin">Admin</option>
                                    <option value="usuario">Usuario</option>
                                <?php }else{
                                    ?>
                                    <option value="usuario">Usuario</option>
                                    <option value="admin">Admin</option>
                               <?php } ?>
                               
                              </select>
                              <input type="hidden" name="id_usuario" value="<?php echo $id_usuario?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <button type="button" class="btn btn-secondary">Cancelar</button>
                          <button type="submit" class="btn btn-success">Confirmar</button>
                        </div>
                      </div>
                    
                  </form>
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
session_start();
include_once('../../admin/layout/mensaje.php');
