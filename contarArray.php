<?php

$data = $_POST['comentario'];
$dataArray = json_decode($data, true);
$conteo = count($dataArray);

$response = [
    "conteo" => $dataArray
];

echo json_encode($response);

?>