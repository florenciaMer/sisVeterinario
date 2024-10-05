<?php
include_once('../../config.php'); // Ensure this path is correct

// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and validate form data
    $nombres = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_verify = $_POST['password_verify'] ?? '';
    $cargo = $_POST['cargo'] ?? '';
    $id_usuario = $_POST['id_usuario'] ?? '';
    $fechaHora = date('Y-m-d H:i:s'); // Current timestamp

    // Prepare the base query
    $query = "UPDATE usuarios SET 
                nombre_completo = :nombre_completo, 
                cargo = :cargo, 
                fyh_actualizacion = :fyh_actualizacion";

    // Check if password needs to be updated
    if ($password !== "") {
        if ($password === $password_verify) {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $query .= ", password = :password";
        } else {
           
            $_SESSION['mensaje'] = "Las contraseñas no coinciden";
            $_SESSION['icono'] = "error";
            header('Location: ' . $URL . '/admin/usuarios/update.php?id_usuario=' . $id_usuario);
            exit();
        }
    }

    // Complete the SQL statement
    $query .= " WHERE id_usuario = :id_usuario";

    // Prepare the statement
    $sentencia = $pdo->prepare($query);
    $sentencia->bindParam(':nombre_completo', $nombres);
    $sentencia->bindParam(':cargo', $cargo);
    $sentencia->bindParam(':fyh_actualizacion', $fechaHora);
    $sentencia->bindParam(':id_usuario', $id_usuario);

    // Bind the password if it's being updated
    if ($password !== "") {
        $sentencia->bindParam(':password', $hashed_password);
    }

    // Execute the statement
    if ($sentencia->execute()) {
        $_SESSION['mensaje'] = "Se actualizó de manera correcta";
        $_SESSION['icono'] = "success";
        header('Location: ' . $URL . '/admin/usuarios');
    } else {
        $_SESSION['mensaje'] = "No se pudo actualizar";
        $_SESSION['icono'] = "error";
        header('Location: ' . $URL . '/admin/usuarios/update.php?id_usuario=' . $id_usuario);
    }
}
