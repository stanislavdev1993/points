<?php

require 'vendor/autoload.php';

$carCollection = new collections\CarCollection(new \car_searchers\FreeCarSearcher());

$car1 = new \cars\Car(\cars\Car::STATUS_FREE, new \points\Point(2, 2));
$car2 = new \cars\Car(\cars\Car::STATUS_IN_IN_FLIGHT, new \points\Point(5, 6));

$carCollection->addCar($car1);
$carCollection->addCar($car2);

$freeCars = $carCollection->findFreeCars(new \points\Point(3, 5));

var_dump($freeCars);