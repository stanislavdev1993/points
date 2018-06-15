<?php

namespace points;

class Point implements PointInterface
{
    protected $longitude;
    protected $latitude;

    public function __construct(float $longitude, float $latitude)
    {
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
    }

    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }
}