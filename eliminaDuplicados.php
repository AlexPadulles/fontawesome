<?php

$data = $_POST['comentario'];
$json = utf8_encode($data);
$dataArray = json_decode($json, true);
$newJsonArray = [];
$search = [];

// Eliminar objetos con títulos duplicados
$uniqueTitles = [];
$uniqueJsonArray = [];

foreach ($dataArray as $newItem) {
  if (!in_array($newItem["title"], $uniqueTitles)) {
    $uniqueTitles[] = $newItem["title"];
    $uniqueJsonArray[] = $newItem;
  }
}

echo json_encode($uniqueJsonArray);

?>