<?php
class Car {
    static $wheels = 4;
    var $hood = 1;

    function MoveWheels(){
        Car::$wheels = 10;

    }

}
$bmw = new Car();

// $bmw -> wheels;
//this not work because is attached at the class not the object

Car::MoveWheels();
echo Car::$wheels;

?>