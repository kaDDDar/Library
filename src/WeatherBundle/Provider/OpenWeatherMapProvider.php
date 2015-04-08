<?php

namespace WeatherBundle\Provider;

use WeatherBundle\Provider\WeatherProviderInterface;

class OpenWeatherMapProvider implements WeatherProviderInterface
{
    protected $longitude;
    protected $latitude;

    public function getWeatherByLocation()
    {
        $url = "http://api.openweathermap.org/data/2.5/weather?lat={$this->latitude}&lon={$this->longitude}&units=metric";
        $c = curl_init($url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        $responseJson = curl_exec($c);
        curl_close($c);
        $response = json_decode($responseJson);

        return $response->main->temp;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
}