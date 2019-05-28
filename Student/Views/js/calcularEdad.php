<?php

function calcularTiempo($fechaInicio, $fechaFin){
    $dateTime1 = date_create($fechaInicio);
    $dateTime2 = date_create($fechaFin);

    $interval = date_diff($dateTime1, $dateTime2);
    $tiempo = array();

    foreach ($interval as $valor) {
        $tiempo[] = $valor;
    }
    return $tiempo;
}


$fechaInicio = $_POST['fechaNacimiento'];
$fechaFinal = date('d-m-Y');

$edadCalculada = calcularTiempo($fechaInicio, $fechaFinal)[0];

echo json_encode($edadCalculada);