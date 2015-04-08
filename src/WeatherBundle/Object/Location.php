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

    /**
     * Get Longitude
     *
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Get Latitude
     *
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
}