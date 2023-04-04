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

    private bool $isEngineOn = false;
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

    public function updateEngineStatus($wantedStatus) {
        $status = $this->isEngineOn;

        // Checking if status is the same
        if ($wantedStatus !== $status) {
            $this->isEngineOne = $wantedStatus;
            if ($wantedStatus == true) {
                echo $this->model."'s engine has started !";
            } else {
                echo $this->model."'s engine is turned off !";
            }
        } else {
            // This way Engine can't be started if it's already started
            echo "Can't update this engine status : ".$wantedStatus;
        }
    }
}

$porsche = new Car("Porsche","911 Turbo S", 2, 295);

echo $porsche;
echo "<br>";
$porsche->updateEngineStatus(true);
echo "<br>";
sleep(50);
$porsche->updateEngineStatus(true);