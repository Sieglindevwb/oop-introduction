<?php

declare(strict_types=1);

/* EXERCISE 3

Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

require_once "exercise_1_classes.php";

class Beer extends Beverage {
    private $name;
    private $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    private function beerInfo() {
        return "Hi i'm" . " " . $this->getName() . " " . "and have an alcochol percentage of" . " " . $this->getAlcoholPercentage() . " " . "and I have a" . " " . $this->color . " " . "color.";
    }

    public function getName() {
        return $this->name;
    }

    public function getAlcoholPercentage(){
        return $this->alcoholPercentage;
    }

    public function getInfo() {
        // Access parent class method
        $temperature = parent::getTemperature();
        
        echo "This is" . " " . $this->getName() . " " . "and its temperature is" . $temperature;
        echo "<br>";
        echo "The alcohol percentage from Duvel is" . " " . $this->getAlcoholPercentage() . " " . "%";
        echo "<br>";
        echo $this->beerInfo();
    }



}

$duvel = new Beer("light", 3.5, "Duvel", 8.5);

echo "<h1>exercise three:</h1>";
$duvel->getInfo();
echo "<br>";
echo $duvel->color; 

