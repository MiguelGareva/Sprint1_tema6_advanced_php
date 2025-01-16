<?php 
require_once "../vendor/autoload.php";

$faker = Faker\Factory::create();

echo "Nombre: " . $faker->name . "<br>";
echo "Dirección: " . $faker->address . "<br>";
echo "Nº teléfono: " . $faker->phoneNumber . "<br>";
echo "E-mail: " . $faker->email . "<br>";

?>