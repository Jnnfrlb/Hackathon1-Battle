<?php

include 'appelPerso.php';


$life1 = 1000;
$life2 = 1000;
$perso1 = array_rand($tabMystique['powerstats'],1);
$perso2 = array_rand($tabWonderWoman['powerstats'],1);
$attack1=$tabMystique['powerstats'][$perso1];
$attack2 =$tabWonderWoman['powerstats'][$perso2];


  while ($life1 > 0 && $life2 > 0) {
      $life1 -= $attack2;
      $life2 -= $attack1;
  }if ($life1 <= 0) {
      return "Le vainqueur est ". $tabWonderWoman['name']. ", il lui reste " .$life2."pts de vie."."<br>" ."Il reste ". $life1 ." à " .$tabMystique['name'];

  }else{
      return "Le vainqueur est ". $tabMystique['name']. ", il lui reste " . $life1."<br>" . "Il reste ". $life2 ." à " .$tabWonderWoman['name'];
  }




 ?>
