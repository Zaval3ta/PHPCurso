<?php
$beers = [
  [
    "name" => "Corona",
    "alcohol" => 12.2,
    "country" => "Mexico"
  ],
  [
    "name" => "Victoria",
    "alcohol" => "11.2",
    "country" => "Mexico"
  ]
];

echo $beers[1]["name"];
echo("<br>");
echo("<h3>Recorrer con foreach:</h3>");
foreach($beers as $beer){
  foreach($beer as $value){
    echo $value."<br>";
  }
}
echo("<h3>Recorrer con foreach e imprimer junto con su key:</h3>");
foreach($beers as $beer){
  foreach($beer as $key => $value){
    echo $key.": ".$value."<br>";
  }
}