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
echo "1 <br />"; 
echo "2 <br />"; 
echo "3 <br />"; 
echo "4 <br />"; 
echo "5 <br />"; 
echo "6 <br />";
echo "7 <br />"; 
?>
<hr />
<?php
for($i = 1; $i <= 10; $i++){
    echo "is Printing is screen {$i} <br />";
}
?>
<hr />
<?php $N = 2;
for($i = 1; $i <= 10; $i++){
    $Result = $N * $i;
    echo $N . " * " . $i . " = " . $Result . "<br />";
}
?>
</body>
</html>