<?php
include 'appelPerso.php';
include 'vie.php';
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

     <div class="accueil">
       <img src="image/street-fighter.png" class="image-accueil" alt="">
     </div>

     <div class="accueil">
       <h1>
         <span class="glitch" data-text="Fight !">
           Fight !
         </span>
       </h1>
     </div>
     <br><br>

     <div class="container">

       <div class="row accueil">

         <div class="card col-3 offset-2">
           <div class="element" style="background-image: url('<?php echo $tabJarjar['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                   <div class="reward">
                     <p class="card-text reward"><?php foreach ($tabJarjar['powerstats'] as $key => $value) {
                         echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                     };?></p>
                   </div>
               </div>
           <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>".$tabJarjar['name']."</h5><br/>"."<progress value=".$life1." max=\"1000\"></progress><br>"; ?></h5>
           </div>
         </div>

         <div class="col-2 vs">
           <h1>VS</h1>
         </div>

         <div class="card col-3">
           <div class="element" style="background-image: url('<?php echo $tabVegeta['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                   <div class="reward">
                     <p class="card-text reward"><?php foreach ($tabVegeta['powerstats'] as $key => $value) {
                         echo $key .":"."<br>"."<progress value=".$value." max=\"1000\"></progress><br>";
                     };?></p>
                   </div>
               </div>
           <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>".$tabVegeta['name']."</h5><br/>"."<progress value=".$life2." max=\"1000\"></progress><br>"; ?></h5>
           </div>
         </div>

       </div>
       <br><br>
      <div class="accueil message">
        <?php
          while ($life1 > 0 && $life2 > 0) {
              $life1 -= $attack2;
              $life2 -= $attack1;
          }if ($life1 <= 0) {
              echo "Le vainqueur est ". $tabVegeta['name']. ", il lui reste " .$life2."pts de vie."."<br>" . $tabJarjar['name'] ." est mouru !";

          }else{
              echo "Le vainqueur est ". $tabJarjar['name']. ", il lui reste " . $life1."<br>" . "Il reste ". $tabVegeta['name'] ." est mouru !";
          }
         ?>
      </div>
      <br><br>
       <div class="bouton">
         <a href="battle.php" class="btn btn-primary btn-primary2">Restart !</a>
       </div>
       <br><br>



     </div>


   </body>

</html>
