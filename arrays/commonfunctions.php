<?php
$beers = [
  "Carolus",
  "London Porter",
  "Delirium Red",
  "Corona"
];
//Agregar un nuevo elemento al final
array_push($beers, "Karmeliten");
//eliminar el ultimo elemento del array. Se puede guardar el elemento eliminado
$beer = array_pop($beers);
//Contar elementos del arrray
echo("<p>cantidad de elementos del array:</p>");
echo count($beers);
//Contenido del array
echo("<p>contenido del array:</p>");
print_r($beers);

echo("<p>Ultimo elemento eliminado del array: ".$beer);

if(in_array("Corona", $beers)){
  echo "<p>Existe";
}else{
  echo "<p>No existe";
}

//Combinar 2 arrays
$beers2 = [
  "Carolus 2",
  "London Porter 2",
  "Delirium Red 2",
  "Corona 2"
];

$beerMixed = array_merge($beers, $beers2);
echo "<br>Combinacion de arrays";
print_r($beerMixed);