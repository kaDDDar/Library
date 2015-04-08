<?php

namespace WeatherBundle\Provider;

use WeatherBundle\Object\Location;
use Buzz\Browser;

/**
 * Class OpenWeatherMapProvider
 * @package WeatherBundle\Provider
 */

class OpenWeatherMapProvider implements WeatherProviderInterface
{
    /**
     * Gets weather data from OpenWeatherMap, by location, and returns temperature
     *
     * @param Location $location
     * @return float
     */
    public function getWeatherByLocation(Location $location)
    {
        $browser = new Browser();
        $response = $browser->get("http://api.openweathermap.org/data/2.5/weather?lat={$location->getLatitude()}&lon={$location->getLongitude()}&units=metric");
        $contentJson = $response->getContent();
        $content = json_decode($contentJson);

        return $content->main->temp;
    }
}