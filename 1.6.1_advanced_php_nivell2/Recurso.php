<?php 

declare(strict_types=1);
//require_once "Tema.php";
//require_once "Tipo.php";

class Recurso{
    public string $nombre;
    public Tema $tema;
    public string $url;
    public Tipo $tipo;

    public function __construct(string $nombre, Tema $tema, string $url, Tipo $tipo){
        $this->nombre = $nombre;
        $this->tema = $tema;
        $this->url = $url;
        $this->tipo = $tipo;
    }
}
?>