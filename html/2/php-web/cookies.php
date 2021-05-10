<?php
$name = "SomeName";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7); //the 60 is equal to seconds the seconds 60 is equal to minutes, 24 is for hours, and 7 is for days;
setcookie($name, $value, $expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_COOKIE["SomeName"])){
    $someOne = $_COOKIE["SomeName"];
    echo $someOne;

}else{
    $someOne = "";
}
?>
    
</body>
</html>