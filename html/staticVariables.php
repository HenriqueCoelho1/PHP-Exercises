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

function normalVariable(){
    $value = 1;
    echo $value. "not static <br />";
    $value++;
}
normalVariable();
normalVariable();
normalVariable();
normalVariable();
echo "<hr />";

function staticVariable(){
    static $value = 1;
    echo $value. " static <br />";
    $value++;
}
staticVariable();
staticVariable();
staticVariable();
staticVariable();
staticVariable();

?>
    
</body>
</html>