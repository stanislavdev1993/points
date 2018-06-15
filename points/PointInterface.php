<?php

namespace points;

interface PointInterface
{
    public function setLongitude(float $longitude);
    public function getLongitude();
    public function setLatitude(float $latitude);
    public function getLatitude();
}