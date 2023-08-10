<?php

$data = $_POST['comentario'];
$json = utf8_encode($data);
$dataArray = json_decode($json, true);
$newJsonArray = [];
$search = [];

foreach ($dataArray as $item) {
  foreach ($item["Membership"] as $membership) {
    if ($membership === "solid") {
      $tittleValue = "fas fa-" . $item["Class"];
    } elseif ($membership === "regular") {
      $tittleValue = "far fa-" . $item["Class"];
    } elseif ($membership === "light") {
      $tittleValue = "fal fa-" . $item["Class"];
    } elseif ($membership === "duotone") {
      $tittleValue = "fad fa-" . $item["Class"];
    } elseif ($membership === "brands") {
      $tittleValue = "fab fa-" . $item["Class"];
  }
    // para las busquedas eliminamos mayusculas, incluida palabras compuestas 
    $words = explode(' ', $item["Name"]);
    $lowercasedWords = array_map('lcfirst', $words);
    $lowercasedName = implode(' ', $lowercasedWords);

    if (empty($item["Keywords"])){
      $search = [$lowercasedName];  
    } else {
      $search = array_merge($item["Keywords"], [$lowercasedName]);
    }
   
    $newItem = [
      "title" => $tittleValue,
      "searchTerms" => $search
    ];

    $newJsonArray[] = $newItem;
  }
}
echo json_encode($newJsonArray);

?>