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
    $color = array("Red", "Green", "Blue");
    array_pop($color);
    array_push($color, "Black", "White", "Pink");
    print_r($color);

?><br />

<?php $Numbers=array(13, 16, 93, 76, 39, 45, 100, 1000) ?><br />
<?php echo count($Numbers)?><br />
Max: <?php echo max($Numbers)?><br />
Min: <?php echo min($Numbers)?><br />
Yes/No: <?php echo in_array(89, $Numbers)?><br />
<?php echo sort($Numbers)?><br />
<?php echo print_r($Numbers)?><br />
<?php echo rsort($Numbers)?><br />
<?php echo print_r($Numbers)?><br />
implode: <?php
$Quote = array("Never", "Give", "Up");
?><br />
<?php echo implode(" ", $Quote)

?> <br />
Explode: <?php
$Quote = "Never Give Up";
?><br />
<?php print_r( explode(" ", $Quote));

?>
</body>
</html>