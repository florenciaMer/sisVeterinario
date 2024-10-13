
<?php
session_start();
if(isset($_SESSION['session_email'])){
    //echo "Ha pasado por login";
    $session_email = $_SESSION['session_email'];
    $sql = "SELECT * FROM `usuarios` WHERE email = '$session_email' ";
    $query = $pdo->prepare($sql);
    $query->execute();

//paso la consulta a un array
$usuarios= $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as  $usuario) {
 $id_usuario_sesion = $usuario['id_usuario'];
 $nombre_usuario_sesion = $usuario['nombre_completo'];
 $cargo_sesion = $usuario['cargo'];
}
}else{
    $session_email= "";
    //echo "no ha pasado por el login";
   // header('Location: '.$URL.'/login');
}
?>

<!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
   
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
      <link rel="stylesheet" href="public/css/style.css">
  <title>SIS | Veterinario</title>
  </head>

  <body>
      <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">
                  <img src="https://cdn-icons-png.flaticon.com/512/5389/5389424.png" width="50" height="50" class="d-inline-block align-top" alt="">
                  Bootstrap
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                  <a class="nav-link btn btn-outline-info" href="#"><i class="bi bi-house-door"></i> Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link btn btn-outline-info" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                      Dropdown
                  </a>
                  <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link btn btn-outline-info">Disabled</a>
                  </li>
              </ul>
              <div class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              
                  <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item dropdown">
                    <?php 
                        if ($session_email == "") {
                           // echo "sin loguearse";?>

                    <a class="nav-link dropdown-toggle btn btn-outline-info" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Ingresar
                    </a>
                   
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="login/index.php">Iniciar Sesión</a>
                        <a class="dropdown-item" href="login/registro.php">Registrarse</a>
                        
                    </div>
                       <?php }else{
                          //  echo "ya paso por el login";?>
                            <a class="nav-link btn btn-outline-info" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                             <?php echo $session_email;?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                    href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php">Cerrar Sesión
                                    </a>
                                </li>
                            </ul>
                               
                            </div>
                           <?php }
                        ?>
                            </li>
                    
                </ul>
              </div>
              </div>
          </nav>