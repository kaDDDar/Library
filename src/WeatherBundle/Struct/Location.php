<?php
namespace WeatherBundle\Struct;

class Location
{
    protected $longitude;
    protected $latitude;

    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * Get Longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Get Latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
}