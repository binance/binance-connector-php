<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function allOrdersExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $orderId = 1;
    $startTime = 1623319461670;
    $endTime = 1641782889000;
    $limit = 100;
    $recvWindow = 5000;
    $response = $api->allOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

allOrdersExample();
