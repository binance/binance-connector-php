<?php

namespace Binance\Client\DerivativesTradingUsdsFutures;

use Binance\Common\Configuration\ConfigurationBuilder;

class DerivativesTradingUsdsFuturesRestApiUtil
{
    public const BASE_URL = 'https://fapi.binance.com';
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
