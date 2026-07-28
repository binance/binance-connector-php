<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function oldTradesLookupExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $limit = 50;
    $fromId = 1;
    $response = $api->oldTradesLookup($symbol, $limit, $fromId);
    print_r($response);
}

oldTradesLookupExample();
