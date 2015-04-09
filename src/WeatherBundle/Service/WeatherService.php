<?php

namespace WeatherBundle\Service;

use WeatherBundle\Provider\WeatherProviderInterface;
use WeatherBundle\Struct\Location;

class WeatherService
{
    /** @var WeatherProviderInterface  */
    protected $provider;

    public function __construct(WeatherProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Returns temperature of location provided
     *
     * @param Location $location
     * @return mixed
     */
    public function getWeatherForLocation(Location $location)
    {
        return $this->provider->getWeatherByLocation($location);
    }
}