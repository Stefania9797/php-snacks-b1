<?php 
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
$games=[
    //Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
    ["squadra_casa"=>"Milano", "squadra_ospite"=>"Bologna","punti_casa"=>"20","punti_ospite"=>"40"],
    ["squadra_casa"=>"Roma", "squadra_ospite"=>"Trento","punti_casa"=>"80","punti_ospite"=>"30"],
    ["squadra_casa"=>"Venezia", "squadra_ospite"=>"Bergamo","punti_casa"=>"10","punti_ospite"=>"70"],
    ["squadra_casa"=>"Cagliari", "squadra_ospite"=>"Firenze","punti_casa"=>"60","punti_ospite"=>"50"],
];
    //var_dump($games)
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <!-- Stampiamo a schermo tutte le partite -->
   <?php 
   for ($i=0; $i < count($games); $i++) { 
       ?>
    <div class="games">
        <span><?= $games[$i]["squadra_casa"] ?></span>
        <span>-</span>
        <span><?= $games[$i]["squadra_ospite"] ?></span>
        <span>|</span>
        <span><?= $games[$i]["punti_casa"] ?></span>
        <span><?= $games[$i]["punti_ospite"] ?></span>
    </div>
    <?php
}?> 
</body>
</html>