<?php
class Car {
    function MoveWheels(){
        echo "Wheels Move";

    }

}
$bmw = new Car();
$mercedes_benz = new Car();

$bmw -> MoveWheels();
$mercedes_benz -> MoveWheels();

// if(method_exists("Car", "MoveWheels")){
//     echo "The Method exists!";

// }else{
//     echo "No!";

// }
?>