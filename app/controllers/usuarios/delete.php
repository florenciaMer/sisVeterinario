<?php
include_once('../../config.php'); // Asegúrate de que esta ruta es correcta

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén y valida los datos del formulario
    
    $id_usuario = $_POST['id_usuario'] ?? '';
    
    $sql = "DELETE FROM  `usuarios` WHERE id_usuario = '$id_usuario'";
    $query = $pdo->prepare($sql);
    session_start();
    if($query->execute()){
   

        $_SESSION['mensaje'] = "Se eliminó al usuario correctamente";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/admin/usuarios/index.php');
    }else{
        $_SESSION['mensaje'] = "Error al eliminar";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/admin/usuarios/create.php');
    };
}
           



