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
    $FirstNumber = 3;
    $SecondNumber = 4;
    $ThirdNumber = 3.65478;

?>
<?php echo $ThirdNumber+9-6; ?><br />
<?php echo 3.1 / 6;  ?><br />
<?php echo 7 / 1; ?><br />
<p>Ceil: </p> <?php echo ceil($ThirdNumber);?> <br />
<p>Floor: </p><?php echo floor($ThirdNumber); ?> <br />
<?php echo "is {$FirstNumber} integer: ". is_int($FirstNumber);  ?> <br />
<?php echo "is {$ThirdNumber} integer: ". is_int($ThirdNumber);  ?> <br />
<?php echo "is {$FirstNumber} float: ". is_float($FirstNumber);  ?> <br />
<?php echo "is {$ThirdNumber} float: ". is_float($ThirdNumber);  ?> <br />
<?php echo "is {$FirstNumber} numeric: ". is_numeric($FirstNumber);  ?> <br />
<?php echo "is {$ThirdNumber} numeric: ". is_numeric($ThirdNumber);  ?> <br />
Decimal to binary: <?php echo decbin(3) ?> <br />
Binary to decimal: <?php echo bindec(11) ?> <br />
Raiz Quadrada: <?php echo sqrt(8) ?> <br />
Absolute Value: <?php echo abs(-50+100) ?> <br />
Power: <?php echo pow(2, 10) ?> <br />
Modules: <?php echo fmod(15, 7) ?> <br />
Random: <?php echo rand() ?> <br />
Random from 500 to 1600: <?php echo rand(500, 1600) ?> <br />
Increment: <?php $SecondNumber++; echo $SecondNumber; ?> <br />
Decrement: <?php $SecondNumber--; echo $SecondNumber; ?> <br />
    
</body>
</html>