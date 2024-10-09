<?php 
include_once('../app/config.php');
include_once('../admin/layout/parte1.php');
include_once('../app/controllers/usuarios/listado_de_usuarios.php');
include_once('../app/controllers/productos/listado_de_productos.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <h2>Bienvenido al Sistema - <?php echo $cargo_sesion;?></h2>
        <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                $contador = 0;
                foreach ($usuarios as $usuario) {
                  $contador++;
                }?>
                <h3><?php echo $contador;?></h3>

                <p>Usuarios Registrados</p>
              </div>
              <div class="icon">
              <i class="bi bi-person-plus"></i>
              </div>
              <a href="<?php echo $URL."/admin/usuarios"?>" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php 
                $contador_productos = 0;
                foreach ($productos as $producto) {
                  $contador_productos++;
                }?>
                <h3><?php echo $contador_productos;?></h3>

                <p>Productos Registrados</p>
              </div>
              <div class="icon">
              <i class="bi bi-table"></i>
              </div>
              <a href="<?php echo $URL."/admin/productos"?>" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </div>
  </div>
 <?php 
  include_once('../admin/layout/parte2.php');