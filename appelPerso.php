<?php

//Chuck Norris
$jsonChuck = file_get_contents("https://akabab.github.io/superhero-api/api/id/176.json");
$tabChuck=json_decode($jsonChuck,true);
//echo "<h3>".$tabChuck['name']."</h3>";
//$test = foreach ($tabChuck['powerstats'] as $key => $value) {
    //echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
//};

//Darth Maul
$jsonMaul = file_get_contents("https://akabab.github.io/superhero-api/api/id/207.json");
$tabMaul=json_decode($jsonMaul,true);

//Wolverine
$jsonWolverine = file_get_contents("https://akabab.github.io/superhero-api/api/id/717.json");
$tabWolverine=json_decode($jsonWolverine,true);

//Jar Jar
$jsonJarjar = file_get_contents("https://akabab.github.io/superhero-api/api/id/354.json");
$tabJarjar=json_decode($jsonJarjar,true);

//Mystique
$jsonMystique = file_get_contents("https://akabab.github.io/superhero-api/api/id/480.json");
$tabMystique=json_decode($jsonMystique,true);

//Poison Ivy
$jsonPoisonIvy = file_get_contents("https://akabab.github.io/superhero-api/api/id/522.json");
$tabPoisonIvy=json_decode($jsonPoisonIvy,true);

//Sauron
$jsonSauron = file_get_contents("https://akabab.github.io/superhero-api/api/id/574.json");
$tabSauron=json_decode($jsonSauron,true);

//Stormtrooper
$jsonStormtrooper = file_get_contents("https://akabab.github.io/superhero-api/api/id/639.json");
$tabStormtrooper=json_decode($jsonStormtrooper,true);

//Yoda
$jsonYoda = file_get_contents("https://akabab.github.io/superhero-api/api/id/729.json");
$tabYoda=json_decode($jsonYoda,true);

//Wonder Woman
$jsonWonderWoman = file_get_contents("https://akabab.github.io/superhero-api/api/id/720.json");
$tabWonderWoman=json_decode($jsonWonderWoman,true);

//Thor
$jsonThor = file_get_contents("https://akabab.github.io/superhero-api/api/id/659.json");
$tabThor=json_decode($jsonThor,true);

//Vegeta
$jsonVegeta = file_get_contents("https://akabab.github.io/superhero-api/api/id/686.json");
$tabVegeta=json_decode($jsonVegeta,true);


//tableau heros avec les 12 personnages
$tabHeros = array();
$tabHeros[0] = array($tabChuck);
$tabHeros[1] = array($tabMaul);
$tabHeros[2] = array($tabWolverine);
$tabHeros[3] = array($tabJarjar);
$tabHeros[4] = array($tabMystique);
$tabHeros[5] = array($tabPoisonIvy);
$tabHeros[6] = array($tabSauron);
$tabHeros[7] = array($tabStormtrooper);
$tabHeros[8] = array($tabYoda);
$tabHeros[9] = array($tabWonderWoman);
$tabHeros[10] = array($tabThor);
$tabHeros[11] = array($tabVegeta);

//var_dump($tabHeros);*/




 ?>
