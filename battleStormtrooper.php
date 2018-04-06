<?php
include 'appelPerso.php';
include 'vieStormtrooper.php';
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

     <div class="accueil"><a href="personnages.php">
       <img src="image/street-fighter.png" class="image-accueil" alt=""></a>
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
           <div class="element" style="background-image: url('<?php echo $tabStormtrooper['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                   <div class="reward">
                     <p class="card-text reward"><?php foreach ($tabStormtrooper['powerstats'] as $key => $value) {
                         echo $key .":"."<br>"."<progress value=".$value." max=\"100\"></progress><br>";
                     };?></p>
                   </div>
               </div>
           <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>".$tabStormtrooper['name']."</h5><br/>"."<progress value=".$life1." max=\"1000\"></progress><br>"; ?></h5>
           </div>
         </div>

         <div class="col-2 vs">
           <h1>VS</h1>
         </div>

         <div class="card col-3">
           <div class="element" style="background-image: url('<?php echo $tabWolverine['images']['sm']?>'); background-size: 100% 25vw ; background-repeat: no-repeat">
                   <div class="reward">
                     <p class="card-text reward"><?php foreach ($tabWolverine['powerstats'] as $key => $value) {
                         echo $key .":"."<br>"."<progress value=".$value." max=\"1000\"></progress><br>";
                     };?></p>
                   </div>
               </div>
           <div class="card-body">
             <h5 class="card-title"><?php echo "<h5>".$tabWolverine['name']."</h5><br/>"."<progress value=".$life2." max=\"1000\"></progress><br>"; ?></h5>
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
              echo "Le vainqueur est ". $tabWolverine['name']. ", il lui reste " .$life2."pts de vie."."<br>" . $tabStormtrooper['name'] ." est mouru !";

          }else{
              echo "Le vainqueur est ". $tabStormtrooper['name']. ", il lui reste " . $life1." pts.<br>" .$tabWolverine['name'] ." est mouru !";
          }
         ?>
      </div>
      <br><br>
       <div class="bouton">
         <a href="battleStormtrooper.php" class="btn btn-primary btn-primary2">Restart !</a>
       </div>
       <br><br>



     </div>


   </body>

</html>
