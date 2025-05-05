<?php
// key => valor
$beer = [
  "name" => "Erdinger",
  "alcohol" => 6.4,
  "country" => "Alemania"
];
//Cambiar el valor con la key de un array

$beer ["alcohol"] = 10; //$variable [key] = valor;
echo $beer["alcohol"]; //key del array