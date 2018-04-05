<?php

//$json=file_​get​_c​ontents("https://akabab.github.io/superhero−api/api/id/1.json");
//$tab=json_decode($json);
//var_​dump($tab);

//requete powerstats
$request1 = "https://cdn.rawgit.com/akabab/superhero-api/0.2.0/api/powerstats/1.json" ;
$response1 = file_get_contents($request1);
$jsonobj1 = json_decode($response1, true);

var_dump($response1);
echo "<br>";
echo $response1[1];


//requete 2
/*$request = "https://cdn.rawgit.com/akabab/superhero-api/0.2.0/api/id/1.json" ;
$response = file_get_contents($request);
$jsonobj = json_decode($response);

var_dump($response);
echo "<br>";

echo $response[2];*/

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hackathon Battle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/font-css.css">
  </head>
  <body>

    <div class="total">

      <div class="accueil">
        <img src="image/street-fighter.png" class="image-accueil" alt="">
      </div>

      <br>
      <div class="accueil">
        <h1>
          <span class="glitch" data-text="ChOose your fighteR">
            Choose your fighter !
          </span>
        </h1>
      </div>

      <br><br>

      <div class="container">
        <div class="row accueil">

          <div class="card" style="width: 25%;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo 'Test' ?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="bouton">
                <a href="#" class="btn btn-primary">Choose</a>
              </div>
            </div>
          </div>

          <div class="card" style="width: 25%;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo 'Test' ?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="bouton">
                <a href="#" class="btn btn-primary">Choose</a>
              </div>
            </div>
          </div>

          <div class="card" style="width: 25%;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo 'Test' ?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="bouton">
                <a href="#" class="btn btn-primary">Choose</a>
              </div>
            </div>
          </div>

          <div class="card" style="width: 25%;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo 'Test' ?></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="bouton">
                <a href="#" class="btn btn-primary">Choose</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>



  </body>
</html>
