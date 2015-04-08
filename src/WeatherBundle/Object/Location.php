<?php
namespace WeatherBundle\Object;

class Location
{
    protected $longitude;
    protected $latitude;

    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }
    public function getLatitude()
    {
        return $this->latitude;
    }
}