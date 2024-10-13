<?php 
  include_once('../app/config.php');
  include_once('../layout/parte1.php');
  include_once('../app/controllers/productos/listado_de_productos.php');
  ?>
         <body>
          <div class="container">
            <center>
              Registrate
            </center>
            <div class="card">
            <div class="row">
             <div class="col-md-4">

             </div>
            
             <div class="col-md-4">
              <br><br>
                <div class="card-header">
                   <h5 class="card-title">Revisa bien tus datos</h5>
                  </div>
                  <div class="card-body">
                  
                    <form action="../app/controllers/login/controller_registro.php" method="post">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Nombre del Usuario</label>
                            <input type="text" name="nombre_completo"class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password"class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Repita la Contraseña</label>
                            <input type="password" name="password_repeat"class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                           
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </div>
                        </div>
                      </div>
                    </form>
                   
                  </div>
                </div>
             </div>
             <br><br>

             <div class="col-md-4"></div>
            </div>
          </div>
         </body> 
       
  <?php 
  include_once('../layout/parte2.php');
  include_once('../admin/layout/mensaje.php');
  ?>
  </html>