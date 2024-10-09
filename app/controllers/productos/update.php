<?php
include_once('../../config.php'); // Ensure this path is correct

// Start the session
session_start();


// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and validate form data
    $codigo = $_POST['codigo'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $imagen = $_POST['file'] ?? '';
    $stock = $_POST['stock'] ?? '';
    $stock_minimo = $_POST['stock_minimo'] ?? '';
    $stock_maximo = $_POST['stock_maximo'] ?? '';
    $fyh_ingreso = $_POST['fyh_ingreso'] ?? '';
    $id_usuario = $_POST['id_usuario'] ?? '';
    $id_producto = $_POST['id_producto'] ?? '';
    $fyh_actualizacion = date('Y-m-d H:i:s');

    if ($_FILES['file']['name'] != null) {
        $nombre_archivo = date('Y-m-d-H-i-s') . '-' . basename($_FILES['file']['name']);
        $location = '../../../public/img/productos/' . $nombre_archivo;

        // Check file type and size here (add your checks)

        if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
            $imagen = $nombre_archivo; 
        } else {
            $_SESSION['mensaje'] = "Error al subir la imagen.";
            $_SESSION['icono'] = "error";
            header('Location: ' . $URL . '/admin/productos/update.php?id_producto=' . $id_producto);
            exit();
        }
    }

    // Prepare the base query
    $query = "UPDATE productos SET 
                codigo = :codigo, 
                nombre = :nombre, 
                descripcion = :descripcion, 
                imagen = :imagen, 
                stock = :stock, 
                stock_minimo = :stock_minimo, 
                stock_maximo = :stock_maximo, 
                fyh_ingreso = :fyh_ingreso, 
                id_usuario = :id_usuario, 
                fyh_actualizacion = :fyh_actualizacion
              WHERE id_producto = :id_producto";

    // Prepare the statement
    $sentencia = $pdo->prepare($query);
    $sentencia->bindParam(':codigo', $codigo);
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':descripcion', $descripcion);
    $sentencia->bindParam(':imagen', $imagen);
    $sentencia->bindParam(':stock', $stock);
    $sentencia->bindParam(':stock_minimo', $stock_minimo);
    $sentencia->bindParam(':stock_maximo', $stock_maximo);
    $sentencia->bindParam(':fyh_ingreso', $fyh_ingreso);
    $sentencia->bindParam(':id_usuario', $id_usuario);
    $sentencia->bindParam(':fyh_actualizacion', $fyh_actualizacion);
    $sentencia->bindParam(':id_producto', $id_producto);

    // Execute the statement
    if ($sentencia->execute()) {
        $_SESSION['mensaje'] = "Se actualizó de manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: ' . $URL . '/admin/productos');
        exit();
    } else {
        // Fetch and display the error
        $errorInfo = $sentencia->errorInfo();
        $_SESSION['mensaje'] = "No se pudo actualizar: " . $errorInfo[2];
        $_SESSION['icono'] = "error";
        header('Location: ' . $URL . '/admin/productos/update.php?id_producto=' . $id_producto);
        exit();
    }
}
?>
