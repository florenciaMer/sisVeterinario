<?php
include_once('../../config.php');

$sql = "SELECT title, start, end, color FROM reservas";
$query = $pdo->prepare($sql);
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result)

?>