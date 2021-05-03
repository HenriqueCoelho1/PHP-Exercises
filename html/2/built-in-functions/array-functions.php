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
$list = [324, 323, 301, 981, 367, 145, 645];

echo max($list);

echo "<br />";


echo min($list) . "<br />";
echo sort($list) . "<br />";
echo print_r($list) . "<br />";
echo array_keys($list) . "<br />";
?>
    
</body>
</html>