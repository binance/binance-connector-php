<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function queryOrderExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $orderId = 1917641;
    $origClientOrderId = 'abc';
    $recvWindow = 5000;
    $response = $api->queryOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($response);
}

queryOrderExample();
