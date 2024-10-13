<?php
include_once('../../config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `usuarios` WHERE email = '$email' ";
$query = $pdo->prepare($sql);
$query->execute();

//paso la consulta a un array
$usuarios= $query->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;
foreach ($usuarios as $usuario) {
    $contador++;
    $password_tabla = $usuario['password'];
    $id_usuario =  $usuario['id_usuario'];
    $email =  $usuario['email'];
    $nombre_completo =  $usuario['nombre_completo'];

}
$hash = $password_tabla;
session_start();
if(($contador >0) && (password_verify($password, $hash)) ){
   // echo "Bienvenido al sistema $nombre_completo";
   $_SESSION['session_email'] = $email;
    header('Location: '.$URL.'/');
    
}else{
    $_SESSION['mensaje'] = "Las contraseñas no coinciden";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/login');
}



?>