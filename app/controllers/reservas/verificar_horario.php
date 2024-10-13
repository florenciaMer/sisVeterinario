<?php
include_once('../../config.php');
$fecha = $_GET['fecha'];


$hora_cita = "";
$query = $pdo->prepare("SELECT * FROM reservas WHERE fecha_cita = :fecha");
$query->bindParam(':fecha', $fecha);
$query->execute();

$datos = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($datos as $dato) {
    $hora_cita = $dato['hora_cita'];
    echo $hora_cita;
    $horario = [
        '08:00 a 09:00',
        '09:00 a 10:00',
        '10:00 a 11:00',
        '11:00 a 12:00',
        '12:00 a 13:00',
        '13:00 a 14:00',
        '14:00 a 15:00',
        '15:00 a 16:00'
    ];

    for ($i=0; $i<8; $i++) {
        if ($horario[$i] == $hora_cita) {
            $num = $i + 1;
            $hora_res = "#btn_h".$num;
            
            // Generamos el código JavaScript para deshabilitar y cambiar el color del botón
            echo "<script> $('$hora_res').attr('disabled', true);
                  $('$hora_res').css('background-color', 'red');
            </script>";
        }
    }
}

