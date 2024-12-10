<?php

class Car{

    private string $brand;
    private string $model;

    public function __construct(string $brand, string $model){
        $this->brand = $brand;
        $this->model = $model;
    }

    public function __get($property){
        if (property_exists($this,$property)) {
            return $this->$property;
        } else {
            return $property . " property doesn't exist.";
        }
    }
}
?>