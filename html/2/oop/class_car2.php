<?php
class Car {
    function MoveWheels(){
        echo "Wheels Move";

    }

}

if(method_exists("Car", "MoveWheels")){
    echo "The Method exists!";

}else{
    echo "No!";

}
?>