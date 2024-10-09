<?php
include_once('../../config.php'); 

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$stock_minimo = $_POST['stock_minimo'];
$stock_maximo = $_POST['stock_maximo'];
$precio_compra = $_POST['precio_compra'];
$precio_venta = $_POST['precio_venta'];
$fecha_ingreso = $_POST['fecha_ingreso'];
//$file = $_POST['file'];
$id_usuario = $_POST['id_usuario'];
$fechaHora = date('Y-m-d H:i:s'); // Fecha y hora actuales

if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    // Ruta de destino del archivo
    $nombre_archivo = date('Y-m-d-h-m-s').$_FILES['file']['name'];
    $location = '../../../public/img/productos/'.$nombre_archivo;
    $file_name = basename($_FILES['file']['name']); // Obtener el nombre del archivo
    $target_file = $location . $file_name;
   // move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
    // Mover el archivo subido
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        // Preparar la consulta
        try {
            $sentencia = $pdo->prepare("INSERT INTO productos
            (codigo, nombre, descripcion, stock, stock_minimo, stock_maximo, precio_compra, precio_venta, fyh_ingreso, id_usuario, fyh_creacion, imagen)
            VALUES (:codigo, :nombre, :descripcion, :stock, :stock_minimo, :stock_maximo, :precio_compra, :precio_venta,
            :fecha_ingreso, :id_usuario, :fyh_creacion, :imagen)");

            $sentencia->bindParam(':codigo', $codigo);
            $sentencia->bindParam(':nombre', $nombre);
            $sentencia->bindParam(':descripcion', $descripcion);
            $sentencia->bindParam(':stock', $stock);
            $sentencia->bindParam(':stock_minimo', $stock_minimo);
            $sentencia->bindParam(':stock_maximo', $stock_maximo);
            $sentencia->bindParam(':precio_compra', $precio_compra);
            $sentencia->bindParam(':precio_venta', $precio_venta);
            $sentencia->bindParam(':fecha_ingreso', $fecha_ingreso);
            $sentencia->bindParam(':id_usuario', $id_usuario);
            $sentencia->bindParam(':fyh_creacion', $fechaHora);
            $sentencia->bindParam(':imagen', $file_name); // Aquí se pasa el nombre del archivo

            if($sentencia->execute()){
                session_start();
                $_SESSION['mensaje'] = "Se registro al producto correctamente";
                $_SESSION['icono'] = "success";
                header('Location: '.$URL.'/admin/productos/index.php');
            }else{
                $_SESSION['mensaje'] = "Error al registrar";
                $_SESSION['icono'] = "error";
                header('Location: '.$URL.'/admin/productos/create.php');
            };
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    } else {
        echo 'Error al mover el archivo subido.';
    }
} else {
    echo 'No se ha subido ningún archivo o ha ocurrido un error.';
}
?>
