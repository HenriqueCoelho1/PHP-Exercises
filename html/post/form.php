<?php
if(isset($_POST["Submit"])){

    $Username = $_POST["Username"];
    $Password = $_POST["Password"];


    if($Username == "Me" && $Password == "123"){
        $a = $_POST["Username"];
        echo "<h2><strong> Welcome: {$a} </strong></h2>";
    }else{
        echo "<h2><strong> Hello World </strong></h2>";
    }
    
}
else{
    echo "<h2><strong> Login Required </strong></h2>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<?php
?>

<fieldset>
    <legend>HTML 5 Form</legend>
    <form action="form.php" method="POST">
        <label for="Username">Username</label>
        <input id="Username" type="text" name="Username"/>
        <br />
        <br />
        <label for="password">Password: </label>
        <input id="Password" type="password" name="Password"/>

        <input type="Submit" name="Submit" value="Submitted"/>
    </form>

</fieldset>
</body>
</html>