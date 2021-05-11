<?php
class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;
    function showProperty(){
        echo $this -> engine;
        //private work here

    }
    

}
$bmw = new Car();
$semi = new Semi();
// echo $bmw -> wheels;
// echo $bmw -> showProperty();
class Semi extends Car {
    function showProperty(){
        echo $this -> hood;
        //doest not work on private if this in other class

    }

}
echo $semi -> showProperty() . "<br />";
echo $bmw -> showProperty();


?>