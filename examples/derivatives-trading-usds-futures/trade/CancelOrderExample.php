<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function cancelOrderExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $orderId = 283194212;
    $origClientOrderId = 'myOrder1';
    $recvWindow = 5000;
    $response = $api->cancelOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($response);
}

cancelOrderExample();
