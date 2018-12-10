<?php 
$array = array("item one", "item two", "item three");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Documents</title>
  </head>
  <body>
 
  <?php 

foreach ($array as $key => $value) {
    print $key." ".$value."<br>";
}
?>

  </body>
</html>

