<?php

namespace WeatherBundle\Service;

use WeatherBundle\Provider\WeatherProviderInterface;

class WeatherService
{
    protected $provider;

    public function __construct(WeatherProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function getWeather($latitude, $longitude)
    {
        $this->provider->setLongitude($longitude);
        $this->provider->setLatitude($latitude);

        return $this->provider->getWeatherByLocation();
    }
}