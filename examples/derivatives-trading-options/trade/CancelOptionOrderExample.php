<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function cancelOptionOrderExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $symbol = 'BTC-200730-9000-C';
    $orderId = 4611875134427365000;
    $clientOrderId = '10000';
    $recvWindow = 5000;
    $response = $api->cancelOptionOrder($symbol, $orderId, $clientOrderId, $recvWindow);
    print_r($response);
}

cancelOptionOrderExample();
