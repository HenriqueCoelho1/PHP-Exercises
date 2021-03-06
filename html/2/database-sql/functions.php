<?php include "db.php"; ?>
<?php include "salt.php";
function showAllData(){
    global $connection;
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);

    

    if(!$result){
        die('Query Failed' . mysqli_error());
    }
    
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}
function showAllInformation(){
    global $connection;
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed' . mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }
}

function updateTable(){
    global $connection;
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

function createTable(){
    global $connection;
    global $salt;

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username); 
    $password = mysqli_real_escape_string($connection, $password);
    
    $hashFormat = "$2y$10$";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);

    $query = "INSERT INTO user(username, password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed' . mysqli_error());
    }
}

function deleteRows(){
    global $connection;
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "DELETE FROM user ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query failed" . mysqli_error($connection));
    }
}
?>