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
function Welcome(){
    echo "Welcome";
}
Welcome(); 

echo "<hr />";

function Addition(){
    $a = 5;
    $b = 2;
    $c = $a + $b;
    echo "Addition a and b and result is {$c} <br />";
}
Addition();

echo "<hr />";

function additionUsingParameter($x, $v){
    $Result = $x + $v;
    echo "Addition of x: {$x} and v: {$v} is {$Result}";

}
additionUsingParameter(9, 10);

echo "<hr />";

function additionUsingParameterReturning($x, $v){
    $Result = $x + $v;
    return $Result;

}
$Text = additionUsingParameterReturning(50, 50);

echo "the result is {$Text}"

?>
    
</body>
</html>