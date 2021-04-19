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
$Weather = "Sunny";
switch($Weather){
    case "Sunny":
        echo "Weather is pleasent outside <br />";
        break;
    case "Rainy":
        echo "Weather is not pleasent outside <br />";
        break;
    case "Cloud":
        echo "it is expected to rain <br />";
        break;
    default:
        echo "Weather cannot be forecast <br />";
        break;

}
?>
<hr />
<?php
$Restricted_area = "Guard";
switch($Restricted_area){
    case "Guard":
        echo "Permission granted! <br />";
        break;
    case "Media":
    case "Police":
    case "Office Boy":
        echo "Permission Denied";
    default:

}
?>
    
</body>
</html>