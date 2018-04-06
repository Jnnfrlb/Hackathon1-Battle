<?php

require 'appelPerso.php';

$newPerso = (array_rand($tabHeros,1));
$id = $tabHeros[n][n]["id"];

echo $id;
//var_dump($id);
//var_dump($tabHeros);
//echo ($newPerso);


/*foreach ($tab['powerstats'] as $key => $value) {
    echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";


$json = file_get_contents("https://akabab.github.io/superhero-api/api/id/150.json");
$tab=json_decode($json,true);
$power=$tab['powerstats'];
var_dump($tab);
var_dump($power);
$randkey = (array_rand($power,1));
$degat=$power[$randkey];
//echo $power[$randkey];
