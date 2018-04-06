<?php

include 'appelPerso.php';


$life1 = 1000;
$life2 = 1000;
$perso1 = array_rand($tabJarjar['powerstats'],1);
$perso2 = array_rand($tabVegeta['powerstats'],1);
$attack1=$tabJarjar['powerstats'][$perso1];
$attack2 =$tabVegeta['powerstats'][$perso2];


while ($life1 > 0 && $life2 > 0) {
    $life1 -= $attack2;
    $life2 -= $attack1;
}if ($life1 <= 0) {
    echo "Le vainqueur est ". $tabVegeta['name']. ", il lui reste " .$life2."pts de vie."."<br>" ;
    echo "Il reste ". $life1 ." à " .$tabJarjar['name'];

}else{
    echo "Le vainqueur est ". $tabJarjar['name']. ", il lui reste " . $life1."<br>" ;
    echo "Il reste ". $life2 ." à " .$tabVegeta['name'];
}


 ?>
