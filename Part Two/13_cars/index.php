<?php

// Main vehicle class

class Car {
    // Basic information about the car

    private string $brand;
    private string $model;
    private int $doors;
    // max speed for speed generation
    private int $maxSpeed;

    // Car status

    public bool $isEngineOn = false;
    // speed in km/h
    private int $actualSpeed = 0;

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

    public function updateEngineStatus(bool $wantedStatus) {
        $status = $this->isEngineOn;

        // Checking if status is the same
        if ($wantedStatus === $status) {
            // This way Engine can't be started if it's already started
            if ($wantedStatus === true) {
                echo "Can't update this engine status, it's already running !";
            } else {
                echo "Can't update this engine status, it's already turned off !";
            }
        } else {
            $this->isEngineOn = $wantedStatus;
            if ($wantedStatus == true) {
                echo $this->model."'s engine has started !";
            } elseif ($wantedStatus == false) {
                echo $this->model."'s engine is turned off !";
            }
        }
    }
}

$porsche = new Car("Porsche","911 Turbo S", 2, 295);

echo $porsche;
echo "<br> ----- <br>";
$porsche->updateEngineStatus(true);
echo "<br> ----- <br>";
$porsche->updateEngineStatus(true);