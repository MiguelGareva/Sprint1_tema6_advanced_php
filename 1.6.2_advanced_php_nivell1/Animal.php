<?php 

class Animal{
    public string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    public function sayValue(): string{
        return $this->name . " is an " . __CLASS__ . ".<br>";
    }
    public function inLine(): string {
        return "You are in line " . __LINE__ . " of code. <br>";
    }
    
}

?>