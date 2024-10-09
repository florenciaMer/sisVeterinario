<?php
include_once('../../config.php'); // Asegúrate de que esta ruta es correcta

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén y valida los datos del formulario
    
    $id_producto = $_POST['id_producto'] ?? '';
    
    $sql = "DELETE FROM  `productos` WHERE id_producto = '$id_producto'";
    $query = $pdo->prepare($sql);
    session_start();
    if($query->execute()){
   

        $_SESSION['mensaje'] = "Se eliminó al producto correctamente";
        $_SESSION['icono'] = "success";
        header('Location: '.$URL.'/admin/productos/index.php');
    }else{
        $_SESSION['mensaje'] = "Error al eliminar";
        $_SESSION['icono'] = "error";
        header('Location: '.$URL.'/admin/productos/create.php');
    };
}
           



