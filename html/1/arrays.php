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
    $name = array('HC', 'Luiz', 'Claypson');
    echo $name[1];
    
?> <br />

<?php $Food = array('Pizza', 10, 15, array("Asian", "French", "German"), "Pasta"); ?> <br />
<?php echo $Food[2]?> <br />
<?php echo $Food[3][2]?> <br />
<?php echo $Food[56] = "Mango" ?> <br />
<?php echo $Food[300] = "Apple" ?> <br />
<pre>
<?php echo print_r($Food) ?> <br />
</pre>
<?php $Color = array("A" => "40", "B" => "Pizza");?> <br />
<?php echo $Color["B"]; ?> <br />
<?php $Food2 = array("Asian" => "Pizza", "Italian" => "Sushi"); ?> <br />
<?php echo $Food2["Asian"]. " is for ". $Food2["Italian"]; ?> <br />
<pre>
<?php echo print_r($Food2)?> <br />

</body>
</html>