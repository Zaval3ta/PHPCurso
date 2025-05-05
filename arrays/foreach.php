<?php
//Index Array
$names = ["Francisco", "Roberto", "Juan"];
//Associative Array
$beer =[
  "name" => "Erdinger",
  "alcohol" => 7.9,
  "country" => "Alemania"
];

foreach($names as $name){
  echo $name.": ";
}
//Solo muestra el value
foreach($beer as $b){
  echo $b."; ";
}
//Mestra Key y value
foreach($beer as $k => $b){
  echo $k." ".$b."; ";
}