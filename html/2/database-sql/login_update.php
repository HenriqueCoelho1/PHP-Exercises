<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "UPDATE user SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query failed" . mysqli_error($connection));
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
                    <form action="login_update.php" method="post"> 
                        <h3 class="title is-3">Update Your Account</h3>
                            <div class="field p-1">    
                                <label class="label" for="username">Name: </label>
                                
                                <div class="control">
                                    <input class='input is-primary' type='text' placeholder='Your Name' name='username' value="" />
                                </div>
                            </div>
                            
                            <div class="field p-1">
                                <label class="label" for="password"> Password: </label>
                                <div class="control">
                                    <input class='input is-primary' type='password' placeholder='Your Password' name='password' value="" />
                                </div>
                            </div>

                            <div class="select is-primary">
                                <select name="id" id="">
                                    <?php showAllData(); ?>
                                </select>
                            </div>

                            <div class="field p-1">
                                <div class="control">
                                    <button class="button is-primary" name="submit" value="">Update</button>
                                </div>
                            </div>
                        </form>
                    
                    </div>
                </div>
            </div>
        
        </div>

    </section>

    
</body>
</html>