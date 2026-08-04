<?php


$data = json_decode(file_get_contents("php://input"));

$temperatura=$data->temperatura;
$humedad=$data->humedad;

//echo "\nTemperatura: ".$temperatura."\n";
//echo "Humedad: ".$humedad;

$datos=[
    "temperatura" => $temperatura,
    "humedad" => $humedad];

echo json_encode($datos);

// Ejemplo para guardar en archivo
//file_put_contents("datos.txt", "Temp: $temperatura - Hum: $humedad\n", FILE_APPEND);
?>
