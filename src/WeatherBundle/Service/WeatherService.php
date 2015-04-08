<?php

namespace WeatherBundle\Service;

use WeatherBundle\Provider\WeatherProviderInterface;
use WeatherBundle\Object\Location;

class WeatherService
{
    protected $provider;

    public function __construct(WeatherProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function getWeatherForLocation(Location $location)
    {
        return $this->provider->getWeatherByLocation($location);
    }
}