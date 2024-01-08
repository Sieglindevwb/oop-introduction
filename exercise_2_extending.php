<?php

declare(strict_types=1);

/* EXERCISE 2

Make class beer that extends from Beverage.
Create the properties name (string) and alcoholPercentage (float).
Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getAlcoholPercentage function which returns the alocoholPercentage.
Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
Also the name equal to Duvel and the alcohol percentage to 8,5%
Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

require_once "exercise_1_classes.php";

class Beer extends Beverage {
    public $name;
    public $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold") {
        parent:: __construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(){
        echo "This beverage is $this->name with this alcohol percentage $this->alcoholPercentage % and $this->color.";
    }
}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo "<h1>exercise two:</h1>";
echo "This is $duvel->name and it is the temperature is $duvel->temperature";
echo "<br>";
$duvel->getAlcoholPercentage();
echo "<br>";
echo "This is my alcohol percentage $duvel->alcoholPercentage %";
echo "<br>";
$duvel->getInfo();

