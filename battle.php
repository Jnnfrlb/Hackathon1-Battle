<?php
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

     <div class="accueil">
       <h1>
         <span class="glitch" data-text="Fight ?">
           Fight !
         </span>
       </h1>
     </div>

     <div class="row accueil">

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

   </body>

</html>
