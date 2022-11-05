<?php
require_once 'Vehicle.php' ;
require_once 'Bicycle.php' ;
require_once 'Car.php' ;


$car = new Car('green', 4, 'fuel');
echo "Voiture" . $car->forward() . "\n";
echo "Voiture vitesse : " . $car->getCurrentSpeed() . "\n";
echo "Voiture appelle switchOn   ->" . $car->switchOn() . "\n";
echo "Voiture appelle switchOff  ->" . $car->switchOff() . "\n";
$car->setCurrentSpeed(3) ;
echo "Voiture vitesse : " . $car->getCurrentSpeed() . "\n";
echo "Voiture appelle switchOn   ->" . $car->switchOn() . "\n";
echo "Voiture appelle switchOff  ->" . $car->switchOff() . "\n";

$bicycle = new Bicycle("violet", 2);
echo "Vélo   " . $bicycle->forward() . "\n";
echo "Vélo    vitesse : " . $bicycle->getCurrentSpeed() . "\n";
echo "Vélo    appelle switchOn   ->" . $bicycle->switchOn() . "\n";
echo "Vélo    appelle switchOff  ->" . $bicycle->switchOff() . "\n";
$bicycle->setCurrentSpeed(3) ;
echo "Vélo    vitesse : " . $bicycle->getCurrentSpeed() . "\n";
echo "Vélo    appelle switchOn   ->" . $bicycle->switchOn() . "\n";
echo "Vélo    appelle switchOff  ->" . $bicycle->switchOff() . "\n";
