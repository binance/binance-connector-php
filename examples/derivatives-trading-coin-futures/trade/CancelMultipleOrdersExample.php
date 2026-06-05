<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingCoinFutures\Api\DerivativesTradingCoinFuturesRestApi;
use Binance\Client\DerivativesTradingCoinFutures\DerivativesTradingCoinFuturesRestApiUtil;

function cancelMultipleOrdersExample()
{
    $configurationBuilder = DerivativesTradingCoinFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingCoinFuturesRestApi($configurationBuilder->build());
    $symbol = '';
    $orderIdList = null;
    $origClientOrderIdList = null;
    $recvWindow = 5000;
    $response = $api->cancelMultipleOrders($symbol, $orderIdList, $origClientOrderIdList, $recvWindow);
    print_r($response);
}

cancelMultipleOrdersExample();
