<?php

namespace Binance\Client\DerivativesTradingCoinFutures;

use Binance\Common\Configuration\ConfigurationBuilder;

class DerivativesTradingCoinFuturesRestApiUtil
{
    public const BASE_URL = 'https://dapi.binance.com';
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
