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
$MyNumber = 488734;
function Addition(){
    global $MyNumber;
    $a = 5;
    $b = 2;
    $c = $a + $b;
    echo "Addition a and b and result is {$c} <br />";
    echo "My number {$MyNumber}";
}
Addition();




?>
    
</body>
</html>