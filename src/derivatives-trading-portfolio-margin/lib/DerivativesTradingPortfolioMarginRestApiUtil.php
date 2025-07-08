<?php

namespace Binance\Client\DerivativesTradingPortfolioMargin;

use Binance\Common\Configuration\ConfigurationBuilder;

class DerivativesTradingPortfolioMarginRestApiUtil
{
    public const BASE_URL = 'https://papi.binance.com';
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
