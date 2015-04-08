<?php

namespace WeatherBundle\Provider;

use WeatherBundle\Provider\WeatherProviderInterface;
use WeatherBundle\Object\Location;
use Buzz\Browser;

class OpenWeatherMapProvider implements WeatherProviderInterface
{
    public function getWeatherByLocation(Location $location)
    {
        $browser = new Browser();
        $response = $browser->get("http://api.openweathermap.org/data/2.5/weather?lat={$location->getLatitude()}&lon={$location->getLongitude()}&units=metric");
        $contentJson = $response->getContent();
        $content = json_decode($contentJson);

        return $content->main->temp;
    }
}