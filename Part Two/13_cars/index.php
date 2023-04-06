<?php

// Main vehicle class

class Car {
    // Basic information about the car

    private string $brand;
    private string $model;
    private int $doors;

    // Car status

    private bool $isEngineOn = false;
    // speed in km/h
    private int $actualSpeed = 0;

    // Arguments for class creation
    public function __construct(string $brand, string $model, int $doors) {
        // settings properties
        $this->brand = $brand;
        $this->model = $model;
        $this->doors = $doors;

        // Printing Creation data
        echo "A new car is created : it's a ".$brand." ".$model." (".$doors." doors)";
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
            // Changing engine state
            $this->isEngineOn = $wantedStatus;
            // Just checking message
            if ($wantedStatus == true) {
                echo "The ".$this->model." 's engine has started !";
            } elseif ($wantedStatus == false) {
                echo "The ".$this->model." 's engine is turned off !";
            }
        }
    }

    public function pressGasOrBrake(string $action) {
        // Checking if engine is running
        if ($this->isEngineOn !== true) {
            echo "The engine is not running, you need to start it before doing anything !";
            return;
        }

        // The car will only go to 50kmh & 0kmh
        if ($action == "gas") {
            if ($this->actualSpeed < 50) {
                $this->actualSpeed = 50;
                echo "The ".$this->model." is going faster ! (50kmh)";
            } else {
                echo "You can't go faster because you are already driving at 50kmh !";
            }
        } elseif ($action == "brake") {
            if ($this->actualSpeed > 0) {
                $this->actualSpeed = 0;
                echo "The ".$this->model." is slowing down ! (0kmh)";
            } else {
                echo "You can't go slower because you are not driving !";
            }
        }
    }

}

// Testing Zone

$porsche = new Car("Porsche","911 GT3 RS", 2);

echo "<br> ----- <br>";
$porsche->updateEngineStatus(true);
echo "<br> ----- <br>";
$porsche->pressGasOrBrake("gas");
echo "<br> ----- <br>";
$porsche->pressGasOrBrake("gas");
echo "<br> ----- <br>";
$porsche->pressGasOrBrake("brake");


/*

Documentation - Usage :

Engine |
start engine - vehicle->updateEngineStatus(true);
turn off engine - vehicle->updateEngineStatus(false);

Speed/Gas&Brake |
Accelerate - vehicle->pressGasOrBrake("gas");
Deccelerate - vehicle->pressGasOrBrake("brake");

*/