<?php

namespace Binance\Client\W3WPrediction;

use Binance\Common\Configuration\ConfigurationBuilder;

class W3WPredictionRestApiUtil
{
    public const BASE_URL = 'https://api.binance.com';
    public const HAS_TIME_UNIT = false;

    public static function getConfigurationBuilder(): ConfigurationBuilder
    {
        $configurationBuilder = new ConfigurationBuilder();
        if (!static::HAS_TIME_UNIT) {
            $configurationBuilder->timeUnit(null);
        }
        $configurationBuilder->url(static::BASE_URL);

        return $configurationBuilder;
    }
}
