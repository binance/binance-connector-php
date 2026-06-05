<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function myTradesExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BNBUSDT';
    $orderId = 1;
    $startTime = 1735693200000;
    $endTime = 1735693200000;
    $fromId = 1;
    $limit = 500;
    $recvWindow = 5000.0;
    $response = $api->myTrades($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($response);
}

myTradesExample();
