<?php

$sql = "SELECT * FROM `productos` ";
$query = $pdo->prepare($sql);
$query->execute();

//paso la consulta a un array
$productos= $query->fetchAll(PDO::FETCH_ASSOC);
