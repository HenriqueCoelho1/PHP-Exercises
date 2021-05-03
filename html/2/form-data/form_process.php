<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = array('Claypson', 'Joao', 'Marcelo', 'Maria', 'Geromel');

    $min = 4;
    if(strlen($username) < $min){
        echo "A min characters is required <br />";
    }

    if(strlen($password) < $min){
        echo "A min characters is required";
    }

    if(in_array($username, $name)){
        echo "Its equal to {$username}";
    }

}
?>
