<?php

//requete powerstats
include 'appelPerso.php';
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
        <img src="image/street-fighter.png" class="image-accueil2" alt="">
      </div>

      <br>
      <div class="accueil">
        <h1>
          <span class="glitch" data-text="ChOose your fighteR ?">
            Choose your fighter !
          </span>
        </h1>
      </div>

      <br><br>

      <div class="container">

<!-- 1e colonne -->
        <div class="row accueil">

<!-- Chuck Norris -->
          <div class="card" style="width: 25%;">
            <div class="element" style="background-image: url('<?php echo $tabChuck['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                    <div class="reward">
                      <p class="card-text reward"><?php foreach ($tabChuck['powerstats'] as $key => $value) {
                          echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                      };?></p>
                    </div>
                </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo "<h5>".$tabChuck['name']."</h5>"; ?></h5>
              <div class="bouton">
                <a href="#" class="btn btn-primary">Choose</a>
              </div>
            </div>
          </div>

<!-- Darth Maul -->
        <div class="card" style="width: 25%;">
          <div class="element" style="background-image: url('<?php echo $tabMaul['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                  <div class="reward">
                    <p class="card-text reward"><?php foreach ($tabMaul['powerstats'] as $key => $value) {
                        echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                    };?></p>
                  </div>
              </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo "<h5>".$tabMaul['name']."</h5>"; ?></h5>
            <div class="bouton">
              <a href="#" class="btn btn-primary">Choose</a>
            </div>
          </div>
        </div>

<!-- Wolverine -->
        <div class="card" style="width: 25%;">
          <div class="element" style="background-image: url('<?php echo $tabWolverine['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                  <div class="reward">
                    <p class="card-text reward"><?php foreach ($tabWolverine['powerstats'] as $key => $value) {
                        echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                    };?></p>
                  </div>
              </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo "<h5>".$tabWolverine['name']."</h5>"; ?></h5>
            <div class="bouton">
              <a href="#" class="btn btn-primary">Choose</a>
            </div>
          </div>
        </div>

<!-- Jar Jar -->
        <div class="card" style="width: 25%;">
          <div class="element" style="background-image: url('<?php echo $tabJarjar['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                  <div class="reward">
                    <p class="card-text reward"><?php foreach ($tabJarjar['powerstats'] as $key => $value) {
                        echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                    };?></p>
                  </div>
              </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo "<h5>".$tabJarjar['name']."</h5>"; ?></h5>
            <div class="bouton">
              <a href="#" class="btn btn-primary">Choose</a>
            </div>
          </div>
        </div>
      </div>

<!-- 2e colonne -->
              <div class="row accueil">

<!-- Mystique -->
                <div class="card" style="width: 25%;">
                  <div class="element" style="background-image: url('<?php echo $tabMystique['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                          <div class="reward">
                            <p class="card-text reward"><?php foreach ($tabMystique['powerstats'] as $key => $value) {
                                echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                            };?></p>
                          </div>
                      </div>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo "<h5>".$tabMystique['name']."</h5>"; ?></h5>
                    <div class="bouton">
                      <a href="#" class="btn btn-primary">Choose</a>
                    </div>
                  </div>
                </div>

<!-- Stormtrooper -->
              <div class="card" style="width: 25%;">
                <div class="element" style="background-image: url('<?php echo $tabStormtrooper['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                        <div class="reward">
                          <p class="card-text reward"><?php foreach ($tabStormtrooper['powerstats'] as $key => $value) {
                              echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                          };?></p>
                        </div>
                    </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo "<h5>".$tabStormtrooper['name']."</h5>"; ?></h5>
                  <div class="bouton">
                    <a href="#" class="btn btn-primary">Choose</a>
                  </div>
                </div>
              </div>

<!-- Poison Ivy -->
              <div class="card" style="width: 25%;">
                <div class="element" style="background-image: url('<?php echo $tabPoisonIvy['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                        <div class="reward">
                          <p class="card-text reward"><?php foreach ($tabPoisonIvy['powerstats'] as $key => $value) {
                              echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                          };?></p>
                        </div>
                    </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo "<h5>".$tabPoisonIvy['name']."</h5>"; ?></h5>
                  <div class="bouton">
                    <a href="#" class="btn btn-primary">Choose</a>
                  </div>
                </div>
              </div>

      <!-- Sauron -->
              <div class="card" style="width: 25%;">
                <div class="element" style="background-image: url('<?php echo $tabSauron['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                        <div class="reward">
                          <p class="card-text reward"><?php foreach ($tabSauron['powerstats'] as $key => $value) {
                              echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                          };?></p>
                        </div>
                    </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo "<h5>".$tabSauron['name']."</h5>"; ?></h5>
                  <div class="bouton">
                    <a href="#" class="btn btn-primary">Choose</a>
                  </div>
                </div>
              </div>
            </div>

<!-- 3e colonne -->
        <div class="row accueil">

<!-- Yoda -->
          <div class="card" style="width: 25%;">
            <div class="element" style="background-image: url('<?php echo $tabYoda['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                    <div class="reward">
                      <p class="card-text reward"><?php foreach ($tabYoda['powerstats'] as $key => $value) {
                          echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                      };?></p>
                    </div>
                </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo "<h5>".$tabYoda['name']."</h5>"; ?></h5>
              <div class="bouton">
                <a href="#" class="btn btn-primary">Choose</a>
              </div>
            </div>
          </div>

<!-- Wonder Woman -->
        <div class="card" style="width: 25%;">
          <div class="element" style="background-image: url('<?php echo $tabWonderWoman['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                  <div class="reward">
                    <p class="card-text reward"><?php foreach ($tabWonderWoman['powerstats'] as $key => $value) {
                        echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                    };?></p>
                  </div>
              </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo "<h5>".$tabWonderWoman['name']."</h5>"; ?></h5>
            <div class="bouton">
              <a href="#" class="btn btn-primary">Choose</a>
            </div>
          </div>
        </div>

<!-- Thor -->
        <div class="card" style="width: 25%;">
          <div class="element" style="background-image: url('<?php echo $tabThor['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                  <div class="reward">
                    <p class="card-text reward"><?php foreach ($tabThor['powerstats'] as $key => $value) {
                        echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                    };?></p>
                  </div>
              </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo "<h5>".$tabThor['name']."</h5>"; ?></h5>
            <div class="bouton">
              <a href="#" class="btn btn-primary">Choose</a>
            </div>
          </div>
        </div>

<!-- Vegeta -->
        <div class="card" style="width: 25%;">
          <div class="element" style="background-image: url('<?php echo $tabVegeta['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                  <div class="reward">
                    <p class="card-text reward"><?php foreach ($tabVegeta['powerstats'] as $key => $value) {
                        echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                    };?></p>
                  </div>
              </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo "<h5>".$tabVegeta['name']."</h5>"; ?></h5>
            <div class="bouton">
              <a href="#" class="btn btn-primary">Choose</a>
            </div>
          </div>
        </div>
      </div>
    </div>



  </body>
</html>
