<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php 
$counter=0;
while($counter <= 10) {
    echo $counter;
    $counter++; 
}
print "<br>";
//$counter=0;

for($counter=0; $counter < 10; $counter++) {
    print $counter. "<br>";
}

$masivs = array(10,10,12,12,31);

foreach ($masivs as $key => $value) { //key ir indeks pec kārtas, sākot no nulles, ja key būtu kā name, tad tur izvadīts "forstname", "lastname"
    print $value." ".$key."<br>";
}

$masivs = array("firstname" => "Liga", "lastname" => "Steinberga");
foreach ($masivs as $key => $value) {
    print $value." ".$key."<br>";
}

?>

</body>
</html>