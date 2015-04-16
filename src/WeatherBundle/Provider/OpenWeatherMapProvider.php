<?php

namespace WeatherBundle\Provider;

use Buzz\Browser;
use WeatherBundle\Parser\WeatherParserInterface;
use WeatherBundle\Struct\Location;


/**
 * Class OpenWeatherMapProvider
 * @package WeatherBundle\Provider
 */

class OpenWeatherMapProvider implements WeatherProviderInterface
{
    /** @var  Browser $browser */
    protected $browser;

    /** @var WeatherParserInterface $parser */
    protected $parser;

    /**
     * Inject Dependencies
     *
     * @param Browser $browser
     * @param WeatherParserInterface $parser
     */
    public function __construct(Browser $browser, WeatherParserInterface $parser)
    {
        $this->browser = $browser;
        $this->parser = $parser;
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
        $temp = $this->parser->getTemp($response);

        return $temp;
    }
}