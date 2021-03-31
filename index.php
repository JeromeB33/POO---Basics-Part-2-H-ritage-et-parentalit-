<?php

// index.php
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
$bike = new Bicycle('blue', 1);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : '.$bike->getCurrentSpeed().' km/h'.'</br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : '.$bike->getCurrentSpeed().' km/h'.'</br>';
echo $bike->brake();

echo '<br/>';

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('black', 1);

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('yellow', 1);

echo '<br/>';

$car = new Car('green', 5, 'fuel');
echo $car->forward();
echo '<br> Vitesse de la voiture : '.$car->getCurrentSpeed().' km/h'.'</br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : '.$car->getCurrentSpeed().' km/h'.'</br>';
echo $car->brake();

echo '<br/>';

$man = new Truck('blue', 3, 'fuel', 300);

echo $man->forward();
echo '<br> Vitesse du camion : '.$man->getCurrentSpeed().' km/h'.'</br>';
echo $man->brake();
echo '<br> Vitesse du camion : '.$man->getCurrentSpeed().' km/h'.'</br>';
echo $man->brake();

$oldTruck = new Truck('rusty blue', 2, 'fuel', 150);
$newTruck = new Truck('brushed aluminum', 2, 'electric', 200);
$lastTruck = new Truck('green', 4, 'fuel', 250);
echo '<br/>';

$newTruck->setLoad(100);
echo $newTruck->fillOrFull();
echo '<br/>';

$lastTruck->setLoad(250);
echo $lastTruck->fillOrFull();
echo '<br/>';
