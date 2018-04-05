<?php

// $url will contain the API endpoint
$url = "https://app.teamleader.eu/api/helloWorld.php";

// $fields contains all the fields that will be POSTed
$fields = array(
    "api_group"=>("YOUR_API_GROUP"), //ICI METTRE TON GROUPE
    "api_secret"=>("YOUR_API_SECRET") //ICI METTRE TA CLE
);

// Make the POST request using Curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

// Decode and display the output
$api_output =  curl_exec($ch);
$json_output = json_decode($api_output);
$output = $json_output?$json_output:$api_output;

// Clean up
curl_close($ch);

?>
