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
$Number = array(8, 6, 60, 995, 1000, 45, 24, 100);
foreach($Number as $Num){
    echo "Numbers: {$Num} <br />";
}
?>
<hr />

<?php
$Food = array("item_number" => 1050, 
            "name" => "Pizza", 
            "Region" => "Italy", 
            "side_food" => "pasta",
            "drink" => "Coke",
            "package_price" => 1500);
foreach($Food as $Key => $Value){
    $Data = ucwords(str_replace("_", " ", $Key));
    if($Key== "package_price"){
        if(is_int($Value)){

        }else{
            $Value = "Cannot be determined ";
            // echo "Cannot be determined ";
        }
    }

    echo "{$Data} <strong> have </strong> {$Value} <br />";
    // echo "{$Key} <strong> have </strong> {$Value} <br />";
}
?>
</body>
</html>