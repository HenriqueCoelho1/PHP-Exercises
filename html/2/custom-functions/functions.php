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
function a_function(){
    echo "Hello World";
}

a_function();

$val1 = 0;
$val2 = 0;
echo "<br />";
function calculate($val1, $val2){
    echo $val1 + $val2; 
}

calculate(80, 80);
?>
    
</body>
</html>