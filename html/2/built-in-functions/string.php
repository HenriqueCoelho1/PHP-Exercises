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

$string = "Hello World";
$string2 = "hello world";

echo strlen($string) . "<br / >";
echo strrev($string) . "<br / >";
echo ucwords($string2) . "<br / >";
echo ucfirst($string2) . "<br / >";
echo strtoupper($string2) . "<br / >";
echo trim($string2, "h") . "<br / >";
?>
    
</body>
</html>