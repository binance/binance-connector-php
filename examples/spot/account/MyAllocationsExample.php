<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function myAllocationsExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'BTCUSDT';
    $startTime = 1735693200000;
    $endTime = 1735693200000;
    $fromAllocationId = 0;
    $limit = 1;
    $orderId = 1;
    $recvWindow = 5000;
    $response = $api->myAllocations($symbol, $startTime, $endTime, $fromAllocationId, $limit, $orderId, $recvWindow);
    print_r($response);
}

myAllocationsExample();
