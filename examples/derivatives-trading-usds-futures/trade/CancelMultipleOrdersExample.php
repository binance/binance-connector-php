<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingUsdsFutures\Api\DerivativesTradingUsdsFuturesRestApi;
use Binance\Client\DerivativesTradingUsdsFutures\DerivativesTradingUsdsFuturesRestApiUtil;

function cancelMultipleOrdersExample()
{
    $configurationBuilder = DerivativesTradingUsdsFuturesRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingUsdsFuturesRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $orderIdList = [1234567];
    $origClientOrderIdList = ['my_id_1'];
    $recvWindow = 5000;
    $response = $api->cancelMultipleOrders($symbol, $orderIdList, $origClientOrderIdList, $recvWindow);
    print_r($response);
}

cancelMultipleOrdersExample();
