<?php
include 'appelPerso.php';
/*
Chuck Norris = $tabHeros[0][0]['name'];
Dark Maul = $tabHeros[1][0]['name'];
Wolverine = $tabHeros[2][0]['name'];
Jar Jar Binks = $tabHeros[3][0]['name'];
Mystique = $tabHeros[4][0]['name'];
Stormtrooper = $tabHeros[5][0]['name'];
Poison Ivy = $tabHeros[6][0]['name'];
Sauron = $tabHeros[7][0]['name'];
Yoda = $tabHeros[8][0]['name'];
Wonder Woman = $tabHeros[9][0]['name'];
Thor = $tabHeros[10][0]['name'];
Vegeta = $tabHeros[11][0]['name'];

*/
foreach ($tabHeros as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key => $retour) {
            echo $retour;
        }
    }
    
}









/*$json = file_get_contents("https://akabab.github.io/superhero-api/api/id/127.json");
$tab=json_decode($json,true);
echo "<br><br>";

echo $tab['name'];
foreach ($tab['powerstats'] as $key => $value) {
    echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
};
$perso1 = array_rand($tab['powerstats'],1);
$attack1=$tab['powerstats'][$perso1];
$life1= 1000;



echo "<br><br>";
$jsonAdv = file_get_contents("https://akabab.github.io/superhero-api/api/id/176.json");
$tabAdv=json_decode($jsonAdv,true);
echo "<br><br>";

echo $tabAdv['name'];
foreach ($tabAdv['powerstats'] as $keyAdv => $valueAdv) {
    echo $keyAdv .":"."<br>"."<progress value=".$valueAdv." max=\"100\"></progress><br>";
};
$perso2 = array_rand($tabAdv['powerstats'],1);
$attack2 =$tabAdv['powerstats'][$perso2];
$life2 = 1000;


while ($life1 > 0 && $life2 > 0) {
    $life1 -= $attack2;
    $life2 -= $attack1;
}if ($life1 <= 0) {
    echo "Le vainqueur est ". $tabAdv['name']. ", il lui reste " .$life2."pts de vie."."<br>" ;
    echo "Il reste ". $life1 ." à " .$tab['name'];
    
}else{
    echo "Le vainqueur est ". $tab['name']. ", il lui reste " . $life1."<br>" ;
    echo "Il reste ". $life2 ." à " .$tabAdv['name'];
}

*/
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
