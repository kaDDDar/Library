<?php

namespace WeatherBundle\Parser;

use Buzz\Message\MessageInterface;

/**
 * Class WeatherParserInterface
 * @package WeatherBundle\Parser
 */

class OpenWeatherMapParser implements WeatherParserInterface
{
    /**
     * Retrieves Temp from Buzz response
     *
     * @param MessageInterface $buzzResponse
     * @return float
     */
    public function getTemp(MessageInterface $buzzResponse)
    {
        $contentJson = $buzzResponse->getContent();
        $content = json_decode($contentJson);

        return $content->main->temp;
    }
}