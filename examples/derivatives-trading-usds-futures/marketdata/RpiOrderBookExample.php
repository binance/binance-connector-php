<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function rpiOrderBookExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $limit = 1000;
    $response = $api->rpiOrderBook($symbol, $limit);
    print_r($response);
}

rpiOrderBookExample();
