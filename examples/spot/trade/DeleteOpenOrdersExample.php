<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function deleteOpenOrdersExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $recvWindow = 5000.0;
    $response = $api->deleteOpenOrders($symbol, $recvWindow);
    print_r($response);
}

deleteOpenOrdersExample();
