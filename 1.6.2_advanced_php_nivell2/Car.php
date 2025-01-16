<?php 
declare(strict_types=1);
require_once "Turbo.php";
require_once "Combustible.php";

class Car{

    use Turbo;

    public string $marca;
    public string $matricula;
    public Combustible $combustibleTipo;
    public int $maxVelocidad;

    public function __construct(string $marca, string $matricula, Combustible $combustibleTipo, int $maxVelocidad){
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->combustibleTipo = $combustibleTipo;
        $this->maxVelocidad = $maxVelocidad;
    }
}
?>