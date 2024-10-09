<?php

$id_producto = $_GET['id_producto'];

// Use prepared statements to avoid SQL injection
$sql = "SELECT * FROM `productos` as pro INNER JOIN usuarios as usu ON pro.id_usuario = usu.id_usuario WHERE pro.id_producto = :id_producto;";
$query = $pdo->prepare($sql);
$query->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);

if ($query->execute()) {
    // Fetch the product data
    $producto = $query->fetch(PDO::FETCH_ASSOC);

    if (!empty($producto)) {
        $codigo = $producto['codigo'];
        $nombre = $producto['nombre'];
        $descripcion = $producto['descripcion'];
        $imagen = $producto['imagen'];
        $stock = $producto['stock'];
        $stock_minimo = $producto['stock_minimo'];
        $stock_maximo = $producto['stock_maximo'];
        $precio_compra = $producto['precio_compra'];
        $precio_venta = $producto['precio_venta'];
        $fyh_ingreso = $producto['fyh_ingreso'];
        $id_usuario = $producto['id_usuario'];
        $nombre_usuario = $producto['nombre_completo'];

        // You can now use the above variables as needed
    } else {
        // Handle the case where no product is found
        echo "Producto no encontrado.";
    }
} else {
    // Handle the case where the query fails
    echo "Error en la consulta: " . $query->errorInfo()[2];
}
