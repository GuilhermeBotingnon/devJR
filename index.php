<?php 

$json = file_get_contents("assets/json/produtos.json", true);
$produtos = json_decode($json, true);

include_once"assets/php/carrousel.php";
