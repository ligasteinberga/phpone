<?php 
//obligāti jābūt ar lielajiem burtniem

if(isset($_POST['submit'])) {
    $error=false;
    print_r($_POST);

    if (strlen($_POST['username'])<8){
        $error=true;
        print "username too short";
    }

    if (strlen($_POST['password'])<8) {
        $error=true;
        print "password too short";
    }

    if (strlen($_POST['username'])>15) {
        $error=true;
        print "username too long";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="index.php">
    <input type="text" name="username" required>
    <input type="text" name="password">
    <input type="submit" name="submit">
</form>

</body>
</html>