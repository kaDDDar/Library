<?php
namespace WeatherBundle\Provider;

interface WeatherProviderInterface
{
    public function getWeatherByLocation();
    public function setLongitude($longitude);
    public function setLatitude($latitutde);
}