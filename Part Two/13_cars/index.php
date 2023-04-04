<?php

// Main vehicle class

class vehicleCar {
    // Basic information about the car

    protected string $brand;
    protected string $model;
    protected int $doors;
    // max speed for speed generation
    protected int $maxSpeed;

    // Car status

    protected bool $isEngineOn = false;
    // speed in km/h
    protected int $actualSpeed = 0;

    // Arguments for class creation
    public function __construct(string $brand, string $model, int $doors, int $maxspeed) {
        // settings properties
        $this->brand = $brand;
        $this->model = $model;
        $this->doors = $doors;
        $this->maxSpeed = $maxspeed;
    }

    // Returns a presentation text (for fun)
    public function __toString() {
        return "This car is a ".$this->model." made by ".$this->brand." !";
    }

    // returns an array with all car information
    public function getCarData() {
        $carData = array(
            "brand" => $this->brand,
            "model" => $this->model,
            "doors" => $this->doors,
            "maxSpeed" => $this->maxSpeed,
            "engineStatus" => $this->isEngineOn,
            "actualSpeed" => $this->actualSpeed,
        );
        return $carData;
    }

    public function changeEngineStatus($wantedStatus) {
        $status = $this->$isEngineOn;

        // Checking if status is the same
        if ($wantedStatus != $status) {
            $this->isEngineOne = $wantedStatus;
        } else {
            // This way Engine can't be started if it's already started
            echo "Can't update this engine status : ".$wantedStatus;
        }
    }
}

$porsche = new vehicleCar("Porsche","911 Turbo S", 2, 295);

echo $porsche;
