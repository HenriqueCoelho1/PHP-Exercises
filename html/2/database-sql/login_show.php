<?php


$connection = mysqli_connect('db_php_exercises', 'user', '123456', 'db');

if($connection){
    echo "DB connected";
}else{
    die("Database failed");
}

$query = "SELECT * FROM user";

$result = mysqli_query($connection, $query);

if(!$result){
    die('Query Failed' . mysqli_error());
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <section class="hero has-background-white-ter is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="is-5-tablet is-4-desktop is-3-widescreen">
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <pre>
                            <?php
                                print_r($row);
                            }
                            ?>
                            </pre>
                            
                    
                    </div>
                </div>
            </div>
        
        </div>

    </section>

    
</body>
</html>