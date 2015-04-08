<?php
namespace WeatherBundle\Provider;
use WeatherBundle\Object\Location;

interface WeatherProviderInterface
{
    public function getWeatherByLocation(Location $location);
}