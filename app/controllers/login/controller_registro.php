<?php
include_once('../../config.php'); // Asegúrate de que esta ruta es correcta

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén y valida los datos del formulario
    $nombre_completo = $_POST['nombre_completo'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_verify = $_POST['password_repeat'] ?? '';
    $cargo = 'CLIENTE';
    
    $sql = "SELECT * FROM `usuarios` WHERE email = '$email'";
    $query = $pdo->prepare($sql);
    $query->execute();
    
    // paso la consulta a un array
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
    $contador = 0;
    foreach ($usuarios as $key => $usuario) {
       $contador++;
    }

    if ($contador > 0) {
        session_start();
        $_SESSION['mensaje'] = "Este email " . $email . " ya se encuentra registrado en la base de datos";
        $_SESSION['icono'] = "error";
        header('Location: ' . $URL . '/login/registro.php');
    } else {
        if ($password == $password_verify) {
            // Hashea la contraseña para almacenarla de forma segura
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            try {
                // Prepara la sentencia SQL
                $sentencia = $pdo->prepare("INSERT INTO usuarios
                    (nombre_completo, email, password, cargo, fyh_creacion)
                    VALUES (:nombre_completo, :email, :password, :cargo, :fyh_creacion)");
    
                // Vincula los parámetros
                $sentencia->bindParam(':nombre_completo', $nombre_completo);
                $sentencia->bindParam(':email', $email);
                $sentencia->bindParam(':password', $hashed_password);
                $sentencia->bindParam(':cargo', $cargo);

                // Define la fecha y hora actual para fyh_creacion
                $fechaHora = date('Y-m-d H:i:s');
                $sentencia->bindParam(':fyh_creacion', $fechaHora);

                // Ejecuta la sentencia
                if ($sentencia->execute()) {
                    session_start();
                    $_SESSION['mensaje'] = "Se registró al usuario correctamente";
                    $_SESSION['icono'] = "success";
                    
                    //codigo del login
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
                        
                            $_SESSION['mensaje'] = "Bienvenido al sistema";
                            $_SESSION['icono'] = "success";
                            $_SESSION['session_email'] = $email;
                                header('Location: '.$URL.'/');
                                
                            }else{
                                $_SESSION['mensaje'] = "Las contraseñas no coinciden";
                                $_SESSION['icono'] = "error";
                                header('Location: '.$URL.'/login');
                            }

                } else {
                    session_start();
                    $_SESSION['mensaje'] = "Error al registrar";
                    $_SESSION['icono'] = "error";
                    header('Location: ' . $URL . '/login/registro.php');
                }
            } catch (PDOException $e) {
                session_start();
                $_SESSION['mensaje'] = "Error: " . $e->getMessage();
                $_SESSION['icono'] = "error";
                header('Location: ' . $URL . '/admin/usuarios/create.php');
            }
        } else {
            session_start();
            $_SESSION['mensaje'] = "Las contraseñas no coinciden";
            $_SESSION['icono'] = "error";
            header('Location: ' . $URL . '/login/registro.php');
        }
    }
}




