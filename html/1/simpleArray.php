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
    $Numbers = array(8, 25, 45, 60, 159, 500, 999);
    print_r($Numbers)
?><hr />
<?php
    echo current($Numbers). "<br />";
    next($Numbers);
    echo current($Numbers). "<br />";
    next($Numbers);
    echo current($Numbers). "<br />";
    next($Numbers);
    next($Numbers);
    echo current($Numbers). "<br />";
    reset($Numbers);
    echo current($Numbers). "<br />";
    end($Numbers);
    echo current($Numbers)
?>
    
</body>
</html>