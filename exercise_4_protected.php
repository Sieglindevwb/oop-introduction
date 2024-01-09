<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

require_once "exercise_1_classes.php";

class Beer extends Beverage {
    protected $name;
    protected $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAlcoholPercentage(): float {
        return $this->alcoholPercentage;
    }

    public function getInfo() {
        $temperature = parent::getTemperature();

    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo "<h1>exercise four:</h1>";
echo "This is" . " " . $duvel->getName() . " " . "and it is the temperature is" . " " . $duvel->getTemperature();
echo "<br>";
echo "The alcohol percentage from Duvel is" . " " . $duvel->getAlcoholPercentage() . "%";
echo "<br>";
echo "This is my alcohol percentage" . " " . $duvel->getAlcoholPercentage() . " " . "%";
echo "<br>";
$duvel->getInfo();
