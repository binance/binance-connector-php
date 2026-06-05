<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function queryCurrentOpenOrderExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $orderId = 1;
    $origClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->queryCurrentOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($response);
}

queryCurrentOpenOrderExample();
