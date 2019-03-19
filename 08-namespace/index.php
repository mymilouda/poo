<?php

require_once 'Car.php';
require_once 'Motorcycle.php';
require_once 'Truck.php';

$car = new Parking\Car();
$motorcycle = new Parking\Motorcycle();
$truck = new Parking\Pro\Truck();

var_dump($car);
var_dump($motorcycle);
var_dump($truck);
