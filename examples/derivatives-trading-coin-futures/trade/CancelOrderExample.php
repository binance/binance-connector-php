<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;

function cancelOrderExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $orderId = 1;
    $origClientOrderId = '1';
    $recvWindow = 5000;
    $response = $api->cancelOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($response);
}

cancelOrderExample();
