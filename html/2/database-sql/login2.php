<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('db_php_exercises', 'user', '123456', 'db');

    if($connection){
        echo "DB connected";
    }else{
        die("Database failed");
    }


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
                        <form action="login2.php" method="post"> 
                        <h3 class="title is-3">Login</h3>
                            <div class="field p-1">    
                                <label class="label">Name: </label>
                                
                                <div class="control">
                                    <input class='input is-primary' type='text' placeholder='Your Name' name='username' value='' />
                                </div>
                            </div>
                            
                            <div class="field p-1">
                                <label class="label"> Password: </label>
                                <div class="control">
                                    <input class='input is-primary' type='password' placeholder='Your Password' name='password' value='' />
                                </div>
                            </div>

                            <div class="field p-1">
                                <div class="control">
                                    <button class="button is-primary" name="submit" value="">Submit</button>
                                </div>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        
        </div>

    </section>

    <!-- <div class="container">
        <div class="columns is-centered">
            <form action="login2.php" method="post"> 
                    
                    <div class="field">    
                        <label class="label">Name: </label>
                        
                        <div class="control">
                            <input class='input is-primary' type='text' placeholder='Your Name' name='username' value='' />
                        </div>
                    </div>
                    
                    <div class="field">
                        <label class="label"> Email: </label>
                        <div class="control">
                            <input class='input is-primary' type='password' placeholder='Your Password' name='password' value='' />
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-primary" name="submit" value="">Submit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div> -->
    
</body>
</html>