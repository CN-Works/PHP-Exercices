<?php

// Main vehicle class

class Car {
    // Basic information about the car
    protected string $brand;
    protected string $model;
    protected int $doors;
    // max speed for speed generation
    protected int $maxSpeed;

    // Car status
    protected bool $isEngineOn = false;
    protected int $actualSpeed = 0;

    // Arguments for class creation
    public function __construct(string $brand, string $model, int $doors, int $maxspeed) {
        // settings properties
        $this->brand = $brand;
        $this->model = $model;
        $this->doors = $doors;
        $this->maxSpeed = $maxspeed;
    }
}