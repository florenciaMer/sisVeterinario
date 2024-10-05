<?php

$sql = "SELECT * FROM `usuarios` WHERE id_usuario = '$id_usuario' ";
$query = $pdo->prepare($sql);
$query->execute();

//paso la consulta a un array
$usuarios= $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario) {

   $nombre_completo = $usuario['nombre_completo'];
   $email = $usuario['email'];
   $cargo = $usuario['cargo'];
   $id_usuario = $usuario['id_usuario'];
 
}