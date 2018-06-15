<?php

namespace collections;

use car_searchers\CarSearcherInterface;
use cars\CarInterface;
use points\PointInterface;

/**
 * Class CarCollection
 * @package collections
 * @property PointInterface $points
 */
class CarCollection
{
    const DEFAULT_RADIUS = 4;

    protected $searcher;
    protected $cars;

    public function __construct(CarSearcherInterface $searcher)
    {
        $this->searcher = $searcher;
    }

    public function addCar(CarInterface $car)
    {
        $this->cars[] = $car;
    }

    public function removeCar(int $index)
    {
        if (isset($this->cars[$index])) {
            unset($this->cars[$index]);
        }
    }

    /**
     * Find free cars in radius
     * @param PointInterface $center
     * @param null $radius
     * @return array
     */
    public function findFreeCars(PointInterface $center, $radius = null): array
    {
        return $this->searcher->find(
            $this->cars,
            $center,
            $radius == null ? self::DEFAULT_RADIUS : $radius
        );
    }
}