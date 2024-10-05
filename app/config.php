<?php

define('APP_NAME', 'SIS | Veterinario');
$URL = 'http://localhost/veterinario'; // Incluye el esquema http:// o https://

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'veterinaria');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;
try {
    // Ajuste en la configuración de PDO
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ));
   // echo "Conexión exitosa con la base de datos";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

date_default_timezone_set('America/Argentina/Buenos_Aires');
 $fechaHora = date('Y-m-d H:i:s');
?>
