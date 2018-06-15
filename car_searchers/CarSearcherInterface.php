<?php

namespace car_searchers;

use points\PointInterface;

interface CarSearcherInterface
{
    public function find(array $cars, PointInterface $center, float $radius): array;
}