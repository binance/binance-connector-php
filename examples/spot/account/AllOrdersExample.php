<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function allOrdersExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $orderId = 1;
    $startTime = 1735693200000;
    $endTime = 1735693200000;
    $limit = 500;
    $recvWindow = 5000.0;
    $response = $api->allOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($response);
}

allOrdersExample();
