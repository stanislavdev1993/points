<?php

namespace cars;

use points\PointInterface;

interface CarInterface
{
    public function setStatus(int $status);
    public function getStatus();
    public function setPoint(PointInterface $point);
    public function getPoint();
}