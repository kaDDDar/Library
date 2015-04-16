<?php
namespace WeatherBundle\Parser;

use Buzz\Message\MessageInterface;

/**
 * Interface WeatherParserInterface
 * @package WeatherBundle\Provider
 */
interface WeatherParserInterface
{
    /**
     * @param MessageInterface $buzz
     * @return float
     */
    public function getTemp(MessageInterface $buzz);
}