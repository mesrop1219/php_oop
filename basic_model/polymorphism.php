<?php

/*
    Polymorphism is the third of main principles in OOP. Polymorphism is the thing with help of with we can
    implement the same method but using different ways.
*/

class Vehicles
{
    protected int $weight;
    protected int $height;
    public  string $type;

    public  function __construct(int $weight, int $height, string $type)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->type = $type;
    }

    public function get_info(): string
    {
        return "type is: " . $this->type . " weight is: " . $this->weight . " height is: " . $this->height;
    }
}

class Car extends Vehicles
{
    public string $engine;
    public string $car_name;

    public function __construct(int $weight, int $height, string $engine, string $car_name)
    {
        parent::__construct($weight, $height, 'car');
        $this->engine = $engine;
        $this->car_name = $car_name;
    }

    public function get_info(): string
    {
        return parent::get_info() . " engine is: " . $this->engine; // TODO: Change the autogenerated stub
    }
}

$bike = new Car(12, 121, "W16", "Bugatti");

var_dump($bike);