<?php
namespace WeatherBundle\Provider;
use WeatherBundle\Object\Location;

/**
 * Interface WeatherProviderInterface
 * @package WeatherBundle\Provider
 */
interface WeatherProviderInterface
{
    public function getWeatherByLocation(Location $location);
}