<?php

namespace WeatherBundle\Provider;

use WeatherBundle\Struct\Location;
use Buzz\Browser;

/**
 * Class OpenWeatherMapProvider
 * @package WeatherBundle\Provider
 */

class OpenWeatherMapProvider implements WeatherProviderInterface
{
    /**
     * Inject Buzz browser service
     *
     * @param Browser $browser
     */
    public function __construct(Browser $browser)
    {
        $this->browser = $browser;
    }

    /**
     * Gets weather data from OpenWeatherMap, by location, and returns temperature
     *
     * @param Location $location
     * @return float
     */
    public function getWeatherByLocation(Location $location)
    {
        $response = $this->browser->get("http://api.openweathermap.org/data/2.5/weather?lat={$location->getLatitude()}&lon={$location->getLongitude()}&units=metric");
        $contentJson = $response->getContent();
        $content = json_decode($contentJson);

        return $content->main->temp;
    }
}