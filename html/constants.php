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
    $Name = 45;
    define('valueOfPi', 3.14);  //you cannot redefine this value anymore because its a constants  
    define('valueOfGravity', 9.8); //you cannot redefine this value anymore because its a constants
    echo 'Value of Gravity: ' . valueOfGravity;
    echo 'Value of Pi: ' . valueOfPi;
    
?>
    
</body>
</html>