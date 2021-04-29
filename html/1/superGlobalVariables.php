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
$x = 20;
$y = 5;
function Addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
print_r($GLOBALS);
echo "<br />";
Addition();
echo $z;




?>
    
</body>
</html>