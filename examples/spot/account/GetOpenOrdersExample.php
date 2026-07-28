<?php

require_once __DIR__.'/../vendor/autoload.php';

use Binance\Client\Spot\Api\SpotRestApi;
use Binance\Client\Spot\SpotRestApiUtil;

function getOpenOrdersExample()
{
    $configurationBuilder = SpotRestApiUtil::getConfigurationBuilder();
    $configurationBuilder->apiKey('apiKey')->privateKey('file:///path/to/private.key');
    $api = new SpotRestApi($configurationBuilder->build());
    $symbol = 'LTCBTC';
    $recvWindow = 5000;
    $response = $api->getOpenOrders($symbol, $recvWindow);
    print_r($response);
}

getOpenOrdersExample();
