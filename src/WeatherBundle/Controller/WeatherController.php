<?php

namespace WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use WeatherBundle\Provider\OpenWeatherMapProvider;

class WeatherController extends Controller
{
    /**
     * @Route("/weather")
     * @Template()
     */
    public function indexAction()
    {
        $watherService = $this->get('nfq.weather');
        $temp = $watherService->getWeather(54.6833, 25.2833); //vilnius 54.6833° N, 25.2833

        return ['temp' => $temp];
    }
}
