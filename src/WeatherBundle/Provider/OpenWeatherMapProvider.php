<?php

namespace WeatherBundle\Provider;

use WeatherBundle\Provider\WeatherProviderInterface;
use WeatherBundle\Object\Location;

class OpenWeatherMapProvider implements WeatherProviderInterface
{
    public function getWeatherByLocation(Location $location)
    {
        $url = "http://api.openweathermap.org/data/2.5/weather?lat={$location->getLatitude()}&lon={$location->getLongitude()}&units=metric";
        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        $responseJson = curl_exec($c);
        curl_close($c);
        $response = json_decode($responseJson);

        return $response->main->temp;
    }
}