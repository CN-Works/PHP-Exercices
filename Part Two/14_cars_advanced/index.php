<?php

class Car {
    // Basic information about the car
    private string $brand;
    private string $model;

    // Arguments for class creation
    public function __construct(string $brand, string $model) {
        // settings properties
        $this->brand = $brand;
        $this->model = $model;

        // Printing Creation data
        echo "A new car is created : it's a ".$brand." ".$model!.".";
    }

    // Returns a presentation text (for fun)
    public function __toString() {
        return "This car is a ".$this->model." made by ".$this->brand." !";
    }

    public function getInformation() {
        return "This car is a ".$this->model." ".$this->brand.".";
    }
}

$cls63amg = new Car("Mercedes AMG","CLS 63");