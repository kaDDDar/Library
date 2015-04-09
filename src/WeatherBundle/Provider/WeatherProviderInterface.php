<?php
namespace WeatherBundle\Provider;
use WeatherBundle\Struct\Location;

/**
 * Interface WeatherProviderInterface
 * @package WeatherBundle\Provider
 */
interface WeatherProviderInterface
{
    public function getWeatherByLocation(Location $location);
}