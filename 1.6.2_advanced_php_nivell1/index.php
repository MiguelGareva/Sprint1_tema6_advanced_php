<?php 

require_once("Animal.php");

$animal1 = new Animal("Ronin");

echo $animal1->sayValue();
echo $animal1->inLine();
?>