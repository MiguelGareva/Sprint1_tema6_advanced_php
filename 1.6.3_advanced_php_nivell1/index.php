<?php 

require_once("Car.php");

$car1 = new Car("ford", "ka");
echo $car1->brand . "<br>";
echo $car1->model . "<br>";
echo $car1->color;
?>