<?php 
$title = "mana lapa"; // title ir mainīgais un mana lapa ir mainīgā vērtība
$title = "mana lapa vairs nav mana";
$mansTitle = "mans Nosaukums"; // mainīgā nosaukumā neizmanto - un ciparus
$number = 100; //integer
$float = 100.5; 
$Number = 50;
$htmltexts = "<h1>hello</h1>";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
  </head>
  <body>
    <h1>Mana pirmā PHP lapa</h1>
    <h2> <?php print $title ?></h2>
    <p> <?php print $number ?> </p>
    <p> <?php print $Number ?> </p>
    <p> <?php print $htmltexts ?> </p>

  </body>
</html>
