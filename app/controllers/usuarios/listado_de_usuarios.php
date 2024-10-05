<?php

$sql = "SELECT * FROM `usuarios` ";
$query = $pdo->prepare($sql);
$query->execute();

//paso la consulta a un array
$usuarios= $query->fetchAll(PDO::FETCH_ASSOC);
