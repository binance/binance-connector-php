<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function currentAllOpenOrdersExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $recvWindow = 5000;
    $response = $api->currentAllOpenOrders($symbol, $recvWindow);
    print_r($response);
}

currentAllOpenOrdersExample();
