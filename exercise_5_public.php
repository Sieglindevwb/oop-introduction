<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

Change the properties to private.
Fix the errors without using getter and setter functions.
Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage 
{
    private $color;
    private $price;
    private $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getTemperature() {
        return $this->temperature;
    }

    public function getInfo(){
        echo "This beverage is $this->temperature and $this->color.";
    }
    
    public function setPrice(float $price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

}

$cola = new Beverage("black", 3.50);
echo "<h1>Exercise five:</h1>";
echo "</br>";
$cola->getInfo();
echo "</br>";
echo "Temperature:" . " " . $cola->getTemperature();
echo "</br>";
echo "Price:" . " " . $cola->getPrice() . " " . "euros";