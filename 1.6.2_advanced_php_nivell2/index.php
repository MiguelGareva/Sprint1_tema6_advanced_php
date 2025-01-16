<?php 
declare(strict_types=1);
require_once "Car.php";

$car1 = new Car("Ford", "5656-MDL", Combustible::Diesel,150);
$car1->boost();
?>