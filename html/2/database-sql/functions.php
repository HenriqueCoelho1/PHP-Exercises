<?php include "db.php"; ?>
<?php
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
?>