<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function cancelMultipleOptionOrdersExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $symbol = '';
    $orderIds = null;
    $clientOrderIds = null;
    $recvWindow = 5000;
    $response = $api->cancelMultipleOptionOrders($symbol, $orderIds, $clientOrderIds, $recvWindow);
    print_r($response);
}

cancelMultipleOptionOrdersExample();
