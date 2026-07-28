<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\DerivativesTradingOptions\Api\DerivativesTradingOptionsRestApi;
use Binance\Client\DerivativesTradingOptions\DerivativesTradingOptionsRestApiUtil;

function querySingleOrderExample()
{
    $configurationBuilder = DerivativesTradingOptionsRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new DerivativesTradingOptionsRestApi($configurationBuilder->build());
    $symbol = 'BTC-200730-9000-C';
    $orderId = 4611875134427365000;
    $clientOrderId = 'abc123';
    $recvWindow = 5000;
    $response = $api->querySingleOrder($symbol, $orderId, $clientOrderId, $recvWindow);
    print_r($response);
}

querySingleOrderExample();
