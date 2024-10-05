
<?php 
include_once('../app/config.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo APP_NAME?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/public/templates/dist/css/adminlte.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo $URL;?>/public/templates/index2.html"><b>SIS</b>VETERINARIO</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="display: flex;flex-direction: column; align-items: center;">
        <img src="https://img.freepik.com/vector-gratis/ilustracion-concepto-inicio-sesion-tableta_114360-7863.jpg?t=st=1726402353~exp=1726405953~hmac=d3b6161c96bdb064907e358340edda7823929380761d0d4bacea2dc342c9a5a9&w=740" width="50%">
      <p class="login-box-msg">Iniciar sesión</p>

      <form action="<?php echo $URL;?>/app/controllers/login/controller_login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mb-1" style="width: 100%;">Ingresar</button>
        <button class="btn btn-secondary" style="width: 100%;">Cancelar</button>
          <!-- /.col -->
        
        </div>
      </form>

    

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $URL;?>/public/templates/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL;?>/public/templates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL;?>/public/templates/dist/js/adminlte.min.js"></script>
<?php 
session_start();
include_once '../admin/layout/mensaje.php';
?>
</body>
</html>
