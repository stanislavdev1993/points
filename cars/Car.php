<?php

namespace cars;
use points\PointInterface;

/**
 * Class Car
 * @package cars
 * @property PointInterface $point
 */
class Car implements CarInterface
{
    const STATUS_FREE = 1;
    const STATUS_IN_IN_FLIGHT = 2;

    protected $status;
    protected $point;

    public function __construct($status, PointInterface $point)
    {
        $this->setStatus($status);
        $this->setPoint($point);
    }

    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setPoint(PointInterface $point)
    {
        $this->point = $point;
    }

    public function getPoint()
    {
        return $this->point;
    }
}