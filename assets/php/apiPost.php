<?php 

$data_results = file_get_contents("assets/json/produtos.json");
  $tempArray = json_decode($data_results);

  $tempArray[] = $produto ;
  $jsonData = json_encode($tempArray);

  file_put_contents('assets/json/produtos.json', $jsonData);