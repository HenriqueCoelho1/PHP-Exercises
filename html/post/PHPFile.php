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
print_r($_POST);?>

<?php
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Submit = $_POST["Submit"];

// if(isset($_POST["Submit"])){
//     $a = $_POST["Username"];
//     echo "<h2><strong> Successful login: {$a} </strong></h2>";
// }
// if(isset($Username) && !empty($Username)){
//     $a = $_POST["Username"];
//     echo "<h2><strong> Username is set with: {$a} </strong></h2>";
// }else{
//     echo "No user name detected ";
// }
// if(isset($Password) && !empty($Password)){
//     $a = $_POST["Password"];
//     echo "<h2><strong> Password is set with: {$a} </strong></h2>";
// }else{
//     echo "No user password detected";
// }

if(isset($_POST["Username"])){
    $Username = $_POST["Username"];
    echo "Username: {$Username}";
}else{
    $Username = "";

}

if(isset($_POST["Password"])){
    $Password = $_POST["Password"];
    echo "Password: {$Password}";
}else{
    $Password = "";
}





?>
</body>
</html>