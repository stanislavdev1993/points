<?php

namespace car_searchers;

use cars\Car;
use cars\CarInterface;
use points\PointInterface;

class FreeCarSearcher implements CarSearcherInterface
{
    public function find(array $cars, PointInterface $center, float $radius): array
    {
        $foundCars = [];

        /**
         * @var $point PointInterface
         * @var $car CarInterface
         */
        foreach ($cars as $car) {
            $point = $car->getPoint();
            $equation = (pow($point->getLongitude() - $center->getLongitude(), 2)) +
                (pow($point->getLatitude() - $center->getLatitude(), 2)) <= $radius * $radius;

            if ($equation && $car->getStatus() == Car::STATUS_FREE) {
                $foundCars[] = $car;
            }
        }

        return $foundCars;
    }
}