<?php 

$_SESSION["name"] = htmlspecialchars($_POST["name"]);

echo "Nombre: " . $_SESSION["name"] . "<br>";
echo "Apellido: " . htmlspecialchars($_POST["fname"]) . "<br>";
echo "Color favorito: " . htmlspecialchars($_POST["favcolor"]) . "<br>";
echo "Su mascota se llama: " . htmlspecialchars($_POST["petname"]) . "<br>";

?>