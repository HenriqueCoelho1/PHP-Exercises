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
$Names = array("Pedro", "Enzo", "Rafael", "Thiago", "Joao", "Claypson", "Rodrigo", "Cesar");
// $namesLength = count($Names);
// $namesLength = sizeof($Names);
for($i = 0; $i <= count($Names); $i++){
    if($Names[$i] == "Rafael"){
        break;
        //continue;
    }
    echo $Names[$i]. "<br />";

}
?>
    
</body>
</html>