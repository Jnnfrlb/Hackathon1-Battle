<?php

$json = file_get_contents("https://akabab.github.io/superhero-api/api/id/150.json");
$tab=json_decode($json,true);
echo "<br><br>";

echo "<h3>".$tab['name']."</h3>";
foreach ($tab['powerstats'] as $key => $value) {
    echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";

};

?>
