<?php 

include_once('../../admin/layout/parte1.php');
?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="col-md-12">
      <h1 class="m-0">Crear un Usuario</h1>
          <div class="card card-outline card-primary">
              <div class="card-header">
              
            
                  <h3 class="card-title"><b>Datos del Usuario</b></h3>
              </div>

              

              <div class="card-body">
                  <form action="../../app/controllers/usuarios/create.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Nombre Completo*:</label>
                              <input type="text" class="form-control" id="nombre" name="nombre" required>
                          </div>
                        </div>
                      
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Email*:</label>
                              <input type="email" class="form-control" id="email" name="email" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Password*:</label>
                              <input type="password" class="form-control" id="password" name="password" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Verificar Password*:</label>
                              <input type="password" class="form-control" id="password_verify" name="password_verify" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="nombre">Cargo:</label>
                              <select class="form-control" name="cargo">
                                <option value="admin">Adminstrador</option>
                                <option value="usuario">Usuario</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <button type="button" class="btn btn-secondary">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Crear Usuario</button>
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
include_once('../layout/mensaje.php');
