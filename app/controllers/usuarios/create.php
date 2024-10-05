<?php
include_once('../../config.php'); // Asegúrate de que esta ruta es correcta

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén y valida los datos del formulario
    $nombres = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_verify = $_POST['password_verify'] ?? '';
    $cargo = $_POST['cargo'] ?? '';
    
    $sql = "SELECT * FROM `usuarios` WHERE email = '$email'";
    $query = $pdo->prepare($sql);
    $query->execute();
    
    //paso la consulta a un array
    $usuarios= $query->fetchAll(PDO::FETCH_ASSOC);
    $contador = 0;
    foreach ($usuarios as $key => $usuario) {
       $contador++;
    }

    if ($contador>0) {
        session_start();
       $_SESSION['mensaje'] = "Este email ".$email."ya se encuentra registrado en la base de datos";
       $_SESSION['icono'] = "error";
       header('Location: '.$URL.'/admin/usuarios/create.php');
    }else{
        if ($password == $password_verify) {
            // Hashea la contraseña para almacenarla de forma segura
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    
            try {
                // Prepara la sentencia SQL
                $sentencia = $pdo->prepare("INSERT INTO usuarios
                (nombre_completo, email, password, cargo, fyh_creacion)
                VALUES (:nombre_completo, :email, :password, :cargo, :fyh_creacion)");
    
                // Vincula los parámetros
                $sentencia->bindParam(':nombre_completo', $nombres);
                $sentencia->bindParam(':email', $email);
                $sentencia->bindParam(':password', $hashed_password);
                $sentencia->bindParam(':cargo', $cargo);
                $sentencia->bindParam(':fyh_creacion', $fechaHora);
    
                // Ejecuta la sentencia
                if($sentencia->execute()){
                    session_start();
                    $_SESSION['mensaje'] = "Se registro al usuario correctamente";
                    $_SESSION['icono'] = "success";
                    header('Location: '.$URL.'/admin/usuarios/index.php');
                }else{
                    $_SESSION['mensaje'] = "Error al registrar";
                    $_SESSION['icono'] = "error";
                    header('Location: '.$URL.'/admin/usuarios/create.php');
                };
    
            } catch (PDOException $e) {
           
            }
        }
    }
    // Verifica que las contraseñas coincidan
   
}



