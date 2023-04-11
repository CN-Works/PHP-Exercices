<?php

// Base class
class Car {
    // Basic information about the car
    protected string $brand;
    protected string $model;

    // Arguments for class creation
    public function __construct(string $brand, string $model) {
        // settings properties
        $this->brand = $brand;
        $this->model = $model;

        // Printing Creation data
        echo "A new car is created : it's a ".$brand." ".$model.".";
    }

    // Returns a presentation text (for fun)
    public function __toString() {
        return "This car is a ".$this->model." made by ".$this->brand." !";
    }

    // Return basic information about the car
    public function getInformation() {
        echo "This car is a ".$this->model." ".$this->brand.".";
    }
}

// Electric car class
class ElectricCar extends Car {
    protected int $autonomy;

    // Arguments for class creation
    public function __construct(string $brand, string $model, int $autonomy) {
        // settings properties
        $this->brand = $brand;
        $this->model = $model;
        $this->autonomy = $autonomy;

        // Printing Creation data
        echo "A new electric car is created : it's a ".$brand." ".$model." with ".$autonomy."kmh of autonomy.";
    }

    // Returns a presentation text (for fun)
    public function __toString() {
        return "This electric car is a ".$this->model." made by ".$this->brand." !";
    }

    // Return basic information about the car
    public function getInformation() {
        echo "This electric car is a ".$this->brand." ".$this->model." with ".$this->autonomy."kmh of autonomy.";
    }
}

// Testing Zone
$cls63amg = new Car("Mercedes AMG","CLS 63");

echo "<br> ----- <br>";

$cls63amg->getInformation();

echo "<br> ----- <br>";

$ami = new ElectricCar("Citroen","Ami",50);

echo "<br> ----- <br>";

$ami->getInformation();