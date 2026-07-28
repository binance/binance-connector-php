<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function ticker24hrPriceChangeStatisticsExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $symbol = 'BTC-200730-9000-C';
    $response = $api->ticker24hrPriceChangeStatistics($symbol);
    print_r($response);
}

ticker24hrPriceChangeStatisticsExample();
