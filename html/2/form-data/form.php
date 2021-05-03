<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = array('Claypson', 'Joao', 'Marcelo', 'Maria', 'Geromel');

    $min = 4;
    if(strlen($username) < $min){
        echo "A min characters is required";
    }

    if(strlen($password) < $min){
        echo "A min characters is required";
    }

    if(in_array($username, $name)){
        echo "Its equal to {$username}";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <input type="text" placeholder="Put your name" name="username" />
        <input type="password" placeholder="Put your password" name="password" />
        <br />
        <input type="submit" name="submit" />
    </form>
</body>
</html>