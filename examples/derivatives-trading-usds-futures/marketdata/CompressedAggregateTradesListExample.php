<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function compressedAggregateTradesListExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $fromId = 1;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 100;
    $response = $api->compressedAggregateTradesList($symbol, $fromId, $startTime, $endTime, $limit);
    print_r($response);
}

compressedAggregateTradesListExample();
